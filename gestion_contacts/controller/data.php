<?php
$driver = "mysql:host=localhost;dbname=gestion_contact";
$login = "root";
$mdp = "caribou";

$contact = new Contact($driver, $login, $mdp);

if(isset($_POST['nom']) && isset( $_POST['email']) && isset($_POST['tel'])) {
    $nom = $_POST['nom'];
    $email =  $_POST['email'];
    $tel = $_POST['tel'];
    ajouterContact($contact, $nom, $email, $tel);
}

function ajouterContact($contact, $nom, $email, $tel){
    $contact->setNom($nom);
    $contact->setEmail($email);
    $contact->setTel($tel);
    $contact->Create();
}


function afficherContact($contact){
    foreach($contact->findAll() as $result){
        echo '
                <tr>
                    <td>' .$result['nom'] .'</td>
                    <td>' .$result['email'] .'</td>
                    <td>' .$result['tel'] .'</td>
                </tr>
        ';
    }

}
?>