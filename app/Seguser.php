<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seguser extends Authenticatable {
    use Notifiable;

    protected $table = "seg_user";
    protected $primaryKey = "user_id";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "user_id", "v_Codusuario", "v_Apellidos", "v_Nombres", "v_Email", "v_Telefonos", "i_CodCliente", "c_TipoUsuario", "v_CodEstado", "i_CodTipoPerfil", "f_creacion"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        "password", "remember_token",
    ];

/*
    public function getAuthPassword()
    {
      return $this->password;
    }*/
}
