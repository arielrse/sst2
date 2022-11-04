function cargar_grafico_correctivo_06(iddepartamento, fechainicio, fechafin) {

    var frmData = new FormData;
    frmData.append('iddepartamento', iddepartamento);
    frmData.append('fechainicio', fechainicio);
    frmData.append('fechafin', fechafin);

    $.ajax({
        url: '../../modulos/charts/data_correctivo_06.php',
        type: 'POST',
        data: frmData,
        processData: false,
        contentType: false,
        cache: false,
        success: function (resp) {
            show_grafico_correctivo_06(resp);
        }
    });
}

let myChart6;
function show_grafico_correctivo_06(datos) {

    var json = JSON.parse(datos);
    var etiquetas = json.etiquetas;
    var datos = json.datos;

    if (myChart6)
        myChart6.destroy();

    var ctx = document.getElementById("myChart06").getContext('2d');

    var gradientStroke5 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke5.addColorStop(0, '#CB4335');
    gradientStroke5.addColorStop(1, '#F1948A');

    var gradientStroke6 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke6.addColorStop(0, '#186A3B');
    gradientStroke6.addColorStop(1, '#82E0AA');


    var gradientStroke7 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke7.addColorStop(0, '#283c86');
    gradientStroke7.addColorStop(1, '#45a247');

    myChart6 = new Chart(ctx, {
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