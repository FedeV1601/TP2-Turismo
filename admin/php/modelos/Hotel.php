<?php
class Hotel{

    private $db;

    public function __construct(){

    $this->db = DB::getConn();

    }

    public function find(int $id){

        $query = $this->db->prepare('SELECT * FROM hoteles where id_hotel = :id');
        $query->execute([
            ':id' => $id
        ]);

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function search($cuantos = 6, $search){

        $sql = 'SELECT * FROM hoteles where id_ciudad like :id';

        if (isset($_GET['busqueda'])) {
            $busqueda = $_GET['busqueda'];
            $sql .= ' AND nombre LIKE '.'"%'.$busqueda.'%"';
          
            }

        if (isset($_GET['orden'])) { //asc desc
            $sql .= " order By nombre " . $_GET['orden'];
        }

            $pagina = $_GET['pagina'] ?? 1;

            $desde = ($pagina -1) * $cuantos;

            $sql .= " limit $cuantos offset $desde";


        $query = $this->db->prepare($sql);
        $query->execute([
            ":id" => $search
        ]);
        return $query->fetchAll(PDO::FETCH_OBJ);

    }

    public function agregar($nombre, $direccion, $categoria, $nombre_archivo, $id_ciudad, $descripcion){
        $query = $this->db->prepare('INSERT INTO hoteles (nombre, direccion, categoria, imagen, id_ciudad, descripcion) VALUES (:nombre, :direccion, :categoria, :imagen, :id_ciudad, :descripcion)');
        $query->execute([
            ':nombre' => $nombre,
            ':direccion' => $direccion,
            ':categoria' => $categoria,
            ':imagen' => $nombre_archivo,
            ':id_ciudad' => $id_ciudad,
            ':descripcion' =>$descripcion,
        ]);
    }
    
    public function actualizar($id_hotel, $nombre, $direccion, $categoria, $imagen, $id_ciudad, $descripcion){
        $query = $this->db->prepare('UPDATE hoteles SET nombre=:nombre, direccion=:direccion, categoria=:categoria, imagen=:imagen, id_ciudad=:id_ciudad, descripcion=:descripcion WHERE id_hotel = :id');
        $query->execute([
            ':id' => $id_hotel,
            ':nombre' => $nombre,
            ':direccion' => $direccion,
            ':categoria' => $categoria,
            ':imagen' => $imagen,
            ':id_ciudad' => $id_ciudad,
            ':descripcion' =>$descripcion,
        ]);
    }

    public function eliminar($id){
        $query = $this->db->prepare('DELETE FROM hoteles WHERE id_hotel=:id');
        $query->execute([
            ":id" => $id
        ]); 
              }

  
    public function count()
    {
        $query = $this->db->prepare('SELECT count(id_hotel) as total from hoteles');

        $query->execute();

        $resultado = $query->fetch(PDO::FETCH_OBJ);

        return $resultado->total;
    }


    public function getAll($cuantos = 6)
    {
        $sql = 'SELECT * FROM hoteles ';

        if (isset($_GET['busqueda'])) {
            $busqueda = $_GET['busqueda'];
            $sql .= ' where nombre LIKE '.'"%'.$busqueda.'%"'; 
          
            }

        if (isset($_GET['orden'])) { 
            $sql .= " order By nombre " . $_GET['orden'];
        }

            $pagina = $_GET['pagina'] ?? 1;

            $desde = ($pagina -1) * $cuantos;

            $sql .= " limit $cuantos offset $desde";
     

        $query = $this->db->prepare($sql);

        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAllCount()
    {
        $sql = 'SELECT count(id_hotel) as total FROM hoteles';

            if (isset($_GET['busqueda'])) {
            $busqueda = $_GET['busqueda'];
            $sql .= " WHERE nombre LIKE '%$busqueda%'";
        }

        $query = $this->db->prepare($sql);

        $query->execute();
        
        
        return $query->fetch(PDO::FETCH_COLUMN);
    }

    
    public function getAllVista($cuantos = 6)
    {
        $sql = 'SELECT * FROM hoteles ';

       if (isset($_GET['id_ciudad'])) { 
            $hotelxCiudad = $_GET['id_ciudad'];
            $sql .= ' WHERE id_ciudad LIKE $hotelxCiudad';
        }

             if (isset($_GET['busqueda'])) {
            $busqueda = $_GET['busqueda'];
            $sql .= ' AND nombre LIKE '.'"%'.$busqueda.'%"'; 
          
            }

        if (isset($_GET['orden'])) { 
            $sql .= " order By nombre " . $_GET['orden'];
        }

            $pagina = $_GET['pagina'] ?? 1;

            $desde = ($pagina -1) * $cuantos;

            $sql .= " limit $cuantos offset $desde";
     

        $query = $this->db->prepare($sql);

        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }



    public function searchVista($cuantos = 6, $search){

        $sql = 'SELECT * FROM hoteles where id_ciudad like :id';

        if (isset($_GET['busqueda'])) {
            $busqueda = $_GET['busqueda'];
            $sql .= ' AND nombre LIKE '.'"%'.$busqueda.'%"';
            
        }

        if (isset($_GET['orden'])) { //asc desc
            $sql .= " order By nombre " . $_GET['orden'];
        }

            $pagina = $_GET['pagina'] ?? 1;

            $desde = ($pagina -1) * $cuantos;

            $sql .= " limit $cuantos offset $desde";


        $query = $this->db->prepare($sql); //PDOStatement
        $query->execute([
            ":id" => $search
        ]);
        return $query->fetchAll(PDO::FETCH_OBJ);

    }


    public function getAllCountVista()
    {
        $sql = 'SELECT count(id_hotel) as total FROM hoteles';

        
      if (isset($_GET['id_ciudad'])) {
            $hotelxCiudad = $_GET['id_ciudad'];
            $sql .= " WHERE id_ciudad = $hotelxCiudad";
        }

        if (isset($_GET['busqueda'])) {
            $busqueda = $_GET['busqueda'];
            $sql .= " AND nombre LIKE '%$busqueda%'";
        }

        $query = $this->db->prepare($sql);

        $query->execute();
        
        
        return $query->fetch(PDO::FETCH_COLUMN);
    }
    
}

