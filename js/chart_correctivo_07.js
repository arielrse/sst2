function cargar_grafico_correctivo_07(iddepartamento, fechainicio, fechafin) {

    var frmData = new FormData;
    frmData.append('iddepartamento', iddepartamento);
    frmData.append('fechainicio', fechainicio);
    frmData.append('fechafin', fechafin);

    $.ajax({
        url: '../../modulos/charts/data_correctivo_07.php',
        type: 'POST',
        data: frmData,
        processData: false,
        contentType: false,
        cache: false,
        success: function (resp) {
            show_grafico_correctivo_07(resp);
        }
    });
}

let myChart7;
function show_grafico_correctivo_07(datos) {

    var json = JSON.parse(datos);
    var etiquetas = json.etiquetas;
    var datos = json.datos;

    if (myChart7)
        myChart7.destroy();

    var ctx = document.getElementById("myChart07");

    myChart7 = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: etiquetas,
            datasets: [{
                label: "Tickets",
                backgroundColor: ["#46BFBD"],
                data: datos
            }]
        },
        options: {
            indexAxis: 'y',
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