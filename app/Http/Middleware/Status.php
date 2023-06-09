<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class Status
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = User::where('email',$request->email)->first();
        if (!empty($user)){
            if($user->is_active == 0){
//                return redirect(route('subscription'));
                return Response::json(['status'=>true,'message'=>'wait , your account is pending'],200);
            }
            return $next($request);
        }else{
            return Response::json(['status'=>false,'message'=>'sorry , your account is not found'],200);
        }
    }
}
