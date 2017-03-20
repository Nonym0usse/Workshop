<?php require "base_header.html"; ?>

<div class="contact">
  <div class="page-header">
        <h1>Contact</h1>
    </div>

    <div class="well">Vous avez une ou plusieurs remarques ? Contactez-nous !</div>

    <form class="form-horizontal contact" method="post" role="form">
    	<div class="form-group">
    		<label for="email" class="col-sm-2 control-label">E-mail</label>
    		<div class="col-sm-4">
    			<input type="email" class="form-control" id="email" name="Email" placeholder="Votre adresse mail" required autofocus>
    		</div>
    	</div>

    	<div class="form-group">
    		<label for="name" class="col-sm-2 control-label">Name</label>
    		<div class="col-sm-4">
    			<input type="text" class="form-control" id="name" name="Name" placeholder="Votre nom" required>
    		</div>
    	</div>

    	<div class="form-group">
    		<label for="name" class="col-sm-2 control-label">Message</label>
    		<div class="col-sm-6">
    			<textarea id="message" name="Message" class="form-control" placeholder="Votre message" rows="5" resize:none; required></textarea>
    		</div>
    	</div>

    	<div class="form-group">
    		<div class="col-sm-offset-2 col-sm-6">
    			<button type="submit" class="btn btn-primary">Envoyer votre message</button>
    		</div>
    	</div>
    </form>

</div>
<?php require("base_footer.html"); ?>
