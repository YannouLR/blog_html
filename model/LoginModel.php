<?php
session_start();
require_once '../config/mysql.php';

if (!isset($_SERVER['HTTP_REFERER'])) {
    die('access restricted');
}

if (!$_SERVER['HTTP_REFERER'] === 'AccountController.php') {
    die('access restricted');
}

$error = [
    'message' => '',
    'exist' => false,
];

function checkLogin($email, $password)
{
    global $error;
    $email = htmlspecialchars(strip_tags($email)); // traitement champs mail
    $password = htmlspecialchars(strip_tags($password)); // traitement champs mdp

    if (empty($email) || empty($password)) {
        $error['message'] .= 'Veuillez remplir tous les champs. Merci ! </br>';
        $error['exist'] = true;

        return $error;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // verifie si l'email existe si il n'existe pas il renvoie une erreur
        $error['message'] .= 'Saisissez un adresse email valide';
        $error['exist'] = true;

        return $error;
    }

    getPasswordUser($email, $password);

    return $error;
}
function getPasswordUser($email, $password) 
{
    global $connexion;
    global $error;

    $query = $connexion->prepare(
        'SELECT `id`, `password`, `pseudo` FROM `User` WHERE email=:email;'); //requete sql
    $response = $query->execute(['email' => $email]); //execute la requete
    if (!$response) { // si la variable est fausse
        $error['message'] .= "Une erreur s'est produite"; // ajoute un message d'erreur 
        $error['exist'] = true;

        return $error;
    }

    $aDatas = $query->fetchAll(); // recupere toute les ligne de resultat du tableau 

    verifyPassword($aDatas, $password); 

    return $error;
}

function verifyPassword($aDatas, $password) 
{
    global $error;
    $aDatas = $aDatas[0];

    if (!isset($aDatas['password'])) { //si le mot de passe n'existe pas
        $error['message'] .= "Aucun utilisateur n'a était trouvé";
        $error['exist'] = true;

        return $error;
    }
    $passwordVerif = password_verify($password, $aDatas['password']); // verifie quand il hash le mdp si il est vrai ou fausse

    if (!$passwordVerif) {
        $error['message'] .= 'Mot de passe incorrect';
        $error['exist'] = true;

        return $error;
    }
    CreateSession($aDatas);
}

function createSession($aDatas){
    $_SESSION['user']['id'] = $aDatas['id'];
    $_SESSION['user']['pseudo'] = $aDatas['pseudo'];
}
