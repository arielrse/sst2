function cargar_grafico_correctivo_01(iddepartamento, fechainicio, fechafin) {

    var frmData = new FormData;
    frmData.append('iddepartamento', iddepartamento);
    frmData.append('fechainicio', fechainicio);
    frmData.append('fechafin', fechafin);

    $.ajax({
        url: '../../modulos/charts/data_correctivo_01.php',
        type: 'POST',
        data: frmData,
        processData: false,
        contentType: false,
        cache: false,
        success: function (resp) {
            show_grafico_correctivo_01(resp);
        }
    });
}

let myChart1;
function show_grafico_correctivo_01(datos) {

    var json = JSON.parse(datos);
    var etiquetas = json.etiquetas;
    var datos = json.datos;

    if (myChart1)
        myChart1.destroy();

    var ctx = document.getElementById("myChart01");

    myChart1 = new Chart(ctx, {
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