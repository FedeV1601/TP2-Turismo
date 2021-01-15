<?php
class Ciudad{

private $db;

    public function __construct(){

    $this->db=DB::getConn();

    }


    public function find(int $id){
        $query = $this->db->prepare('SELECT * FROM ciudades WHERE id_ciudad = :id');
        $query->execute([
            ':id' => $id
            ]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
  
    
    public function agregar($nombre, $imagen){
        $query = $this->db->prepare('INSERT INTO ciudades (nombre, imagen) VALUES (:nombre, :imagen)');
        $query->execute([
            ':nombre' => $nombre,
            ':imagen' => $imagen,
            ]);
        }
        
    public function actualizar($id, $nombre, $imagen){
        $query = $this->db->prepare('UPDATE ciudades SET nombre=:nombre, imagen=:imagen WHERE id_ciudad = :id');
        $query->execute([
            ':id' => $id,
            ':nombre' => $nombre,
            ':imagen' => $imagen,
            ]);
    }
    
    public function eliminar($id){
        $query = $this->db->prepare('DELETE FROM ciudades WHERE id_ciudad=:id') ;
        $query->execute([
            ":id" => $id
            ]); 
            $cuenta = $query->rowCount();
           return $cuenta;
        }
        
        public function all(){
            $query = $this->db->prepare('SELECT * FROM ciudades'); // PDOStatament
            $query->execute();
            $ciudades = $query->fetchAll(PDO::FETCH_OBJ);
            return $ciudades;
        }
                
    public function getAll($cuantos = 6)
    {
        $sql = 'SELECT * FROM ciudades ';

        if (isset($_GET['busqueda'])) {
            $busqueda = $_GET['busqueda'];
            $sql .= ' WHERE nombre LIKE '.'"%'.$busqueda.'%"';
          
            }

        if (isset($_GET['orden'])) { //asc desc
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
        $sql = 'SELECT count(id_ciudad) as total FROM ciudades';

        if (isset($_GET['busqueda'])) {
            $busqueda = $_GET['busqueda'];
            $sql .= " WHERE nombre LIKE '%$busqueda%'";
        }

        $query = $this->db->prepare($sql);

        $query->execute();
        
        
        return $query->fetch(PDO::FETCH_COLUMN);
    }


}
    



