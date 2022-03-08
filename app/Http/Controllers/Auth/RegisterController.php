<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {


        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:11','min:11'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $user= new User();
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->phone_number=$data['phone_number'];
        $user->code=$data['code'];
        $user->password=Hash::make($data['password']);
        $user->save();
        // $user=User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'phone_number' => $data['phone_number'],
        //     'password' => Hash::make($data['password']),
        // ]);
        $date = \Carbon\Carbon::now();
        $dateforat = $date->format('d-m-Y');
        $account = new Account();
        $account->date = $dateforat;
        $account->user_id = $user->id;
        $account->reson = 'Opend Account';
        $account->debit = '0.00';
        $account->creadit = '0.00';
        $account->current_blance = '0.00';
        $account->status = 'paid';
        $account->tran_id = rand(1111111111111111,999999999999999);
        if($account->save()){
            return $user;
        }
    }
}
