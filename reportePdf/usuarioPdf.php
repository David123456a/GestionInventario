<?php
//se solicita el archivo que se descarga en http://www.fpdf.org/
require('../fpdf/fpdf.php');

include('../db.php');  

                     //Se consulta los datos a la tabla  "productos"
                     $query = " SELECT u.id, u.nombre, u.email, u.usuario, u.contraseña, u.id_rol, u.fecha_creacion, r.nombre rol 
                                FROM users u 
                                LEFT JOIN rol r ON u.id_rol = r.id_rol;
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
$pdf->Cell(0,10,'Usuarios disponible',1,1,'C');
//espacio es como un pading
$pdf->ln(5);




//ENCABEZADO ENCABEZADO ENCABEZADO
$pdf->SetFont('Arial','B',12);

//formato vertical 190
//formato horizontal 210 suma de todas las columnas
$pdf->Cell(20, 10, 'Id',1);
$pdf->Cell(30, 10, 'Nombre',1);
$pdf->Cell(50, 10, 'Correo',1);
//$pdf->Cell(30, 10, 'Password',1);
$pdf->Cell(25, 10, 'Rol',1);
$pdf->Cell(65, 10, 'Fecha Creacion',1);
//salto de linea
$pdf->Ln();


//TABLA DE DATOS CUERPO TABLA DE DATOS CUERPO
$pdf->SetFont('Arial','',8);

if($result->num_rows>0){
    while ($row= $result->fetch_assoc() ){
        $pdf->Cell(20,10,$row['id'],1);
        $pdf->Cell(30,10,$row['nombre'],1);
        $pdf->Cell(50,10,$row['email'],1);
        //$pdf->Cell(30,10,$row['contraseña'],1);
        $pdf->Cell(25,10,$row['rol'],1);
        $pdf->Cell(65,10,$row['fecha_creacion'],1);
        $pdf->Ln();

    }
}else{
    $pdf->Cell(0,10,'No se encontraron registros ',1,1,'C');
}
//FIN FIN TABLA DE DATOS CUERPO TABLA DE DATOS CUERPO




//salida archivo PDF genera el archivo pdf se pone el tipo , el nombre del archivo
            //I=internet D=download F=file  , nombre del reporte
$pdf->Output('D', 'ReporteUsuarios.pdf'); 



?>