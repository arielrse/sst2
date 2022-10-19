(async () => {

    var data = new FormData();
    var iddepartamento = $('#iddepartamento').val();
    data.append( "iddepartamento", iddepartamento);

    const respuestaRaw = await fetch("../../modulos/charts/data_prev_03.php?id="+iddepartamento);

    const respuesta = await respuestaRaw.json();
    const etiquetas = respuesta.etiquetas;

    var ctx = document.getElementById("myChart03").getContext('2d');

    var gradientStroke5 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke5.addColorStop(0, '#7f00ff');
    gradientStroke5.addColorStop(1, '#e100ff');

    var gradientStroke6 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke6.addColorStop(0, '#fc4a1a');
    gradientStroke6.addColorStop(1, '#f7b733');


    var gradientStroke7 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke7.addColorStop(0, '#283c86');
    gradientStroke7.addColorStop(1, '#45a247');

    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: etiquetas,
            datasets: [{
                backgroundColor: [
                    gradientStroke5,
                    gradientStroke6,
                    gradientStroke7
                ],

                hoverBackgroundColor: [
                    gradientStroke5,
                    gradientStroke6,
                    gradientStroke7
                ],

                data: respuesta.datos
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            tooltips: {
                displayColors:false
            }
        }
    });

})();