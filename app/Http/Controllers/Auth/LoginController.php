<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\StoreUpdataPostFormRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Formedit;
use Illuminate\Http\Request;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/formedit';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function user_confirm(Request $request)
    // {
    //     $data = $request->all();
    //     $input_email = $data['email'];
    //     $input_password = $data['password'];
    //     $query = "SELECT * FROM users WHERE email='$input_email';";
    //     $query_data = DB::select($query);
    //     $value = $query_data[0];


    //     if ( count($query_data) == 0 ) {
    //         echo "Email is not register.";
    //         return ;
    //     }
    //     if ( $input_password != $query_data[0]->password ) {
    //         echo "Password is don't correctly.";
    //         return ;
    //     }
    //     if ( $query_data[0]->authority == "admin" ) {
    //         // echo "admin";
    //         redirect('pclist');
    //     }
    //     redirect('/formedit');        
    //     // var_dump($input_password);exit;        

    // }

}
