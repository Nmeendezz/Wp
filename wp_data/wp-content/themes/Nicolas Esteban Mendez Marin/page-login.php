<?php
/* Template Name: Login */
get_header();
?>
<div id="pagina-login">
    <?php while (have_posts()):
        the_post(); ?>
        <div class="container-fluid bg-warning text-light min-vh-100 align-items-center">
            <div class="container bg-dark min-vh-100 align-items-center">
                <div class="row g-2 align-items-center">
                    <div class="col-12 col-md-6 px-5 ">
                        <div class="login-box p-4 bg-black">
                            <h2 class="text-warning text-center mb-4">Iniciar Sesión</h2>

                            <form action="#" method="post" class="d-grid gap-3">
                                <div class="form-group">
                                    <label class="form-label">Usuario</label>
                                    <input type="text" name="log" class="form-control bg-light py-2">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Contraseña</label>
                                    <input type="password" name="password" class="form-control bg-light py-2">
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember">
                                    <label class="form-check-label" for="remember">Recordarme</label>
                                </div>

                                <button type="submit" class="btn btn-warning py-2 mt-2">
                                    Entrar
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6 d-none d-md-block text-center">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('inicio', ['class' => 'img-fluid rounded-4']);
                        } ?>
                    </div>

                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>