<?php
session_start();
include('inc/header.php');
$loginError = '';
if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
	include 'Conexion.php';
	$invoice = new Invoice();
	$user = $invoice->loginUsers($_POST['email'], $_POST['pwd']);
	if (!empty($user)) {
		$_SESSION['user'] = $user[0]['first_name'] . "" . $user[0]['last_name'];
		$_SESSION['userid'] = $user[0]['id'];
		$_SESSION['email'] = $user[0]['email'];
		$_SESSION['address'] = $user[0]['address'];
		$_SESSION['mobile'] = $user[0]['mobile'];
		header("Location:lista_facturas.php");
	} else {
		$loginError = "Correo electrónico o contraseña no válidos";
	}
}
?>
<title>Facturas Agexport</title>
<script src="js/invoice.js"></script>
<link href="css/style.css" rel="stylesheet">
<?php include('inc/container.php'); ?>
<div class="row">
	<div class="demo-heading">
	</div>
	<div class="login-form">
		<h4>Acceso Usuario:</h4>
		<form method="post" action="">
			<div class="form-group">
				<?php if ($loginError) { ?>
					<div class="alert alert-warning"><?php echo $loginError; ?></div>
				<?php } ?>
			</div>
			 <div class="logo-container">
        <img src="images/logo.png" alt="Logo" class="logo">
    </div>
			<div class="form-group">
				<input name="email" id="email" type="email" class="form-control" placeholder="Correo Electrónico" autofocus="" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="pwd" placeholder="Contraseña" required>
			</div>
			<div class="form-group">
				<button type="submit" name="login" class="btn btn-info">Ingresar</button>
			</div>
		</form>
		<br>
	</div>
</div>
</div>