<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>forumaire</title>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>

	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript" src="js/script.js"></script>
</head>


<body>


	<div class="container">

		<div class="divider"></div>

		<div class="heading">
			<h2>Contactez-moi !</h2>
		</div>
		

		<div class="row">
			<div class="col-md-10 offset-md-1">
				<form id="contact-form" method="post" action="" role="form">
					<div class="row">

						<div class="col-md-6 col-sm-12">
							<label for="firstname">Prénom <span class="blue">*</span></label>
							<input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom">
							<p class="comments"></p>
						</div>

						<div class="col-md-6 col-sm-12">
							<label  for="name">Nom <span class="blue">*</span></label>
							<input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom">
							<p class="comments"></p>
						</div>

						<div class="col-md-6 col-sm-12">
							<label  for="email">Email <span class="blue">*</span></label>
							<input id="email" type="email" name="email" class="form-control" placeholder="Votre Email" >
							<p class="comments"></p>
						</div>


						<div class="col-md-6 col-sm-12">
							<label  for="phone">Telephone</label>
							<input id="phone" type="phone" name="phone" class="form-control" placeholder="Votre Telephone" >
							<p class="comments"></p>
						</div>


						<div class="col-md-12">
							<label  for="message">Message <span class="blue">*</span></label>
							<textarea id="message" type="text" name="message" class="form-control" placeholder="Votre message" rows="4"></textarea>
							<p class="comments"></p>
						</div>


						<div class="col-md-12">
							<p class="blue"><strong>*Ces informations sont requises</strong></p>
						</div>


						<div class="col-md-12">
							<input type="submit" class="button1" value="Envoyer">
						</div>



					</div>

				</form>
			</div>
		</div>

	</div>


</body>


</html>