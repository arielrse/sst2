function cargar_grafico_03(iddepartamento, fechainicio, fechafin) {

    var frmData = new FormData;
    frmData.append('iddepartamento', iddepartamento);
    frmData.append('fechainicio', fechainicio);
    frmData.append('fechafin', fechafin);

    $.ajax({
        url: '../../modulos/charts/data_preventivo_03.php',
        type: 'POST',
        data: frmData,
        processData: false,
        contentType: false,
        cache: false,
        success: function (resp) {
            show_grafico_03(resp);
        }
    });
}

let myChart3;
function show_grafico_03(datos) {

    var json = JSON.parse(datos);
    var etiquetas = json.etiquetas;
    var datos = json.datos;

    if (myChart3)
        myChart3.destroy();

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

    myChart3 = new Chart(ctx, {
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
                data: datos
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
}