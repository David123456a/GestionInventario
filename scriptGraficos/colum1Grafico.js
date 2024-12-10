google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(dibujarGraficocol2);

function dibujarGraficocol2() {
        //Obtener los datos desde la base de datos por medio del archivo = scriptGraficos/colum1ProductoProveedor.php
    fetch('scriptGraficos/colum1ProductoProveedor.php')
    .then(response=> response.json())
    .then(data =>{
                    //crear la tabla dataTable
                    var dataTable = google.visualization.arrayToDataTable(data);

                    //Opciones del grafico
                    var options = {
                    title: 'Cantiadad de productos por categorias',
                    haxis: {title: 'Producto'},
                    vAxis: {title: 'Cantidad'},
                    legend: {position: 'none'},
                    bars: 'vertical',
                    colors: ['#4285f4'],
                    width: 600,
                    height: 400,

                    };

                    
                    //Dibujar el grafico 
                                                                                            //colum1Grafico se va al home.php como id de la grafica
                    var chart = new google.visualization.ColumnChart(document.getElementById('colum1Grafico'));

                    chart.draw(dataTable, options);
        
    })       
}