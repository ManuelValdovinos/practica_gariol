<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    private $user;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(
        User $user
    ){
        $this->middleware('guest', ['except' => 'logout']);
        $this->user = $user;
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginAuth(Request $request)
    {
        $validator = Validator::make($request->all(),[
                'email' => 'required|email',
                'password' => 'required|min:6'
            ]);

        if($validator->fails())
        {
            return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
        }else{

            $email = $request['email'];
            $password = $request['password'];

            if(Auth::attempt(['email' => $email,'password' => $password]))
            {
                return redirect()
                        ->route('home');
            }
            else
            {
                return redirect()
                        ->back()
                        ->with('loginFailed',true)
                        ->withInput();
            }
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function create(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|min:3',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'password_confirmation' => 'required|min:6|same:password'
            ]);

        if($validator->fails())
        {
            return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
        }else{

            $user = $this->user->store($request->all());

            Auth::login($user,true);

            return redirect()
                    ->route('home');
        }
    }

    public function logout()
    {

        Auth::logout();

        return redirect()
                ->route('home');
    }

}
