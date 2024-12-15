<?php
//se solicita el archivo que se descarga en http://www.fpdf.org/
require('fpdf/fpdf.php');

include('db.php');  

                     //Se consulta los datos a la tabla  "productos"
                     $query = " SELECT p.id, p.nombre, p.descripcion, p.precio, p.stock, c.nombre categoriaNombre, p.fecha_creacion, p.status, pro.nombre_proveedor 
                                FROM products p 
                                LEFT JOIN categories c ON c.id = p.category_id
                                LEFT JOIN proveedor pro on p.id_proveedor = pro.id_proveedor; 
                             ";

                     
                     
                      $result= $con->query($query);



//instancia para fpdf
$pdf =new FPDF();

//Crear Pagina sin agrumento e Vertical L=horizontal
$pdf->AddPage('L'); 

             //Tipo de letra, negrita, tamaño
$pdf->SetFont('Arial','B',14);




//TITULO TITULO TITULO
           //ancho, haltura, titulo, borde, salto de linea, alinear texto
$pdf->Cell(0,10,'Inventario disponible',1,1,'C');
//espacio es como un pading
$pdf->ln(5);




//ENCABEZADO ENCABEZADO ENCABEZADO
$pdf->SetFont('Arial','B',12);

//formato vertical 190
//formato horizontal 210 suma de todas las columnas
$pdf->Cell(20, 10, 'Id',1);
$pdf->Cell(30, 10, 'Nombre',1);
$pdf->Cell(50, 10, 'Descripcion',1);
$pdf->Cell(22, 10, 'Precio',1);
$pdf->Cell(22, 10, 'Stock',1);
$pdf->Cell(30, 10, 'Categoria',1);
$pdf->Cell(50, 10, 'Fecha',1);
$pdf->Cell(20, 10, 'Status',1);
$pdf->Cell(33, 10, 'Proveedor',1);
//salto de linea
$pdf->Ln();


//TABLA DE DATOS CUERPO TABLA DE DATOS CUERPO
$pdf->SetFont('Arial','',8);

if($result->num_rows>0){
    while ($row= $result->fetch_assoc() ){
        $pdf->Cell(20,10,$row['id'],1);
        $pdf->Cell(30,10,$row['nombre'],1);
        $pdf->Cell(50,10,$row['descripcion'],1);
        $pdf->Cell(22,10,$row['precio'],1);
        $pdf->Cell(22,10,$row['stock'],1);
        $pdf->Cell(30,10,$row['categoriaNombre'],1);
        $pdf->Cell(50,10,$row['fecha_creacion'],1);
        $pdf->Cell(20,10,$row['status'],1);
        $pdf->Cell(33,10,$row['nombre_proveedor'],1);
        $pdf->Ln();

    }
}else{
    $pdf->Cell(0,10,'No se encontraron registros ',1,1,'C');
}
//FIN FIN TABLA DE DATOS CUERPO TABLA DE DATOS CUERPO




//salida archivo PDF genera el archivo pdf se pone el tipo , el nombre del archivo
            //I=internet D=download F=file  , nombre del reporte
$pdf->Output('I', 'Reporte.pdf'); 



?>