class ventasModel{
    public function getVentaId($idPlataforma){
            $db = new PDO();
            $query -> $db -> prepare ('SELECT id,cantidad,total_pagado FROM ventas WHERE idPlataforma = '?');
            $query -> execute (['$idPlataforma']);
            return query->fetch(PDO::fetch_OBJ);
    }
}