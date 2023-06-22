<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbpassword = '';
    $dbName = 'academia';

    $conexao = new mysqli($dbHost, $dbUsername,$dbpassword, $dbName);

    //if($conexao->connect_errno)
    //{
      //  echo"erro";
   // }
    //else
    //{
     //   echo"sucesso";
    //}
 
?>