<?php session_start(); ?>
<?php ob_start(); ?>
<div class="center admin-view">
    <div class="card card-signup" data-background-color="orange">
        <form method="post" action="../../index.php?action=login">
            <div class="card-header text-center">
                <h3 class="card-title title-up admin">Sign Up</h3>
            </div>
            <div class="card-body">
                <div class="input-group no-border">
                    <div class="input-group-prepend">
                    	<span class="input-group-text">
                        	<i class="im im-user-settings"></i>
                    	</span>
                    </div>
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo...">
                </div>
                <div class="input-group no-border">
                    <div class="input-group-prepend">
                    	<span class="input-group-text">
                        	<i class="im im-key"></i>
                    	</span>
                    </div>
                    <input type="password" name="password" placeholder="Mot de passe..." class="form-control">
                </div>
                <div class="card-footer text-center">
                	<button type="submit" class="btn--primary-admin" name="login">Connexion</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>