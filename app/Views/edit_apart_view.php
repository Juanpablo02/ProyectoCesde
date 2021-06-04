<div class="container w-75 my-5 shadow py-3 px-4 rounded-3">
    <div class="row align-items-stretch">
        <div class="col bg-white px-5 rounded-3 py-2">
            <h3 class="fw-bold text-center py-4">Editar Apartamento</h3>

            <?php foreach ($aparts as $apart):?>

            <form action="<?php echo base_url().'/update-apart?id='.$apart->id?>" method="POST" onsubmit="return validationEditApart();" enctype="multipart/form-data">
                <div class="row g-4 align-items-center">
                    <div class="col-md-3">
                        <label for="city" class="col-form-label">Ciudad</label>
                        <input type="text" id="cityApart" name="cityApart" value="<?php echo $apart->city ?>" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-md-3">
                        <label for="country" class="col-form-label">País</label>
                        <input type="text" id="countryApart" name="countryApart" value="<?php echo $apart->country?>" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-md-5">
                        <label for="address" class="col-form-label">Dirección</label>
                        <input type="text" id="address" name="address" value="<?php echo $apart->address ?>" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-md-5">
                        <label for="ubication" class="col-form-label">Ubicación en Google Maps</label>
                        <input type="text" id="ubication" name="ubication" value="<?php echo $apart->ubication ?>" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-md-3">
                        <label for="rooms" class="col-form-label">Número de habitaciones</label>
                        <input type="number" id="rooms" name="rooms" value="<?php echo $apart->rooms ?>" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-md-3">
                        <label for="value" class="col-form-label">Valor por noche</label>
                        <input type="number" id="value" name="value" value="<?php echo $apart->value ?>" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-md-6">
                        <label for="image" class="col-form-label">Imagen apartamento (Si no añade una nueva imagen, se dejara la anterior)</label>
                        <input type="file" name="image" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-md-6">
                        <label for="featured" class="col-form-label">Imagen destacada (Si no añade una nueva imagen, se dejara la anterior)</label>
                        <input type="file" name="featured" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="mb-3">
                        <label for="review" class="col-form-label">Reseña del apartamento</label>
                        <textarea type="text" id="review" name="review" class="form-control" placeholder="Escriba una nueva reseña" aria-describedby="passwordHelpInline"></textarea>
                    </div>
                </div>
                <div class="d-grid my-4">
                        <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>
            <?php endforeach ?>  
        </div>
    </div>
</div>