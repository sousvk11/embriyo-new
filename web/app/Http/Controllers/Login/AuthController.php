<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    //
    protected $authService;
    public function __construct(){
        $this->authService = new AuthService;
    }
    public function login(Request $request){
        $data = $request->validate([
            "email"=> "required|email",
            "password"=> "required|min:8"
        ]);
        $auth = $this->authService->login($data);

        if($auth){

            $role = $this->authService->userRole();
            if(isset($role) && $role == 2){
                return redirect()->route("storedashboard");
            }elseif(isset($role) && $role == 1){
                return redirect()->route("admindashboard");
            }else{
                return redirect()->route("dashboard");
            }
        }
        else{
            flash('Invalid Credentials')->error();
            return redirect()->route("login");
        }
    }

    public function destroy(Request $request): RedirectResponse
    {
        $result = $this->authService->logout();
        if($result){
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }
        return redirect()->back();
    }

    public function passwordReset(Request $request){
        $data = $request->validate([
            'user_id' => ['required'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);
        $user = $this->authService->resetPassword($data);

        if($user) {
            flash("Password has been reset successfully")->success();
            return redirect()->route('login');
        }else{
            flash("Something Went Wrong")->error();
            return redirect()->back();
        }
    }
}
