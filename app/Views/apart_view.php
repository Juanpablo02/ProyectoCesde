<div class="container">

    <div class="form-title text-center mt-4">
        <?php if($rol == "Anfitrion"):?>
            <div class="col mt-5 mb-4">
                <h2>Apartamentos en propiedad</h2>
            </div>
        <?php endif ?>
        <?php if($rol == "Invitado"):?>
            <div class="col mt-5 mb-4">
                <h2>Apartamentos Disponibles</h2>
            </div>        
        <?php endif ?>
        <hr class="p-2 mb-5">
    </div>

    <?php
        if(session()->getFlashData('status')){
            echo "<div class='mb-5'>
                    <h3 id='success'>".session()->getFlashData('status')."</h3>
                  </div>";
        }
    ?>

    <?php
        if(session()->getFlashData('error')){
            echo "<div class='mb-5'>
                    <h3 id='error'>".session()->getFlashData('error')."</h3>
                  </div>";
        }
    ?>

    <div class="row row-cols-1 row-cols-md-2">
        <?php foreach($aparts as $apart):?>
            <div class="col mb-4">
                <div class="card border-0 card-footer shadow-lg">
                    <div class="card-body text-light mb-3">
                        <p class="card-text "><strong>- País :</strong> <?php echo $apart->country?></p>
                        <p class="card-text "><strong>- Ciudad :</strong> <?php echo $apart->city?></p>
                        <p class="card-text "><strong>- Dirección :</strong> <?php echo $apart->address?></p>
                        <p class="card-text "><strong>- Ubicación :</strong> <?php echo $apart->ubication?></p>
                        <p class="card-text "><strong>- Habitaciones :</strong> <?php echo $apart->rooms?></p>
                        <p class="card-text "><strong>- Valor por Noche :</strong> <?php echo $apart->value?></p>
                        <p class="card-text text-center"><strong>Reseña:</strong><br><?php echo $apart->review?></p>
                    </div>
                    <img src="<?php echo $apart->featured?>" class="card-img-bottom" width="auto" height="300">
                        <div class="card-body text-center">

                        <?php if($rol == "Anfitrion"):?>
                            <a href="<?php echo base_url().'/edit-apart?id='.$apart->id?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo base_url().'/delete-apart?id='.$apart->id?>" class="btn btn-primary">Eliminar</a>
                        <?php endif ?>
                        <?php if($rol == "Invitado"):?>
                            <a href="" class="btn btn-primary">Contactar</a>
                        <?php endif ?>

                        </div>
                </div>
            </div>
        <?php endforeach ?>   
    </div>
    <hr class="p-2 mb-5">
</div>