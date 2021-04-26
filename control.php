<?php

    if (isset($_REQUEST['btn_signup'])) { //cuando el usuario da click en guardar, los inserta en la base de datos, dentro de la tabla especificada
        include ("database.php"); //incluye la conexion

        $name=$_POST['name'];   //ingresa los datos del formulario dentro de su respectiva variable
        $email=$_POST['email'];
        $password=password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql="INSERT INTO usuarios (name, email, password) VALUES ('$name', '$email', '$password')";
        $ejecutar=mysqli_query($connection, $sql);
    
        if ($ejecutar) {
            header("Location: sign_in.php");
    }
    }
    

?>