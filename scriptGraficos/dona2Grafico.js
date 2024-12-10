google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(dibujarGrafico);

function dibujarGrafico() {

    //solicitud AJAX para obtener los datos del date.php
    fetch('scriptGraficos/dona2ProductoProveedor.php')
    .then(response=> response.json())
    .then (data =>{

                        //crear la tabla dataTable
                    var dataTable = google.visualization.arrayToDataTable(data);

                        //opciones  del grafico
                    var options = {
                                        title: 'Cantidad de productos por proveedores',
                                        width: 600,
                                        height: 400,
                                        pieHole: 0.4
                                    };

                    //dibujar el grafico
                                                                                        //dona1Grafico es el id que va al home.php
                    var chart = new google.visualization.PieChart(document.getElementById('dona2Grafico'));

                    chart.draw(dataTable, options);
                }
        );
}