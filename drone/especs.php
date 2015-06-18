<html>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
    <head>
    	<script type="text/javascript" src="js/bootstrap.min.js"></script>
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
                
                <imgsrc="_images/drone-specs.jpg" usemap="#meumapa" style="width: 50%;" usemap="meumapa"/>
                <mapname="meumapa">
                    <areashape="poly" coords="403,204,489,225,456,307,370,277“
                    href="drone.html#controle" target="janela" />
                    <areashape="circle" coords="218,180,17“
                    href="drone.html#camera" target="janela" />
                    <areashape="poly" coords="193,13,235,13,231,98,195,98“
                    href="drone.html#aero" target="janela" />
                    <areashape="rect" coords="45,141,78,170“
                    href="drone.html#video" target="janela" />
                </map>
                <iframesrc="drone.html" name="janela" id="frame-spec"></iframe>
				
				<figure class="specs_image">
		    		<img src="_images/drone-specs.jpg">
				</figure>
			</article>
		</aside>
		
		<aside class="right">
	   		<div class="jumbotron">
	  			<h2>Outras Noticias</h2>
	 	 		<p></p>
			</div>
		</aside> 



    </section>
     <?php include "footer.php"; ?>
</body>
</html>
