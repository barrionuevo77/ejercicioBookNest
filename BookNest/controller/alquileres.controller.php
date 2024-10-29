require_once "./libros.model.php"
require_once "./alquileres.model.php"

class alquileresController{
    class function getAlquileres(){
        if(empty($_GET['$id_usuarios'])){
            $this->view->showError('faltan datos');
            return
        }
        $id_usuarios = $_GET['$id_usuario'];
        $usuario = $this->model->getUsuarios($id_usuario);

        if(empty($usuario)){
            $this->view->showError("Usuario no existente o su membresia ha cadudado");
            return;
        }

        $fechaACtual = $_GET['$date'];
        $alquiler = $this->model->getAlquileres($id_usuario);
        $libros = $this->model->getLibros($id_libros);

        foreach($alquileres as $alquiler){
            $alquilere->$precioFinal = (($fechaActual - $alquilere->fecha_inicio) * $libro->precio_diario);
        }

        $this-> view -> showAlquileres();
    }
}