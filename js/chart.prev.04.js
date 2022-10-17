(async () => {

    var data = new FormData();
    var iddepartamento = $('#iddepartamento').val();
    data.append( "iddepartamento", iddepartamento);

    const respuestaRaw = await fetch("../../modulos/charts/data_prev_04.php?id="+iddepartamento);

    const respuesta = await respuestaRaw.json();
    const etiquetas = respuesta.etiquetas;

    var ctx = document.getElementById("myChart04");

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: etiquetas,
            datasets: [{
                label: "Mantenimientos",
                backgroundColor: ["#0d6efd", "#212529", "#17a00e", "#f41127", "#ffc107", "#62088A", "#46BFBD"],
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