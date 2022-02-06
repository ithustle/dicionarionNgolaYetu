<!--

Autor: Célio Elisandro Mariano Garcia.

Início: 19 de Maio de 2013, 10h43.

Codename: Wazec_Dic.

Nome Comercial: Dicionário Ngola Yetu.

-->

<?php
    
    require_once './classes/Conexao.php';
    require './classes/Contador.php';
    
    $contador = new Contador();
    
    $contador->visitantesPagina();
    

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta itemprop="description" content="Dicionário Online de Línguas Nacionais Angolana. O dicionário possui significado em Kikongo e Umbundu" />
        <meta itemprop="keywords" content="ngola yetu, dicionario, ngola, yetu, portugues, dialecto" />
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" type="imagens/gif" href="imagens/animated_favicon1.gif">
        <link rel="stylesheet" href="CSS/reset.css" type="text/css">
        <link rel="stylesheet" href="CSS/estilo.css" type="text/css">
        <title>Dicionário - Tradutor de Línguas Nacionais</title>
        
        <!--[if IE]>
            <meta http-equiv="refresh" content="0; URL=IE/">
        <![endif]-->
    </head>
    <body>
        <script>(function(d, s, id) {
            
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            
            </script>

        <div id="content">
            <div id="barraCima">
                
            </div>
            <!--<span id="spPag">Faça do dicionário a sua </span> <a id="divPag" onmouseover="window.status='Faça do meu site a sua página inicial'; return true" onclick="this.style.behavior='url(#default#homepage)'; this.sethomepage('http://www.dicionariongolayetu.com');" href="http://www.dicionariongolayetu.com"> página inicial</a>-->
            <div id="logoRSocial">
                <a href="https://www.facebook.com/DicionarioNgolaYetu" ><img id="logoFacebook" src="imagens/facebook.gif" title="Siga o dicionário ngola yetu no facebook" ></a>
                <a href="https://plus.google.com/114377353078651435311/"><img id="logoGPlus" src="imagens/gplus.gif" title="Siga o dicionário ngola yetu no Google+" ></a>
            </div>
            
             <!-- Botões seguir das redes sociais -->
            <div id="divLike">
                <!-- Facebook -->
                <div class="fb-like" data-href="https://www.facebook.com/DicionarioNgolaYetu" data-send="false" data-width="450" data-show-faces="true" data-font="tahoma"></div><br />
                
                <!-- Google Plus -->
                <div class="g-plusone" data-size="tall" data-annotation="inline" data-width="300" data-href="https://plus.google.com/114377353078651435311/"></div>
                <script type="text/javascript">
                    window.___gcfg = {lang: 'pt-PT'};

                    (function() {
                      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                      po.src = 'https://apis.google.com/js/plusone.js';
                      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();
                </script>
                <div class="limitarbox">
                    <!--<div class="fb-like-box" data-href="https://www.facebook.com/DicionarioNgolaYetu" data-width="260" data-height="350" data-show-faces="true" data-colorscheme="dark" data-stream="false" data-header="false" data-border-color="#292526"></div>-->
                </div>
            </div>
            <div id="miniCorpo">
                <div id="logo" style="background-image:url('imagens/logo.png');"></div>
                <div id="divPesquisar">
                    <form id="formPesquisa" action="significados/" method="GET">
                        <p class="contexto"><span>Ao digitar uma palavra num dos dialectos nacionais disponíveis, poderá obter a tradução em português!</span><input type="text" onblur="if (this.value == '') { this.value = 'Procure no dicionário...'; this.style.color = 'darkgray'; }" onfocus="if (this.value == 'Procure no dicionário...') {this.value = ''; this.style.color = '#292526'; }" class style="color: rgb(221, 221, 221);" id="pesquisa" name="pesquisa" size="56" value="Procure no dicionário..." autocomplete="OFF" />
                        <input type=image src="imagens/search.png" id="botao" width="34" height="34" /></p>
                    </form>
                </div>
                <div id="dialectos">
                    Dialectos disponíveis: Kikongo | Umbundu
                </div>
                <label>Dicionário Ngola Yetu, o seu dicionário - Tradutor Nacional.</label>
            </div>
            <div id="divPub">
                
            </div>
            <div id="rodape">Copyright © 2013 - Todos os direitos reservados<div id="celio">Powered by C-lio Garcia</div></div>
            
        </div>
            
    </body>
</html>