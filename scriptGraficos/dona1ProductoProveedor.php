<?php
include('../db.php');


$sql= " SELECT prov.nombre_proveedor, SUM(p.stock)AS TotalProveedores 
        FROM products p
        JOIN proveedor prov ON p.id_proveedor = prov.id_proveedor
        GROUP BY prov.nombre_proveedor
        ";

$result = $con->query($sql);

$data =[];
if ($result->num_rows>0){
    $data[]= ['PROVEEDOR','TOTALPROVEEDOR'];
    while($row = $result->fetch_assoc()){
        
          $data[] = [$row['nombre_proveedor'], (int)$row['TotalProveedores']];
         
    }
}

echo json_encode($data);
?>