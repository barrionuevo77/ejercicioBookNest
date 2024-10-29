class alquileresModel{
    public function getAlquilers($id_usuario){
        $db = new PDO();
        $query -> $db -> prepare('SELECT fecha_inicio, fecha_fin FROM Alquileres WHERE id = ?');
        $query -> execute(['$id']);
        return query -> fetch(PDO::fetch-obj);
    }
}