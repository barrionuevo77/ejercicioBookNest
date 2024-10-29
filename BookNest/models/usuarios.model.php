class alquileresModel{
    public function getUsuarios($id_usuario){
        $db = new PDO();
        $query -> $db -> prepare('SELECT id_usuario,membresia_activa FROM usuarios WHERE id_usuario = ?');
        $query -> execute(['$id_usuarios']);
        return query -> fetch(PDO::fetch-obj);
    }
}