<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Invoice;
use App\Models\User;
use Carbon\Carbon;


class UserBlock extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:Block';

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
        $today = Carbon::now()->format('j-n-Y'); // 9/4  // 23-6-2023
        $invoices = Invoice::where("due_date", "<", $today)->where('status_value', 0)->get(); // 25-6-2023
        $SubscriptionUser  = User::where('DateSubscription',$today)->get();
        foreach ($SubscriptionUser as $item){
            $item->is_active=0;
            $item->save();
        }
        if ($invoices->count() > 0 && isset($invoices)) {
            $users = [];
            foreach ($invoices as $invoice) {
                $users[] = $invoice->user;
            }
            foreach ($users as $user) {
                $user->is_active = 0;
                $user->save();
            }
        }
    }
}
