<?php
//se solicita el archivo que se descarga en http://www.fpdf.org/
require('../fpdf/fpdf.php');

include('../db.php');  

                     //Se consulta los datos a la tabla  "productos"
                     $query = " SELECT m.id_movimiento,  p.nombre as producto, m.tipo_movimiento, m.cantidad, m.fecha_movimiento, m.observacion
                                FROM movimientos m 
                                LEFT JOIN products p  ON m.id_producto = p.id
                                ; 
                             ";

                     
                     
                      $result= $con->query($query);



//instancia para fpdf
$pdf =new FPDF();

//Crear Pagina sin agrumento e Vertical L=horizontal
$pdf->AddPage(''); 

             //Tipo de letra, negrita, tamaño
$pdf->SetFont('Arial','B',14);




//TITULO TITULO TITULO
           //ancho, haltura, titulo, borde, salto de linea, alinear texto
$pdf->Cell(0,10,'Movientos realizados',1,1,'C');
//espacio es como un pading
$pdf->ln(5);




//ENCABEZADO ENCABEZADO ENCABEZADO
$pdf->SetFont('Arial','B',12);

//formato vertical 190
//formato horizontal 210 suma de todas las columnas
$pdf->Cell(10, 10, 'Id',1);
$pdf->Cell(30, 10, 'Producto',1);
$pdf->Cell(25, 10, 'Tipo',1);
$pdf->Cell(20, 10, 'Cantidad',1);
$pdf->Cell(40, 10, 'Fecha_movimiento',1);
$pdf->Cell(65, 10, 'Observacion',1);
//salto de linea
$pdf->Ln();


//TABLA DE DATOS CUERPO TABLA DE DATOS CUERPO
$pdf->SetFont('Arial','',8);

if($result->num_rows>0){
    while ($row= $result->fetch_assoc() ){
        $pdf->Cell(10,10,$row['id_movimiento'],1);
        $pdf->Cell(30,10,$row['producto'],1);
        $pdf->Cell(25,10,$row['tipo_movimiento'],1);
        $pdf->Cell(20,10,$row['cantidad'],1);
        $pdf->Cell(40,10,$row['fecha_movimiento'],1);
        $pdf->Cell(65,10,$row['observacion'],1);
        $pdf->Ln();

    }
}else{
    $pdf->Cell(0,10,'No se encontraron registros ',1,1,'C');
}
//FIN FIN TABLA DE DATOS CUERPO TABLA DE DATOS CUERPO




//salida archivo PDF genera el archivo pdf se pone el tipo , el nombre del archivo
            //I=internet D=download F=file  , nombre del reporte
$pdf->Output('D', 'ReporteMovimiento.pdf'); 



?>