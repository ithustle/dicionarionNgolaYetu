<?php

require_once '../classes/Conexao.php';
require_once '../controller/controllerPortugues.php';

$kik = "Não disponível";
$umb = "Não disponível";



?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" type="imagens/gif" href="../imagens/animated_favicon1.gif">
        <link rel="stylesheet" href="../CSS/reset.css" type="text/css">
        <link rel="stylesheet" href="../CSS/estilo2.css" type="text/css">
        <title>Dicionário - Tradutor de Línguas Nacionais</title>
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
            <div id="logoRSocial">
                <a href="https://www.facebook.com/DicionarioNgolaYetu" ><img id="logoFacebook" src="../imagens/facebook.gif" title="Siga o dicionário ngola yetu no facebook" ></a>
                <a href="https://plus.google.com/114377353078651435311/"><img id="logoGPlus" src="../imagens/gplus.gif" title="Siga o dicionário ngola yetu no Google+" ></a>
            </div>
            <!-- Botões seguir das redes sociais -->
            <div id="divLike">
                <!-- Facebook -->
                <div class="fb-like" data-href="https://www.facebook.com/DicionarioNgolaYetu" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-font="tahoma"></div>
                
                <!-- Google Plus -->
                <div class="g-plusone" data-size="medium" data-href="https://plus.google.com/114377353078651435311/"></div>
                <script type="text/javascript">
                    window.___gcfg = {lang: 'pt-PT'};

                    (function() {
                      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                      po.src = 'https://apis.google.com/js/plusone.js';
                      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();
                </script>
            </div>
            <div id="miniCorpo">
                <div id="divPesquisar"><a id="logo" href="../"><img src="../imagens/logo.png" width="245" height="75"></a>
                    <form id="formPesquisa" action="." method="GET">
                        <input type="text" onblur="if (this.value == '') { this.value = 'Procure no dicionário...'; this.style.color = 'darkgray'; }" onfocus="if (this.value == 'Procure no dicionário...') {this.value = ''; this.style.color = '#292526'; }" class style="color: rgb(221, 221, 221);" id="pesquisa" name="pesquisa" size="40" value="Procure no dicionário..." autocomplete="OFF" />
                        <input type=image src="../imagens/search.png" id="botao" width="32" height="32" />
                    </form>
                    <div id="dialectos">
                        Dialectos disponíveis: Kikongo | Umbundu
                    </div>
                </div>
                
            </div>
            <div id="pubEsquerda" class="publicidade"></div>
            <div id="medCorpo">
                    <!-- Traduções em Kikongo -->
                    <!-- Tabela de traduções em Umbundu -->
                    
                    <?php
                            
                        if ($kik == "Não disponível" && $umb == "Não disponível" && $portuga == NULL) {
                            
                            echo "<label style='font-size: 12pt; font-weight: Normal; font-style: italic;'>Nenhuma sugestão encontrada!</label>";
                            
                        }elseif ($kik == "Não disponível" && $umb == "Não disponível" && !$portuga == NULL){
                                
                            echo "<label style='font-size: 12pt;'>Sugestão para a sua pesquisa! Clique ==> </label>";
                            
                            foreach ($portugues->linguaPortuguesa() as $ling){
                            
                                echo "<a href=./?pesquisa=".$ling['portgues'].">".$ling['portgues']." </a>";
                                
                            }
                        } 
                        ?>
                       
                    <table id="linguasNacionais"> 
                        
                        <?php
                         
                        if ($kik == "Não disponível" || $umb == "Não disponível" ){
                                
                                echo "<caption><label style='color: white;'>".$_GET['pesquisa']."</label></caption>";
                            }else {
                                echo "<caption><label style='color: black;'>". $_GET['pesquisa']."</label></caption>";
                            }
                        
                        ?>
                        <tr>
                            <th class="colLinguas">Kikongo</th>
                            <th class="colLinguas" >Umbundo</th>
                        </tr>
                        <tr>
                            <td class="colTop" >Significado de <?php echo $_GET['pesquisa']; ?></td><td class="colTop" >Significado de <?php echo $_GET['pesquisa']; ?></td>
                        </tr> 
                        <tr>
                            <td class="colTrad"><?php echo $kik; ?></td>
                            <td class="colTrad"><?php echo $umb;  ?></td>
                        </tr>
                        <tr>
                            <td class="colTop" >Classe Gramatical de <?php echo $_GET['pesquisa']; ?></td>
                            <td class="colTop" >Classe Gramatical de <?php echo $_GET['pesquisa']; ?></td>
                        </tr>
                        <tr>
                            <td class="colTrad" ><?php echo $resposta; ?></td>
                            <td class="colTrad" ><?php echo $resposta; ?></td>
                        </tr>
                        <tr>
                            <td class="colTop" >Vogais Presentes em <?php echo $_GET['pesquisa']; ?></td>
                            <td class="colTop" >Vogais Presentes em <?php echo $_GET['pesquisa']; ?></td>
                        </tr>
                        <tr>
                            <td class="colTrad" ><?php echo $vogais; ?></td>
                            <td class="colTrad" ><?php echo $vogais; ?></td>
                        </tr>
                        <tr>
                            <td class="colTop" >Consoantes Presentes em <?php echo $_GET['pesquisa']; ?></td>
                            <td class="colTop" >Consoantes Presentes em <?php echo $_GET['pesquisa']; ?></td>
                        </tr>
                        <tr>
                            <td class="colTrad" ><?php echo $consoantes; ?></td>
                            <td class="colTrad" ><?php echo $consoantes; ?></td>
                        </tr>
                    </table>
            </div>
            <div id="pubDireita" class="publicidade"></div>
                <div id="rodape">Copyright © 2013 - Todos os direitos reservados<div id="celio">Powered by C-lio Garcia</div></div>           
        </div>   
    </body>
</html>