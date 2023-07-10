<?php

namespace App\Modules\Chofer\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

use App\Modules\UsuarioSistema\Contracts\IUsuariosSistema;
use App\Modules\UsuarioSistema\Repositories\RepoUsuariosSistema;
use Illuminate\Support\Facades\DB as FacadesDB;

class ServiceOrchestration extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(IChoferes::class, function (){
            return new RepoUsuariosSistema(new FacadesDB);
        });
    }
}

?>