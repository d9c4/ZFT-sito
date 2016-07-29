<?php
	// Connessione al database 
		
		try{
				$conn = new PDO ('localhost','root','' );}
				catch (PDOExeption $e){
					die ("Connessione Fallita:" .$e->getMessage());
				}
		/*
		$conn = mysqli_connect('localhost', 'root', '' , 'sito_zft');
	
	if (mysqli_connect_errno()) {
		printf("Errore connessione: %s\n", mysqli_connect_error());
		exit();
	}
	*/
?>