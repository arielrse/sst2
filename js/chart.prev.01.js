(async () => {

    var iddepartamento = $('#iddepartamento').val();
    const respuestaRaw = await fetch("../../modulos/charts/data_prev_01.php?id="+iddepartamento);

    const respuesta = await respuestaRaw.json();
    const $grafica = document.querySelector("#myChart01");
    const etiquetas = respuesta.etiquetas;

    /*const datos = {
        label: "",
        data: respuesta.datos,
        backgroundColor: ['rgba(54, 162, 235, 0.2)','rgba(255, 99, 132, 0.2)','rgba(255, 206, 86, 0.2)',],
        borderColor: ['rgba(54, 162, 235, 1)','rgba(255, 99, 132, 1)','rgba(255, 206, 86, 1)'],
        borderWidth: 1,
    };*/

    /*new Chart($grafica, {
        type: 'bar',
        data: {
            labels: etiquetas,
            datasets: [
                datos,
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
            },
        }
    });*/

    var ctx = document.getElementById("myChart01");

    var myChart = new Chart(ctx, {
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
    });

})();