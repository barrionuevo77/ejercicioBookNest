class usuariosModel{
    public function getUsuarioById($idPlataforma){
            $db = new PDO();
            $query -> $db -> prepare ('SELECT nombre FROM usaurios WHERE idPlataforma = '?');
            $query -> execute (['$idPlataforma']);
            return query->fetch(PDO::fetch_OBJ);
    }
}