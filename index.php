

<?php
//Comentario
#Ola
/*  */
 

//echo "Ola Mundo";

//echo "Eai";
//print("Ola Mundo");
//$vetor = array('Palio', 'Gol', 'Fiesta', 'corsa');
//var_dump($vetor);

//$vetor = array('Palio','gol', 'Fiesta', 'Corsa');
//print_r($vetor);


//$nome = "João";
//$sobrenome = "da Silva";
//echo "$nome, $sobrenome";

/* dicas do professor Andre

	nunca faça isso:
	variaveis iniciadas com numeros
	não deixe espaços entre as variaveis
	não use caracteres especiais ! @ # " & *() %
	não crie variaveis com mais de 15 caracteres
	use palavras em minusculo
	em variaveis compostas use a primeira letra da segunda
	palavra em maiusculo ex: codPagto
	ou use o underline ( _ ) para separar as palavras
	Ex: cod_pagto */

	//$a = 5;
	//$b = $a;
	//$b = 10;
	
	//echo "$a";
	//echo "$b";

	//variaveis booleano
	
	//$exibir_nome = true;

	//if ($exibir_nome) {
		//echo 'Jose da silva';
		
	//}
	//$umidade = 91;

	//$vai_chover = ($umidade > 90);

	//if ($vai_chover){
		//echo "esta chovendo";
	//} else{

		//echo 'não esta chovendo';
	//}


	//variavel do tipo numerico

	//$a = 1234; // numero decimal
	//$a = -1234; // negativo
	//$a = 0123; // numeração octagonal
	//$a = 0x1a; //hexadecimal
	//$a = 1.234 //ponto flutuante
	//$a = 4e23; //notações cientificas

	// variaveis do tipo String 

	//$variavel = 'Isto é um teste';
	//$variavel = "Isto e um teste";

	//variaveis do tipo Arrary

	//$carros = array ('Palio', 'corsa', 'gol');
	//print_r($carros);
	//var_dump($carros);
	//echo $carros[2];

 //variaveis do tipo objeto


	/**
	 * 
	 */
	class Computador
	{
		var $cpu;
		

		function ligar()
		{
			echo "Ligando o computador a {$this ->cpu}...";
		}
	}

	$obj = new Computador;
	$obj -> cpu = "500 mhz";
	$obj -> ligar();







?>



