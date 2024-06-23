<?php
$user="valor";
$password="valor";
$edad = intval($_POST['edad'] ?? '');
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $user=(!empty($_POST['user']) && $_POST['user'] == 'luis') ? $_POST['user'] :"incorrecto";
        $password=(!empty($_POST['password']) && $_POST['password'] == 'mendoza') ? $_POST['password'] : "incorrecto";
        $edad = (!empty($edad) && $edad >= 18 ) ? $edad :0;
    
        if($user=="incorrecto"){
                echo "Usuario incorrecto, llene el campo nuevamente";
        }
        elseif($password=="incorrecto"){
                echo "Contraseña incorrecta, llene el campo nuevamente";
        }
        elseif($edad== 0){
                echo "No eres apto para acceder al contenido de este sitio :(";
        }            
        else{
                echo "¡Verificación correcta!, Bienvenido ". htmlspecialchars($user)."<br>";
                echo "Tu edad es: " . htmlspecialchars((string)$edad) ."<br>";
                echo "Eres apto para el contenido de este sitio :D"."<br>";                
        }
    }
?>