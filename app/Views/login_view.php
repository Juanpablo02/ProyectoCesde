<div class="container w-75 my-5 bg-light rounded-3 shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-5 rounded-3">

            </div>
            <div class="col bg-white px-5 rounded-end">
                <h3 class="fw-bold text-center py-4">Bienvenido</h3>

                <form action="<?php echo base_url();?>/sign-in" method="POST">
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="mb-4">
                        <input type="checkbox" name="connected" class="form-check-input">
                        <label for="connected" class="form-ckeck-label">Mantener conectado</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    </div>
                    
                    <div class="my-3">
                        <?php
                            if(session()->getFlashData('status')){
                                echo "<h5 class='text-center' id='success'>".session()->getFlashData('status')."</h5>";
                            }
                        ?>
                    </div>
                    <div class="my-3">
                        <?php
                            if(session()->getFlashData('error')){
                                echo "<h5 class='text-center' id='error'>".session()->getFlashData('error')."</h5>";
                            }
                        ?>
                    </div>

                    <div class="my-3">
                        <span>No tienes cuenta? <a href="register">Regístrate</a></span><br>
                        <span><a href="#">Recuperar password</a></span>
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
                                        <img src="<?php echo base_url();?>/img/fb.svg" width="28" alt="">
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