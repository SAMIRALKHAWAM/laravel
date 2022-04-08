<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class send_email extends Controller
{

    public function sent(Request $request){
$user=User::where('email','=',$request->email)->first();
$email=$request->email;
    $mail_data=[
        'receiver'=>$request->email,
        'fromemail'=>'projectone.syria@gmail.com',
        'pin'=>$user->email_verified_at,
        'subject'=>'reset password'
    ];

    \Mail::send('email.email_template',$mail_data,function($message) use ($mail_data){
        $message->to($mail_data['receiver'])
            ->from($mail_data['fromemail'])
            ->subject($mail_data['subject']);
    });

return view('email.account',compact('email'));
}
public function ok(Request $request){
$user=User::where('email','=',$request->email)->first();
$email=$request->email;
if($request->pin==$user->email_verified_at){
    return view('email.reset',compact('email'));
}
}
public function new(Request $request){
$user=User::where('email','=',$request->email)->first();
$user->password=Hash::make($request->password);
$user->save();
return view('home');
}



}
