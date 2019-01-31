<?php ob_start(); ?>

	<div class="row narrow section-intro has-bottom-sep">
	    <div class="col-full">
				<h2>Créer un nouvel Admin</h2>
		</div>
	</div>
	<div id="contact__inscription">
		<fieldset>	
				<form action="../../indexx.php?action=registerAdmin" method="post">
					<div class="form-field">
							<label>Pseudo</label>
							<input name="pseudo" type="text" placeholder="Pseudo" value="" minlength="2" required="" aria-required="true" class="full-width">
					</div>
					<div class="form-field">
							<label>Email</label>
							<input name="email" type="email" placeholder="Email" value="" minlength="2" required="" aria-required="true" class="full-width">
					</div>
					<div class="form-field">
							<label>Mot de passe</label>
							<input name="password_1" type="password" placeholder="Mot de passe" value="" minlength="2" required="" aria-required="true" class="full-width">
					</div>
					<div class="form-field">
							<label>Confirmer votre mot de passe</label>
							<input name="password_2" type="password" placeholder="Confirmer votre mot de passe" value="" minlength="2" required="" aria-required="true" class="full-width">
					</div>
					<div class="form-field">
	                   <input type="submit" class="full-width btn--primary" >Inscription</input>
                    </div>
				</form>
		</fieldset>
	</div>

<?php $content = ob_get_clean(); ?>

<?php require('../frontend/template.php'); ?>