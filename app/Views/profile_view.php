<div class="container w-75 mt-5 rounded-3 ">
    <div class="row align-items-stretch">
        <div class="col d-lg-block col-md-5 col-lg-5 col-xl-5 rounded-3 text-center my-auto">
                <img src="<?php echo base_url();?>/img/profile.svg" alt="" width="300" height="300">
        </div>
        <div class="col bg-footer px-5 rounded-3 shadow-lg">
            <table class="table table-borderless m-3 text-light">
                <tbody>
                    <tr>
                    <th scope="row">Nombre:</th>
                    <td><?php echo $name?></td>
                    <td></td>
                    </tr>
                    <tr>
                    <th scope="row">Ciudad:</th>
                    <td><?php echo $city?>, (<?php echo $country?>)</td>
                    <td></td>
                    </tr>
                    <tr>
                    <th scope="row">Email de contacto:</th>
                    <td><?php echo $email?></td>
                    <td></td>
                    </tr>
                    <tr>
                    <th scope="row">Telefono de contacto:</th>
                    <td><?php echo $phone?></td>
                    <td></td>
                    </tr>
                    <tr>
                    <th scope="row">Rol:</th>
                    <td><?php echo $rol?></td>
                    <td></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-light m-4">
                <p><strong>Reseña: </strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima et nisi, aspernatur perferendis ea quis sapiente esse commodi porro deleniti, aliquid id est temporibus dolorum tenetur beatae reiciendis molestias voluptas!</p>
            </div>    
        </div>
    </div>
</div>



<div class="container w-100 my-5 rounded-3 shadow p-3">
    <div class="form-title text-center">
        <div class="col mt-4 mb-4">
            <h2>Apartamentos en propiedad</h2>
        </div>
        <hr class="p-2 mb-5">
    </div>
    <div class="row align-items-stretch">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="<?php echo base_url();?>/img/casa4.jpg" class="d-block" alt="..." width="100%" height="500">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url();?>/img/casa2.jpg" class="d-block" alt="..." width="100%" height="500">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url();?>/img/casa3.jpg" class="d-block" alt="..." width="100%" height="500">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
</div>