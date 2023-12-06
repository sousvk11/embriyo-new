<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Services\AuthService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    protected $authService;

    public function __construct(){
        $this->authService = new AuthService;
    }
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $roles = Role::where('id','!=',1)->get();
        return view('auth.register',compact('roles'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'min:8'],
            'role' => ['required'],
        ]);

        $result = $this->authService->register($data);
        if($result){
            flash("Registered Successfully")->success();
            return redirect()->route('login');
        }
        else{
            flash("Oops! something went wrong with the server please try later")->success();
            return redirect()->back();
        }
    }
}
