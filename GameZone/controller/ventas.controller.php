require_once 'ventas.model.php';
require_once 'usuarios.model.php';
require_once 'videojuegos.model.php';

class ventasController{
    private $ventasModel;
    private $usuariosModel;
    private $videojuegosModel;

    public function __construct() {
        $this->ventasModel = new VentasModel();
        $this->usuariosModel = new UsuariosModel();
        $this->videojuegosModel = new VideojuegosModel();
    }
    public function ventas(){
        if(empty($_GET['idPlataforma'])){
            $this -> view -> showError ('faltan campos importantes');
            return
        }
        $idPlataforma= $_GET['$idPlataforma'];
        $usuario = $this -> model -> getUsuarioById($id);
        $videogames = $this -> model -> getVideojuegoById($id);
        $ventas = $this-> model -> getVentaId($id);
        
        foreach ($ventas as $venta) {
            $venta->usuario = $this->usuariosModel->getUsuarioById($venta->id_usuario)->nombre;
        }
        $this->view->render('ventasListado', ['ventas' => $ventas]);
        
        if (empty($videogames) || empty ($idPlataforma)){
            $this -> view -> showError ('Ese videojuego no esta en la plataforma indicada');
            return;
        }
        if ($videogames < 0){
            $this -> view -> showError ('falta de stock');
            return
        }

    }
}