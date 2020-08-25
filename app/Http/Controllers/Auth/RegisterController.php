<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
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
            'v_Codusuario' => ['required', 'string', 'max:30'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Seguser::create([
            "user_id" => $data["user_id"],
            "v_Codusuario" => $data["v_Codusuario"],
            "v_Apellidos" => $data["v_Apellidos"],
            "v_Nombres" => $data["v_Nombres"],
            "v_Email" => $data["v_Email"],
            "v_Telefonos" => $data["v_Telefonos"],
            "i_CodCliente" => $data["i_CodCliente"],
            "c_TipoUsuario" => $data["c_TipoUsuario"],
            "v_CodEstado" => $data["v_CodEstado"],
            "i_CodTipoPerfil" => $data["i_CodTipoPerfil"],
            "f_creacion" => $data["f_creacion"],
        ]);
        /*
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        */
    }
}
