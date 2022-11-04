function cargar_grafico_correctivo_05(iddepartamento, fechainicio, fechafin) {

    var frmData = new FormData;
    frmData.append('iddepartamento', iddepartamento);
    frmData.append('fechainicio', fechainicio);
    frmData.append('fechafin', fechafin);

    $.ajax({
        url: '../../modulos/charts/data_correctivo_05.php',
        type: 'POST',
        data: frmData,
        processData: false,
        contentType: false,
        cache: false,
        success: function (resp) {
            show_grafico_correctivo_05(resp);
        }
    });
}

let myChart5;
function show_grafico_correctivo_05(datos) {
    console.log('datos 5: ' + datos)
    var json = JSON.parse(datos);
    var etiquetas = json.etiquetas;
    var datos = json.datos;

    if (myChart5)
        myChart5.destroy();

    var ctx = document.getElementById("myChart05").getContext('2d');

    var gradientStroke5 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke5.addColorStop(0, '#fc4a1a');
    gradientStroke5.addColorStop(1, '#f7b733');

    var gradientStroke6 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke6.addColorStop(0, '#7f00ff');
    gradientStroke6.addColorStop(1, '#e100ff');


    var gradientStroke7 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke7.addColorStop(0, '#283c86');
    gradientStroke7.addColorStop(1, '#45a247');

    myChart5 = new Chart(ctx, {
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