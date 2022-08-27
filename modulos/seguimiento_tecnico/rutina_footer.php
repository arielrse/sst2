<?php
$h_pendientes       = $obj->{'h_pendientes'};
$i_recomendaciones  = $obj->{'i_recomendaciones'};
$j_observaciones    = $obj->{'j_observaciones'};

?>

<div class="card">
    <div class="card-body">

        <h7 class="mb-0 text-uppercase">H. Pendientes</h7>

        <div class="input-group">
            <span class="input-group-text"></span>
            <textarea class="form-control" aria-label="With textarea" id="h_pendientes"><?php echo $h_pendientes ?></textarea>
        </div>

        <h7 class="mb-0 text-uppercase">I. Recomendaciones</h7>

        <div class="input-group">
            <span class="input-group-text"></span>
            <textarea class="form-control" aria-label="With textarea" id="i_recomendaciones"><?php echo $i_recomendaciones ?></textarea>
        </div>

        <h7 class="mb-0 text-uppercase">J. Observaciones</h7>

        <div class="input-group">
            <span class="input-group-text"></span>
            <textarea class="form-control" aria-label="With textarea" id="j_observaciones"><?php echo $j_observaciones ?></textarea>
        </div>


        <div class="row row-cols-auto pt-3">
            <div class="col">
                <input type="button" id="botonFooter" class="btn btn-primary px-5" value="Guardar" />
            </div>
            <div class="col">
                <input type="button" class="btn btn-secondary px-5" name="Submit" value="Cancelar" onclick="history.back()" />
            </div>
        </div>


    </div>

    <!--<div class="card-body">
        <ul class="nav nav-tabs nav-primary mb-0" role="tablist">

            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bx-bookmark-alt font-18 me-1'></i>
                        </div>
                        <div class="tab-title">Archivos</div>
                    </div>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab" aria-selected="false">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bx-star font-18 me-1'></i>
                        </div>
                        <div class="tab-title">Imagen</div>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content pt-3">

            <div class="tab-pane fade" id="primaryprofile" role="tabpanel">
                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
            </div>
            <div class="tab-pane fade" id="primarycontact" role="tabpanel">
                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
            </div>
        </div>
    </div>-->

</div>