<?php
    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $celular= $_POST['celular'];
    $mensagem= $_POST['mensagem'];
    

    $headers .= 'De: '.$nome;

	

	$corpoemail = 'Mensagem de 
	
				Nome: '.$nome.'
				Celular: '.$celular.'
				Email: '.$email.'
				Conteúdo da Mensagem: '.$mensagem.'.';


    if (mail("gabrielmartins373@gmail.com",$corpoemail, $headers))
    {
        echo 'Mensagem enviada com sucesso.';
    }else{
        echo 'falha';
    }

?>