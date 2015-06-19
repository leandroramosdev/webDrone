
jQuery(document).ready(function($) {
	$('aside[class="right"] img').hide();
	$('area').on('click', function() {
        $('aside[class="right"] img').show();
		if($(this).attr('alt') == 'drone'){
            $('aside[class="right"] h2').text(drone_title); 
            $('aside[class="right"] p').text(drone_text);  
            $('aside[class="right"] img').attr("src", drone_img); 
        }
        
        if($(this).attr('alt') == 'camera'){
            $('aside[class="right"] h2').text(camera_title); 
            $('aside[class="right"] p').text(camera_text);  
            $('aside[class="right"] img').attr("src", camera_img);     
        }
        
        if($(this).attr('alt') == 'controle'){
            $('aside[class="right"] h2').text(controle_title); 
            $('aside[class="right"] p').text(controle_text);  
            $('aside[class="right"] img').attr("src", controle_img);     
        }
        
        if($(this).attr('alt') == 'sensor'){
            $('aside[class="right"] h2').text(sensor_title); 
            $('aside[class="right"] p').text(sensor_text);  
            $('aside[class="right"] img').attr("src", sensor_img);       
        }
	});
    
    var drone_title = 'Aerodinâmico:';
    var drone_text = 'Construído para ser durável e leve. A fibra de carbono lhe dá a rigidez necessária para               manobrar no ar e transformar o seu desenho durante o voo elevando os motores e pés para fora do campo de visão       da câmera permitindo que a câmera filme livremente 360º sem obstáculos.';
    var drone_img = '_images/drone-carcaca.jpg';
    
    var camera_title = 'Nova camera 4K e sistema de estabilização:';
    var camera_text = 'Capture imagens com uma incrível nitidez com a câmera mais sofisticada da DJI até o momento.         Esta camera faz videos em 4K de resolução a 24-30 fps ou 1080p 24-60 fps, e fotos de até 12 megapixels. O             sistema mais avançado e já conhecido de estabilização de imagem é usado para garantir que as imagens não fiquem       tremidas, são 3 motores potentes que garantem que a câmera fique sempre na mesma posição independente da             posição do drone.';
    var camera_img = '_images/drone-camera.jpg';
    
    var controle_title = 'Controle remoto potente e robusto:';
    var controle_text = 'Capture imagens com uma incrível nitidez com a câmera mais sofisticada da DJI até o momento.         Esta camera faz videos em 4K de resolução a 24-30 fps ou 1080p 24-60 fps, e fotos de até 12 megapixels. O             sistema mais avançado e já conhecido de estabilização de imagem é usado para garantir que as imagens não             fiquem tremidas, são 3 motores potentes que garantem que a câmera fique sempre na mesma posição                       independente da posição do drone.';
    var controle_img = '_images/drone-controle.jpg';
    
    var sensor_title = 'Sistema de transmissão de video em tempo real HD:';
    var sensor_text = 'É capaz de transmitir imagens em tempo real em HD até uma distância de 2km usando o sistema          integrado ao controle remoto (opcional), há uma saída HDMI e uma USB para apps de smartphones e tablets.';
    var sensor_img = '_images/drone-sensor.png';  
});