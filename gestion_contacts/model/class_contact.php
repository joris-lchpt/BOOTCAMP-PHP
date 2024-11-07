<?php

class Contact{

    private $nom;
    private $email;
    private $tel;
    private $PDO;

    function __construct($driver, $login, $mdp)
    {
        $this->nom = "";
        $this->email = "";
        $this->tel = "";
        $this->PDO = new PDO($driver, $login, $mdp);
    }

    public function getNom(){return $this->nom;}
    public function getEmail(){return $this->email;}
    public function getTel(){return $this->tel;}

    public function setNom($n){$this->nom = $n;}
    public function setEmail($e){$this->email = $e;}
    public function setTel($t){$this->tel = $t;;}

    public function Create() {
        $req = "INSERT INTO contacts(nom, email, tel) VALUES (:nom, :email, :tel)";
        $STMT= $this->PDO->prepare($req);
        $STMT->bindParam(':nom', $this->nom);
        $STMT->bindParam(':email', $this->email);
        $STMT->bindParam(':tel', $this->tel);
        $STMT->execute();
    }

    public function findAll(){
        $req = "SELECT * FROM contacts order by id";
        $stmt= $this->PDO->prepare($req);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

}

?>