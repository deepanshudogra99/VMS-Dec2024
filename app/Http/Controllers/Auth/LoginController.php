<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


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

  use AuthenticatesUsers;

  /**
   * Where to redirect users after login.
   *
   * @var string
   */
  protected $redirectTo = '/home';

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest')->except('logout');
    $this->middleware('auth')->only('logout');
  }
  public function showLoginForm()
  {
    // Generate two random numbers for the sum
    $num1 = rand(10, 99);
    $num2 = rand(10, 99);

    // Store the sum in the session to validate later
    session(['captcha_answer' => $num1 + $num2]);

    // Return the login view with the numbers
    return view('welcome', compact('num1', 'num2'));
  }

  public function login(Request $request)
  {
    // Validate the input fields, including the CAPTCHA answer
    $request->validate([
      'email' => 'required|email',
      'password' => 'required',
      'captcha' => 'required|numeric|in:' . session('captcha_answer'),
    ]);

    // Attempt to log in the user
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
      return redirect()->route('home'); // Redirect after successful login
    }

    // If authentication fails, return back with errors
    return back()->withErrors([
      'email' => 'These credentials do not match our records.',
    ]);
  }

}
