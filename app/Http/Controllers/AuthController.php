<?php

namespace App\Http\Controllers;

use App\Helpers\Html;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function AddUser(Request $request){

        /* валидация полей */

        $validated = $request->validate([

            'email'    => 'required|unique:users|max:20|min:5',
            'password' => 'required|same:password-repeat|max:32|min:8',
            'avatar' => 'file|max:4096'

        ]);

        if($validated['avatar']){
            $avatar = $validated['avatar']->store('public/avatars');
            $validated['avatar'] = $avatar;
        }

        $validated['password'] = password_hash($validated['password'], PASSWORD_DEFAULT);
        User::create($validated);
        Html::alert('Вы успешно зарегистрировались!', 'success');

        $this->authorization($validated['email'], $request['password']);
        
        return redirect()->route('home');
    }

    public function Login(Request $request){
        if ($this->authorization($request['email'], $request['password'])) {
            return redirect()->route('home');
        }else{
            return redirect()->route('login');
        }
    }

    private function authorization($email, $password){
        if(User::where('email', $email)->exists()){
            
            $db_password = User::where('email', $email)->first('password')->toArray()['password'];
            $avatar = User::where('email', $email)->first('avatar')->toArray()['avatar'];
            $role = User::where('email', $email)->first('role_id')->toArray()['role_id'];
            if(password_verify($password, $db_password)){

                session()->regenerate();
                session(['email' => $email, 'password' => $db_password, 'avatar' => $avatar, 'role' => $role]);

                return true;
            }else{
                Html::alert('Введен не верный пароль', 'danger');
                return false;
            }

        }else{
            Html::alert('Пользователь с таким email не зарегистрирован', 'danger');
            return false;
        }

    }

    public function Logout(){
        session()->flush();
        Html::alert('Вы вышли из аккаунта', 'warning');
        return redirect()->route('home');
    }

}
