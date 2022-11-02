function cargar_grafico_02(iddepartamento, fechainicio, fechafin) {

    var frmData = new FormData;
    frmData.append('iddepartamento', iddepartamento);
    frmData.append('fechainicio', fechainicio);
    frmData.append('fechafin', fechafin);

    $.ajax({
        url: '../../modulos/charts/data_preventivo_02.php',
        type: 'POST',
        data: frmData,
        processData: false,
        contentType: false,
        cache: false,
        success: function (resp) {
            show_grafico_02(resp);
        }
    });
}

let myChart2;
function show_grafico_02(datos) {
    var jsonData = JSON.parse(datos);

    if (myChart2) myChart2.destroy();

    const grafica = document.querySelector("#myChart02");
    const etiquetas = jsonData.etiquetas;
    const periodo = jsonData.periodo;

    var datoArr1 = [jsonData.datos[0]];
    var datoArr2 = [jsonData.datos[1]];

    const datos1 = {
        label: etiquetas[0],
        data: datoArr1,
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1,
    };

    const datos2 = {
        label: etiquetas[1],
        data: datoArr2,
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1,
    };

    myChart2 = new Chart(grafica, {
        type: 'bar',
        data: {
            labels: periodo,
            datasets: [
                datos1, datos2
            ]
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