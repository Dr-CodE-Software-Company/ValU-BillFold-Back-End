<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Requests\InvoiceRequest;
use App\Models\Invoice;
use App\Models\User;
use PDF;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;

class InvoiceController extends Controller
{
    public function create(InvoiceRequest $request){

        if($request->image){
            $filename = '';
            $filename = uploadImage("invoice",$request->image);
        }else{
            return Response::json(['status'=>false,'message'=> 'your image not still in your phone'],404);
        }

        $invoice = Invoice::create([
            "invoice_num" => $request->invoice_num,
            "due_date" => $request->due_date,
            "amount" => $request->amount,
            "bank_code" => $request->bank_code,
            'user_id' => auth('api')->user()->id,
            'IdCompany'=> $request->IdCompany,
            'image' => $filename,
        ]);
        if($request->status_value == 1){
            $invoice->status_value = 1 ;
            $invoice->status = "paid";
            $invoice->save();
        }
        return Response::json(['status'=>true,'message'=> 'invoice created successfully'],200);
//        $pdf = PDF::loadView('users.invoices.index',compact('invoice'))->setOptions(['defaultFont' => 'sans-serif']);;
//        return $pdf->download('invoice.pdf');
    }
    public function paid(){
        $invoice_paid = Invoice::where("status_value" , '1')->where('user_id',auth('api')->user()->id)->get();
        if(isset($invoice_paid)&& $invoice_paid->count() > 0){
            return Response::json(['status'=>true,'message'=>$invoice_paid ],200);
        }else{
            return Response::json(['status'=>true,'message'=> []],200);
        }
    }
    public function due(){
        $invoice_due = Invoice::where("status_value" , '0')->where('user_id',auth('api')->user()->id)->get();
        if(isset($invoice_due)&& $invoice_due->count() > 0){
            return Response::json(['status'=>true,'message'=>$invoice_due ],200);
        }else{
            return Response::json(['status'=>true,'message'=> [] ],200);
        }
    }
    public function pdf($id){
        $invoices = Invoice::where('id',$id)->first();
        $user = User::where('id',$invoices->user_id)->first();
        if($invoices->count() > 0 && isset($invoices)){
            $fileInfo = pathinfo($invoices['image']);
            $my =  "img/invoice/" . $fileInfo['basename'];
            $pdf = PDF::loadView('users.invoices.index',compact('invoices','user','my'))->setOptions(['defaultFont' => 'sans-serif']);
	        return $pdf->download('invoices.pdf');
        }else{
            return Response::json(['status'=>false,'message'=> 'sorry ,no invoice yet'],404);
        }
    }

    public function details(Request $request){
        $invoice = Invoice::where("id" , $request->invoice_id)->get();
        if($invoice->count() > 0 ){
            return Response::json(['status'=>true,'message'=>$invoice ],200);
        }else{
            return Response::json(['status'=>true,'message'=> []],200);
        }
    }

    public function search(Request $request){
        $invoice = Invoice::where('due_date',$request->search)
            ->orwhere('invoice_num' , "like" , "%" .$request->search ."%")
            ->orwhere('bank_code' , "like", "%" . $request->search . "%")
            ->orwhere('IdCompany' , "=",  $request->search  )
            ->orWhere('amount',"=",$request->search)
            ->get();
        if ($invoice->count() > 0 ){
            return Response::json(['status'=>true,'message'=>$invoice ],200);
        }
        return Response::json(['status'=>false,'message'=> 'sorry ,no invoice match '],404);
    }

    public function index(Request $request){
       $subscription = Subscription::all();
       if ($subscription->count() > 0 ){
           return Response::json(['status'=>true,'message'=>$subscription ],200);
       }
        return Response::json(['status'=>false,'message'=> []],404);
    }

    public function update(Request $request,$id){
        $invoice = Invoice::find($id);
        if ($request->paid == 1){
            $invoice->status_value = 1;
            $invoice->status = "paid";
            $invoice->save();
            return Response::json(['status'=>true,'message'=>'your invoice is updated successfully' ],200);
        }elseif($request->paid == 0){
            $invoice->status_value = 0;
            $invoice->status = "due";
            $invoice->save();
            return Response::json(['status'=>true,'message'=>"your invoice is updated successfully" ],200);
        }else{
            return Response::json(['status'=>true,'message'=>"sorry this is error" ],200);
        }
    }

}
