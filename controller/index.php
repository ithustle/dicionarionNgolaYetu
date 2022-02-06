<?php
    
    
    
    require_once '../classes/Conexao.php';
    require_once '../classes/EnviarEmail.php';
    
    $email = new EnviarEmail();
    
    $diaSemana = date("l");
    $email->setDataActual(date("Y-m-d"));    
    
    foreach ($email->verficarEnvio() as $verifica){
        $dataEnviada = $verifica['datas'];
    }
    
    if (isset($dataEnviada)){
        $dataEnviada = $verifica['datas']; 
    } else {
        $dataEnviada = "";
    }
    
        $headers = "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=UTF-8\n";
        $headers .= "From: Dicionário NgolaYetu \n";
    
        $mensagem = "
        
         <html>
            <head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'></head>
                <body>
            <font face=Verdana size=2 color=blue><br /><br /><br /><br />
                    <b><h1><center>Relatório Semanal de acessos no site www.dicionariongolayetu.com</center></h1></b><br></font>";
                            
        foreach ($email->enviarEmail() as $e) {
     
            
            $mensagem .= 
             "  
                <b><h3 style='margin-left: 300px;'>_________________________________________________________________</h3></b><br />
                <b><h3 style='margin-left: 300px;'>Dia: ".$e['datas'] ." </h3></b>
                <b><h3 style='margin-left: 300px;'>Número de acessos: ".$e['visitas'] ."</h3></b>
                <b><h3 style='margin-left: 300px;'>_________________________________________________________________</h3></b>
	</body>
        </html>";
            }
            
            foreach ($email->enviarEmail() as $e) {
                $res[] = $e['visitas'] ;
            }
            
         //   $mensagem .=
         //   print_r ("<b><h3 style='margin-left: 300px;'>Total de acessos na semana: ".array_sum($res)."</h3></b>");
            
            $email->setHeader($headers);
            $email->setMensagem($mensagem);
       
           
            
       if ($dataEnviada != date("Y-m-d")){
           if ($diaSemana == 'Monday'){
               
               $email->emailEnviado();
           }
            
       }
          header("Location: ../index.php");
        
        
    
       
       
?>