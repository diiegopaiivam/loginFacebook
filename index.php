<?php

require 'fb.php';

if(isset($_SESSION['fb_access_token']) && !empty($_SESSION['fb_access_token'])){

    $response = $fb->get('/me?fields=email,name,id, picture', $_SESSION['fb_access_token']);
    $res = json_decode($response->getBody());

    $img = $res->picture->data->url;

    echo "Meu nome: ".$res->name; 
    echo " Meu email: ".$res->email;

    echo "<br/> <img src='".$img."' border='0' />";

    echo "<br/><a href='deslogar.php'>Sair</a>";
} 

else {
    header("Location: login.php");
}