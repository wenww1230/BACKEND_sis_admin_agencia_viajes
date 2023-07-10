<?php
namespace App\Modules\UsuarioSistema\Repositories;

use App\Models\UsuarioSistema;
use App\Modules\UsuarioSistema\Contracts\IUsuariosSistema;

class RepoUsuariosSistema implements IUsuariosSistema
{
    public function cargarUsersSys (){
        $users = UsuarioSistema::all();
        return $users;
    }
}

?>