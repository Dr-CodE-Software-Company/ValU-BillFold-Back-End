<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Invoice;
use App\Models\User;
use Carbon\Carbon;


class UserNotify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $twoday = Carbon::now()->addDays(2)->format('j-n-Y'); // 9/4  // 23-6-2023
        $oneday = Carbon::now()->addDay()->format('j-n-Y'); // 9/4  // 24-6-2023
        $invoices = Invoice::where("due_date",$twoday)->orwhere('due_date',$oneday)->where('status_value',0)->get(); // 25-6-2023
        if($invoices->count() >0 && isset($invoices)) {
            foreach ($invoices as $invoice) {
                $user = $invoice->user;

            $devicetoken = [];
                if ($user->is_active == '1') {
                    $devicetoken[] = $user->device_token;
                }

                $SERVER_API_KEY =
                    'AAAA5CChlQA:APA91bGu8gHdrECcxeGBJPPA2HwrukzHycSR9IAOAmU858hGY189V66pabOyrzOqgV1ruBQz7xXhmVe-gABKkx42nA0-YVdiOmpPPklxa1jCZTKr00IsuH8hVIV-Y56RLV2uwAuLD9cr';
                $data = [
                    "registration_ids" => $devicetoken,
                    "notification" => [
                        "title" => 'Invoices alert',
                        "body" => 'Please pay the billing number ' . $invoice->invoice_num . ' and his dueDate: ' . $invoice->due_date,
                    ],
                    "data" => [
                    "invoice" => $invoice
                ]
                ];

                $dataString = json_encode($data);

                $headers = [
                    'Authorization: key=' . $SERVER_API_KEY,
                    'Content-Type: application/json',
                ];

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

                $response = curl_exec($ch);
            }
        }
}
}
