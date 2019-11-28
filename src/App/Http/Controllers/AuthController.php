<?php

namespace SsGroup\BusTracking\App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('bustracking::auth.login');
    }

    public function login(AdminLoginRequest $request)
    {
        try {

            if ($this->loginType('email'))
                return redirect('/');

            return redirect()->back()->with('error', 'Credentials Does not Match.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Credentials Does not Match.');
        }
    }

    public function loginType($type)
    {
        if (auth()->attempt([$type => request('email'), 'password' => request('password')]))
            return true;

        return false;
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/admin/login');
    }

    public function changeAuth($project)
    {
        setProject($project);
        changeProject();

        return response()->json(['success' => 'yes'], 200);
    }
}
