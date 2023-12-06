<?php

namespace App\Services;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthService{
    public static function login($credentials):Bool{
        if(Auth::attempt($credentials)){
            return 1;
        }
        return 0;
    }

    public static function register(array $credentials):Bool{

        $user = User::create([
            'first_name' => $credentials['first_name'],
            'last_name' => $credentials['last_name'],
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
            'role_id' => $credentials['role'],
        ]);
        if($user->save()){
            return true;
        }
        return false;
    }

    public static function logout():bool{
        if(Auth::guard('web')->logout()){
            return true;
        }
        return false;
    }

    public function findUserByEmail(string $email):User|Array{
        $user = User::where('email', $email)->first();
        if($user){
            return $user;
        }
        return [];
    }

    public function resetPassword(array $data):Bool{
        $user = User::find($data['user_id']);
        $user->password = Hash::make($data['password']);
        $user->remember_token = Str::random(50);
        if($user->save()){
            return true;
        }
        else{
            return false;
        }
    }


    public function userRole(): Int|Null{
        $user = User::find(Auth::id());
        if(isset($user)){
            return $user->userRole();
        }else{
            return null;
        }

    }
}
