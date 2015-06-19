<html>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
    <head>
    	<script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css"> 
        <link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="css/fotos.css">         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>
	    <section>
	        <?php include "header.php"; ?>
	        <ul class="breadcrumb">
		  		<li><a class="active" href="#">Drone</a></li>
		  		<li><a href="#">Fotos</a></li>
			</ul>
            <article>
                <p>
                    Veja na nossa galeria de fotos belas imagens. Basta passar o mouse sobre uma das fotos para ver uma                     versão ampliada e com uma breve descrição.
                </p>
            </article>
			
			<?php include "carousel.php"; ?>
			
	     </section>
     <?php include "footer.php"; ?>
</body>
</html>