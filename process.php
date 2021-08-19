<?php

// lansar secion 
session_start();


// conecta a la bdd 
require_once 'config.php'; 


// verificacion que escribio bien  email password 
if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
//verificacion a la bdd

    $check = $bdd->prepare('SELECT nomcomplet, email, password FROM utilisateurs WHERE email = ? '); 
    $check->execute(array($email)); //recupero el mails
    $data = $check->fetch();  //guardo todo esto en data 
    $row = $check->rowCount(); //tectea cuantas beces hat ub email conectado a mi bdd 

    if($row == 1){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $password = hash('sha256', $password); 

            if($data['password'] === $password){
                $_SESSION['user'] = $data['nomcomplet']; 
                header('Location: pagconect.php'); 
            } else header ('Location: index.php');
        }else header ('Location: index.php'); 
    }else header ('Location: index.php'); 
}else header('Location: index.php'); 



