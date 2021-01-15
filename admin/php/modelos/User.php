<?php 

class User {

    private $db;

    public function __construct(){
        $this->db = DB::getConn();
    } 

    public function recuperarUsuario($email){
        $query = $this->db->prepare('SELECT * FROM users WHERE email =:email');
        $query->execute([
            ":email" => $email,
        ]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    
}

?>