(async () => {

    var data = new FormData();
    var iddepartamento = $('#iddepartamento').val();
    data.append( "iddepartamento", iddepartamento);

    const respuestaRaw = await fetch("../../modulos/charts/data_prev_05.php?id="+iddepartamento);

    const respuesta = await respuestaRaw.json();
    const etiquetas = respuesta.etiquetas;

    var ctx = document.getElementById("myChart05");

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: etiquetas,
            datasets: [{
                label: "Mantenimientos",
                backgroundColor: ["#46BFBD"],
                data: respuesta.datos
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



})();