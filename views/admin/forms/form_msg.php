<fieldset>
	<legend>Redactar nuevo mensaje</legend>
		<form name="register" method="post" action="http://localhost/web/app/Http/Controllers/Controller.php">
			<p>
				<input type="email" name="dest_msg" placeholder="Para: " required>
			</p>
			<p>
				<input type="text" name="asunto_msg" placeholder="Asunto: " required>
			</p>
			<p>
				<textarea name="msg" rows="5" cols="100" required></textarea>
			</p>
			<p>
				<input type="submit" name="btn-msg" class="btn btn-outline-success" value="Enviar mensaje">
				<input type="reset" class="btn btn-outline-danger" value="Limpiar datos">
			</p>
		</form>
</fieldset>