<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function Login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ], [
            'email.required' => 'Email diperlukan!',
            'email.exists' => 'Email tidak diketemukan',
            'password.required' => 'Password diperlukan'
        ]);

        if ($validator->fails()) {
            return redirect('/admin/login')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                if(Auth::user()->roles == json_encode(["ADMIN"])){
                    return redirect()->intended('admin');
                } else {
                    // return redirect()->intended('pendaftar');
                }
            } else {
                $validator->errors()->add('password', 'Password tidak benar');
                return redirect('/admin/login')
                            ->withErrors($validator)
                            ->withInput();
            }
        }
    }

    public function resetpass(){
        return view('auth.passwords.reset');
    }

    public function reset(Request $request){
        $validator = Validator::make($request->all(),[
            'password_lama' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ],[
            'password_lama.required' => 'Password Lama diperlukan',
            'password.required' => 'Password diperlukan',
            'password.confirmed' => 'Password tidak sama',
            'password_confirmation.required' => 'Confirmation Password diperlukan'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        } else {
            $email = Auth::user()->email;
            $check = Auth::attempt(['email' => $email,'password' => $request->password_lama]);
            if($check){
                User::find(Auth::user()->id)->update(['password' => bcrypt($request->password)]);
                Auth::attempt(['email' => $email,'password' => $request->password]);
                return redirect()->back()->with('info','Password berhasil diubah');
            } else {
                $validator->errors()->add('password_lama', 'Password tidak benar');
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }
        }
    }
}
