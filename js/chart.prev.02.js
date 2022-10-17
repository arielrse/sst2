(async () => {

    var data = new FormData();
    var iddepartamento = $('#iddepartamento').val();
    data.append( "iddepartamento", iddepartamento);

    const respuestaRaw = await fetch("../../modulos/charts/data_prev_02.php?id="+iddepartamento);

    const respuesta = await respuestaRaw.json();
    const grafica = document.querySelector("#myChart02");
    const etiquetas = respuesta.etiquetas;
    const periodo = respuesta.periodo;

    var datoArr1 = [respuesta.datos[0]];
    var datoArr2 = [respuesta.datos[1]];

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

    new Chart(grafica, {
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

    /*var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: etiquetas,
            datasets: [{
                label: "Mantenimientos",
                backgroundColor: ['rgba(54, 162, 235, 0.2)','rgba(255, 99, 132, 0.2)','rgba(255, 206, 86, 0.2)',],
                borderColor: ['rgba(54, 162, 235, 1)','rgba(255, 99, 132, 1)','rgba(255, 206, 86, 1)'],
                borderWidth: 1,
                data: respuesta.datos
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
    });*/

})();