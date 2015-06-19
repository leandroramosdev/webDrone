<html>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	<script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.rwdImageMaps.min.js"></script>
        <script type="text/javascript" src="js/specs.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css"> 
        <link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="css/especs.css">
    </head>
    <body>
    <section>
        <?php include "header.php"; ?>
        <ul class="breadcrumb">
	  		<li><a class="active" href="#">Drone</a></li>
	  		<li><a href="#">Especificações</a></li>
		</ul>
		
		<aside class="left">
			<article>
				<h2>Raio-X do Drone</h2>
				<p>
					Imagine segurar o futuro nas suas mãos. Criado para ser leve e potente, flexivel e estável, este é o drone mais avançado do mercado até o momento.
				</p>
				<p>
					Clique em qualquer área destacada da imagem para ter mais informações sobre os recursos deste Drone. Qualquer ponto vermelho vai te levar a um lugar cheio de novas informações.
				</p>
                
                <figure>
				    <img src="_images/drone-specs.jpg" usemap="#meumapa" alt/>
                </figure>
                <map name="meumapa">
                    <area shape="poly" coords="403,204,489,225,456,307,370,277"  alt="controle"/>
                    <area shape="circle" coords="218,180,17"  target="janela" alt="camera" />
                    <area shape="circle" coords="218,180,17" target="janela" alt="camera 3"/>
                    <area shape="poly" coords="193,13,235,13,231,98,195,98"  alt="drone"/>
                    <area shape="rect" coords="45,141,78,170"  target="janela" alt="sensor" />
                </map>
			</article>
		</aside>
		
		<aside class="right">
	   		<div class="jumbotron">
	  			<h2>Especificações</h2>
	 	 		<p>Clique nas partes do drone para saber mais sobre ele</p>
			</div>
            <img>
		</aside> 



    </section>
     <?php include "footer.php"; ?>
</body>
</html>
