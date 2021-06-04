<div class="container w-75 my-5 shadow py-3 px-4 rounded-3">
    <div class="row align-items-stretch">
        <div class="col bg-white px-5 rounded-3 py-2">
            <h3 class="fw-bold text-center py-4">Registro de Apartamentos</h3>

            <form action="<?php echo base_url();?>/add-apart" method="POST" onsubmit="return validationApart();" enctype="multipart/form-data">
                <div class="row g-4 align-items-center">
                    <div class="col-md-3">
                        <label for="city" class="col-form-label">Ciudad</label>
                        <input type="text" id="cityApart" name="cityApart" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-md-3">
                        <label for="country" class="col-form-label">País</label>
                        <input type="text" id="countryApart" name="countryApart" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-md-5">
                        <label for="address" class="col-form-label">Dirección</label>
                        <input type="text" id="address" name="address" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-md-5">
                        <label for="ubication" class="col-form-label">Ubicación en Google Maps</label>
                        <input type="text" id="ubication" name="ubication" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-md-3">
                        <label for="rooms" class="col-form-label">Número de habitaciones</label>
                        <input type="number" id="rooms" name="rooms" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-md-3">
                        <label for="value" class="col-form-label">Valor por noche</label>
                        <input type="number" id="value" name="value" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-md-6">
                        <label for="image" class="col-form-label">Imagen del apartamento</label>
                        <input type="file" id="image" name="image" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="col-md-6">
                        <label for="featured" class="col-form-label">Imagen destacada</label>
                        <input type="file" id="featured" name="featured" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="mb-3">
                        <label for="review" class="col-form-label">Reseña del apartamento</label>
                        <textarea type="text" id="review" name="review" class="form-control" aria-describedby="passwordHelpInline"></textarea>
                    </div>
                </div>
                <div class="d-grid my-4">
                        <button type="submit" class="btn btn-primary">Registrar Apartamento</button>
                </div>
            </form>

        </div>
    </div>
</div>