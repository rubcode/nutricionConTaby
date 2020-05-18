<?php
	include("headers/header.php");
?>
	<main>
		<div class="row bgheadercon">
			<div class="degradadocontacto"></div>
			<div class="pnlheadertextocont">
				<div class="row center">
					<h4 class="titulocontacto">Ha llegado el momento de que juntos empecemos con tu transformación</h4>
				</div>
				<div class="row">
					<h5 class="titulocontacto center">¡Permíteme apoyarte!</h5>
				</div>
			</div>

		</div>
		<div class="row pdleft">
			<div class="col l4 m8 s10 offset-l1 offset-m2 offset-s1 pnlcontacto">
				<form method="POST" action="">
					<div class="row">
						<div class="col s12 input-field">
							<input type="text" name="nombre" id="nombre" class="validate">
							<label for="nombre">Nombre(s)</label>
						</div>
						<div class="col s12 input-field">
							<input type="text" name="apellidos" id="apellidos" class="validate">
							<label for="apellidos">Apellido(s)</label>
						</div>
						<div class="col s12 input-field">
							<input type="text" name="telefono" id="telefono" class="validate" maxlength="8">
							<label for="telefono">Télefono (55)</label>
						</div>
						<div class="col s12 input-field">
							<input type="text" name="correo" id="correo" class="validate">
							<label for="correo">Email</label>
						</div>
						<div class="input-field col l12 m12 s12 center">
							<textarea id="mensaje" class="materialize-textarea"></textarea>
							<label for="mensaje">¿En qué te puedo ayudarte?</label>
						</div>
					</div>
					<div class="row">
						<div class="l12 m12 s12 center">
							<a class="btn mybtn btnformu">Enviar</a>
						</div>
					</div>
				</form>
			</div>
			<div class="col l5 m12 s12 offset-l1">
				<div class="row">
					<div id="mapcontacto">

					</div>
				</div>
				<div class="row">
					<div class="col l6 m6 s12">
						<h5 class="mysalmontext center">Contáctame</h5>
						<a class="black-text" href="https://tinyurl.com/asesoriacontaby">
							<div class="row rowsm center">
								<img src="img/contacto/contactame.png" class="logocontacto" alt="contactame">
							</div>
							<h6 class="grey-text-text text-darken-4 center">55-35-00-16-03</h6>
						</a>
					</div>
					<div class="col l6 m6 s12">
						<h5 class="mysalmontext center">Escríbeme</h5>
						<a class="black-text" href="mailto:tabata.nsc@gmail.com">
							<div class="row rowsm center">
								<img src="img/contacto/escribeme.png" class="logocontacto" alt="escribeme">
							</div>
							<h6 class="grey-text-text text-darken-4 center">tabata.nsc@gmail.com</h6>
						</a>
					</div>
				</div>
			</div>
		</div>
	</main>
	<script type="text/javascript" src="js/mapscontacto.js"></script>
<?php
	include("headers/footercontacto.php");
?>
