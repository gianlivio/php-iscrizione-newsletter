<?php

require "partials/function.php";
// creo variabile per salvare il valore dell'input
$salva_valore = $_POST['comevoglio'];


$result = controlla_simboli($salva_valore);

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
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="comevoglio">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>


        </div>

        <div class="row">

            <div class="col">

                <div>
                    <?php  
                        echo $result ? 
                            '<h2> mail corretta </h2>' :
                            '<h2> mail non corretta </h2>'
                    ?>
                </div>

            </div>

        </div>

   </div> 
    
</body>
</html>