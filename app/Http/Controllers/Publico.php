<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use DB;
use Hash;
use Mail;
use Redirect;
use Illuminate\Http\Request;
use Response;
use Session;
use Validator;
use App\User as User;

class Publico extends Controller {
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function __construct() {
        $this->middleware("guest")->except(["logout"]);
    }

    public function login() {
        $usuario = Session::get("usuario");
        $clave = Session::get("clave");
        $errmsg = Session::get("errmsg");
        $arrData = [];
        if(strcmp($usuario, "") != 0) $arrData["usuario"] = $usuario;
        if(strcmp($clave, "") != 0) $arrData["clave"] = $clave;
        if(strcmp($errmsg, "") != 0) $arrData["errmsg"] = $errmsg;
        return view("publico.login")->with($arrData);
        return view("publico.login");
    }

    public function procesar(Request $request) {
        $inputs = $request->input();
        $rules = ["usuario" => "required", "clave" => "required"];
        $v = Validator::make($inputs, $rules);
        if($v->passes()) {
            if(Auth::attempt(["v_Codusuario" => $inputs["usuario"], "password" => $inputs["clave"]], true)) {
                return redirect("/");
            }
            else {
                Session::flash("usuario", $inputs["usuario"]);
                Session::flash("clave", $inputs["clave"]);
                Session::flash("errmsg", "No se encontró un usuario con los datos proporcionados.");
                return redirect("login");
            }
        }
        else {
            Session::flash("usuario", $inputs["usuario"]);
            Session::flash("clave", $inputs["clave"]);
            Session::flash("errmsg", "Ingrese correctamente el usuario y contraseña.");
            return redirect("login");
        }
    }

}