function cargar_grafico_correctivo_02(iddepartamento, fechainicio, fechafin) {

    var frmData = new FormData;
    frmData.append('iddepartamento', iddepartamento);
    frmData.append('fechainicio', fechainicio);
    frmData.append('fechafin', fechafin);

    $.ajax({
        url: '../../modulos/charts/data_correctivo_02.php',
        type: 'POST',
        data: frmData,
        processData: false,
        contentType: false,
        cache: false,
        success: function (resp) {
            show_grafico_correctivo_02(resp);
        }
    });
}

let myChart2;
function show_grafico_correctivo_02(datos) {

    var json = JSON.parse(datos);
    var etiquetas = json.etiquetas;
    var datos = json.datos;

    if (myChart2)
        myChart2.destroy();

    var ctx = document.getElementById("myChart02");

    myChart2 = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: etiquetas,
            datasets: [{
                label: "Tickets",
                backgroundColor: ['rgba(54, 162, 235, 0.2)','rgba(255, 99, 132, 0.2)','rgba(255, 206, 86, 0.2)',],
                borderColor: ['rgba(54, 162, 235, 1)','rgba(255, 99, 132, 1)','rgba(255, 206, 86, 1)'],
                borderWidth: 1,
                data: datos
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            title: {
                display: false,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });

}