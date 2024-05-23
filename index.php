<?php

// collego il file function.php a questo file 
require "partials/function.php";

// creo variabile per salvare il valore dell'input mediante l'attributo name "comevoglio"
// POST è una superglobale di PHP che permette di accedere ai valori inseriti nei campi del form dopo che l'utente ha cliccato su "Submit"
$salva_valore = $_POST['comevoglio'];

// il risultato sarà una variabile speculare, in cuiviene però passata la funzione controlla_simboli(che controlla la presenza dei simboli . e @)
// richiamando questa variabile sulla sezione html per la validazione, con l'aiuto di un operatore ternario riesco a mostrare messaggi pertinenti. vedi riga 82
$result = controlla_simboli($salva_valore);

// stessa cosa. applico la funzione valore_vuoto a salva_valore(quindi al valore inserito nell'input dall'utente) e poi la richiamo a riga 71 per decretare, grazie a operatore ternario, il messaggio pertinente da mostrare
$value_result = valore_vuoto($salva_valore);

var_dump($result);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    
   <div class="container">

        <div class="row">

            <div class="col">
                
                <form action="index.php" method="POST">

                    <div class="mb-3">

                        <label for="exampleInputEmail1" class="form-label">Email address</label>

                        <!-- sull'input specifico l'attributo name e lo collego alla variabile salva_valore applicandovi il metodo _POST -->
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="comevoglio">

                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>


        </div>


        <!-- sezione validazione con layout bootstrap -->
        <div class="row">

            <div class="col">

                <div>

                    <?php 

                    echo $value_result ?
                            '<h2> Inserisci Mail </h2>' :
                            ''

                    ?>

                </div>

                <div>
                    <?php  
                        echo $result ? 
                            '<h2 class="text-success"> mail corretta </h2>' :
                            '<h2 class="text-danger"> mail non corretta </h2>'
                    ?>
                </div>

            </div>

        </div>

   </div> 
    
</body>
</html>