<div class="container w-75 my-5 shadow-lg py-3 px-4 rounded-3">
    <div class="row align-items-stretch">
        <div class="col bg-light px-5 rounded-3 py-2">
            <h3 class="fw-bold text-center py-4">Registro</h3>

            <form action="<?php echo base_url();?>/add-user" method="POST" onsubmit="return validation();">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" name="name" id="name">
                    <small class="text-error">Digite su nombre porfavor (Entre 6 y 30 letras)</small>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" >
                    <small class="text-error">Digite un email valido</small>
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">País</label>
                    <input type="text" class="form-control" name="country" id="country">
                    <small class="text-error">Digite un el país</small>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" name="city" id="city">
                    <small class="text-error">Digite su ciudad</small>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Telefono</label>
                    <input type="number" class="form-control" name="phone" id="phone">
                    <small class="text-error">Digite un telefono (Entre 7 y 11 digitos)</small>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                    <small class="text-error">Digite una contraseña entre 5 y 15 caracteres</small>
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirmar password</label>
                    <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
                    <small class="text-error">Este campo debe ser igual a la contraseña</small>
                </div>
                <div class="mb-3">
                    <label for="rol" class="form-label">Rol</label>
                    <select class="form-select" aria-label="Default select example" name="rol">
                        <option value="Anfitrion">Anfitrión</option>
                        <option value="Invitado">Invitado</option>
                    </select>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>

                <div class="my-3">
                    <span>Ya tienes cuenta? <a href="login">Iniciar Sesión</a></span><br>
                    <span><a href="#">Olvidate tu contraseña?</a></span>
                </div>
            </form>

            <div class="container my-5 w-100">
                <div class="row text-center">
                    <div class="col-12">
                        Iniciar Sesión Con
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-outline-primary w-100 my-1">
                            <div class="row align-items-center">
                                <div class="col-2 d-none d-md-block">
                                    <img src="<?php echo base_url();?>/img/facebook.png" width="28" alt="">
                                </div>
                                <div class="col-12 col-md-10 text-center">
                                    Facebook
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-danger w-100 my-1">
                            <div class="row align-items-center">
                                <div class="col-2 d-none d-md-block">
                                    <img src="<?php echo base_url();?>/img/gg.svg" width="28" alt="">
                                </div>
                                <div class="col-12 col-md-10 text-center">
                                    Google
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
