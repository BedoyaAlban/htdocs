<?php ob_start(); ?>
<div class="center">
  <div class="card card-signup" data-background-color="orange">
    <form class="form" action="../../index.php?action=registerAdmin" method="post">
      <div class="card-header text-center">
        <h3 class="card-title title-up admin">Créer un nouvel Admin</h3>
      </div>
      <div class="card-body">
        <div class="input-group no-border">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="im im-user-settings"></i>
            </span>
          </div>
          <input type="text" name="pseudo" class="form-control admin" required="" aria-required="true" placeholder="Pseudo...">
        </div>
        <div class="input-group no-border">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="im im-mail"></i>
            </span>
          </div>
          <input type="text" name="email" required="" aria-required="true" placeholder="Email..." class="form-control admin">
        </div>
        <div class="input-group no-border">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="im im-key"></i>
            </span>
          </div>
          <input type="password" name="password_1" class="form-control admin" required="" aria-required="true" placeholder="Mot de passe...">
        </div>
        <div class="input-group no-border">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="im im-key"></i>
            </span>
          </div>
          <input type="password" name="password_2" required="" aria-required="true" placeholder="Confirmer mot de passe..." class="form-control admin">
        </div>
      </div>
      <div class="card-footer text-center">
        <button type="submit" class="btn--primary-admin" >Ajouter</button>
      </div>
    </form>
  </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>