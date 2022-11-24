<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;

class CustomAuthController extends Controller
{
    public function index()
    {
        if(Auth::check()){

            return redirect()->route('dashboard');

        }else{
            return view('login.login');
        }
        
    }  
      
    public function customLogin(Request $request)
    {
       

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        

         
        if (Auth::attempt($credentials,false)) {

            $request->session()->regenerate();
         

            return redirect(RouteServiceProvider::HOME)->with('sucess','Usuário logado com sucesso!');
        }else
        {
            
            return redirect('login')->with('danger','E-mail ou senha inválido');
        }

    }
    public function verificaEmail()
    {
        return view('login.varificaEmail');
    }

    public function formVerificaEmail(Request $request)
    {              
           $request->validate([
               'email' => ['required', 'email'],
           ]);
   
           $status = Password::sendResetLink(
               $request->only('email')
           );
   
           return $status == Password::RESET_LINK_SENT
                       ? back()->with('status', __($status))
                       : back()->withInput($request->only('email'))
                               ->withErrors(['email' => __($status)]);  
    }
    
    public function redefinirSenha()
    {
        return view('redefinirSenha');
    }

    public function formRedefinirSenha(Request $request)
    {
       
            $request->validate([
                'token' => ['required'],
                'email' => ['required', 'email'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
    
           
            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function ($user) use ($request) {
                    $user->forceFill([
                        'password' => Hash::make($request->password),
                        'remember_token' => Str::random(60),
                    ])->save();
    
                    event(new PasswordReset($user));
                }
            );
    
            return $status == Password::PASSWORD_RESET
                        ? redirect()->route('login')->with('status', __($status))
                        : back()->withInput($request->only('email'))
                                ->withErrors(['email' => __($status)]);
        }  
        
        
   public function signOut(Request $request) {
    
    Auth::guard('web')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

  
        return redirect('login');
    }
}
