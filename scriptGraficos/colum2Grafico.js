google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(dibujarGraficocol2);

function dibujarGraficocol2() {
        //Obtener los datos desde la base de datos por medio del archivo = scriptGraficos/colum1ProductoProveedor.php
    fetch('scriptGraficos/colum2ProductoProveedor.php')
    .then(response=> response.json())
    .then(data =>{
                    //crear la tabla dataTable
                    var dataTable = google.visualization.arrayToDataTable(data);

                    //Opciones del grafico
                    var options = {
                    title: 'Costo de productos por categorias',
                    haxis: {title: 'Producto'},
                    vAxis: {title: 'Quetzales'},
                    legend: {position: 'none'},
                    bars: 'vertical',
                    colors: ['#895812'],
                    width: 600,
                    height: 400,

                    };

                    
                    //Dibujar el grafico 
                                                                                            //colum1Grafico se va al home.php como id de la grafica
                    var chart = new google.visualization.ColumnChart(document.getElementById('colum2Grafico'));

                    chart.draw(dataTable, options);
        
    })       
}