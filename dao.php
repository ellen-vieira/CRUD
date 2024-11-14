<?php 
    function conectar($host, $user, $senha, $bd){
        $con = mysqli_connect($host, $user, $senha, $bd);
        if(mysqli_connect_error()){
            echo "Falha ao conectar-se ao MySQL:".mysqli_connect_error();
            exit();
        }
        return $con;
    }
?>