class librosModel{
    public functiongetLibros($id_libro){
        $db = new PDO();
        $query -> $db -> prepare (SELECT titulo,autor,precio_diario FROM libros WHERE id_libro = ?);
        $query -> execute([$id_libro]);
        return query -> fetch(PDO::fetch_obj);
    }
}