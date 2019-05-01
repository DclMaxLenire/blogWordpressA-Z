<?php

register_sidebar();

?>

<?php if ( is_user_logged_in() ) { ?>

    <a href="<?php echo wp_logout_url(get_permalink()) ?>">Déconnexion</a>

<?php } else { ?>

    <form  class="col-12 col-lg-12 col-sm-12" id="login" method="post" action="<?php echo wp_login_url( get_permalink() ) ?>">

        <fieldset>

            <label class="form-control m-0 text-center font-weight-bold">Connexion</label>

            <input class="form-control m-0" type="text" value="" name="log" placeholder="Pseudo"/>

            <input class="form-control m-0" type="password" value="" name="pwd" placeholder="Mot de passe"/>

            <input class="btn btn-success col-12 m-0" type="submit" value="Connexion" />
            
   </fieldset>
   
    </form>
 

    <form class="col-12 col-lg-12 col-sm-12 mt-5" name="registerform" action="<?php bloginfo('url'); ?>/wp-login.php?action=register" method="post">

    <fieldset>
        <label class="form-control m-0 text-center font-weight-bold">Inscription</label>

        <input class="form-control m-0" type="text" name="user_login" value="" placeholder="Identifiant"/>

        <input class="form-control m-0" type="text" name="user_email" value="" placeholder="Votre Email"/>

        <input class="form-control m-0" type="hidden" name="redirect_to" value="<?php echo get_permalink('208'); ?>" />

        <input class="btn btn-primary col-12 m-0" type="submit" name="wp-submit" />

    </fieldset>

</form>

    <?php } ?>