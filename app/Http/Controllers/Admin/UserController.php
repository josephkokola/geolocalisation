<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
//use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // recuperation des utilisateurs depuis la base donnée
    public function list(){
        $dataUser=User::all();
        return view('admin.utilisateur.list',compact('dataUser'));
    }

    // recuperation des utilisateurs depuis la base donnée
    //public function index(){
        //$dataUser=user::all();
        //return redirect('admin.utilisateur.list',compact('dataUser'));
    //}

    public function create(){
        return view('admin.utilisateur.create');
    }

    public function forget_password(Request $request){
        $email=$request->str_forget_email;
        //dd($email);
        $request= DB::table('users')
                 ->where(['email'=>$email])
                 ->get();

        $rand_id=rand(111111111, 999999999);
        if (isset($request[0])) {

            DB::table('users')
                ->where(['email'=>$email])
                ->update(['is_forget_password'=>1, 'rand_id'=>$rand_id]);

            $data=['nom'=>$request[0]->nom, 'rand_id'=>$rand_id];
            $user['to']= $email;
            Mail::send('forget_email', $data, function ($message) use ($user) {
                $message->to($user['to']);
                $message->subject("Mot de passe oublié");
            });

            Session::flash('msg', 'Nous vous avons envoyé un message.verifiez votre adresse mail ');
            return Redirect()->back();

            //return response()->json(['status'=>'success','message'=>'Nous avons envoyé un message.verifiez votre adresse mail ']);
        }else{
            //$request->session()->flash('message', 'Le mail n existe pas');
            Session::flash('message', "Le mail n'existe pas");
            return Redirect()->back();
            //return response()->json(['status'=>'error','message'=>"Le mail n'existe pas"]);
        }
    }

    public function forgot_password_change(Request $request,$id){
        $result= DB::table('users')
                   ->where(['rand_id'=>$id])
                   ->where(['is_forget_password'=>1])
                   ->get();
            
        if(isset($result[0])){
            $request->session()->put('FORGOT_PASSWORD_USER_ID', $result[0]->id);
            return view('forgot_password_change');
        }else{
            return redirect()->route('login');
        } 
       
        
    }

    public function forgot_password_change_process(Request $request){
        
        $new_password=$request->password;

        $validated=$request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
        $request= DB::table('users')
                 ->where(['id'=>$request->session()->get('FORGOT_PASSWORD_USER_ID')])
                 ->update(

                    [
                        'is_forget_password'=>0,
                        'password'=>Hash::make($new_password),
                        'rand_id'=>''
                    ]
                 );
            return redirect()->route( 'login' )->with( 'success' , "Mot de passe changé avec succès" );
            //Session::flash('msg', 'Nous vous avons envoyé un message.verifiez votre adresse mail ');
            //return Redirect()->back();
        }
    
}
