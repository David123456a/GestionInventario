<?php
include('../db.php');


$sql= " SELECT c.nombre, SUM(p.stock*p.precio)AS TotalCategoria 
        FROM products p 
        JOIN categories c ON p.category_id = c.id 
        GROUP BY c.nombre;
        ";

$result = $con->query($sql);

$data =[];
if ($result->num_rows>0){
    $data[]= ['CATEGORIA','TOTALCATEGORIA'];
    while($row = $result->fetch_assoc()){
        
          $data[] = [$row['nombre'], (int)$row['TotalCategoria']];
         
    }
}

echo json_encode($data);
?>