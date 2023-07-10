<?php 
namespace App\Modules\Chofer\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\UsuarioSistema\Contracts\IUsuariosSistema;
use Illuminate\Support\Facades\Log;

class UsuarioSistemaController extends Controller
{
    protected $IUserSys;

    public function __construct(IUsuariosSistema $IUserSys)
    {
        $this->IUserSys = $IUserSys;
    }

    public function test()
    {
        return 1;
    }

    public function index()
    {
        log::debug('Mensaje de prueba en el index');
        try {
            $choferes = $this->IUserSys->cargarUsersSys();
            return response()->json($choferes);
        } catch (\Exception $e) { //excepcion de tipo 'Exception'. En PHP, el tipo de base 'Exception' es una clase base para todas las excepciones de este tipo
            log::debug($e->getMessage());//mostrara el mensaje de error
            
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {

    }

    public function show(string $id)
    {

    }

    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {
    
    }
}
?>