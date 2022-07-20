<?php
  if (isset($_POST['comida'])) {
  	   setcookie('comida' ,$_POST['comida']);
    }

    if (isset($_COOKIE['comida'])){
    	echo "Vocẽ já escolheu! Não pode votar novamente.";
    }else{
    	include 'form.html';
    }
    
    ?>
