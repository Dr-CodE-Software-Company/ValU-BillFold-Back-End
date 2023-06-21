<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscRequest;
use App\Models\Admin;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SubscriptionController extends Controller
{
    public function index(){
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        $Subscriptions = Subscription::all();
        return view('admin.Subscription.index',compact('Subscriptions','notifications','admin'));
    }

    public function create(){
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        return view('admin.Subscription.create',compact('notifications','admin'));
    }

    public function store(SubscRequest $request){

        $Subscription = Subscription::create([
            'title' => $request->title,
            'price' => $request->price,
            "description"=> $request->description,
            'period' => $request->period
        ]);
        return redirect(url('Subscription'))->withsuccess("the Subscription is add successfully");
    }
    public function edit($id){
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        $subscription = Subscription::find($id);
        return view('admin.Subscription.edit',compact('subscription','notifications','admin'));
    }

    public function update(SubscRequest $request,$id){
        $subscription = Subscription::find($id);
            $subscription->title = $request->title;
            $subscription->price= $request->price;
            $subscription->description= $request->description;
            $subscription->period= $request->period;
            $subscription->save();
            return redirect(url('Subscription'))->withsuccess("the Subscription is updated successfully");
    }
    public function delete($id){
        $subscription = Subscription::find($id);
        $subscription->delete();
        return redirect(url('Subscription'))->withsuccess("the Subscription is deleted successfully");
    }

}
