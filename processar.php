<?php
include"conexao.php";
$vid=$_GET["id"] ;
$vnome=$_GET["nome"] ;
$vemail=$_GET["email"] ;
$vendereco=$_GET["endereco"]; 
$vcep=$_GET["cep"]; 
$vcontato= $_GET["cep"]; 


   $sql = "INSERT INTO compra VALUES ($vid,'$vnome','$vemail','$vendereco',$vcep,$vcontato) ";
   $res = mysqli_query($conn,$sql);
   

?>