<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator PHP</title>
    <!-- cdn Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    

    <style>
       .container{
        background-color:lightblue;
        };

        #parametroInserito{
            background-color:red;
            width: 100%;
            color:green;
        };

    </style>
    

</head>

<body class="container text-center  my-5">
    <!-- Spostato i dati in php functions.php -->

    <h1 class="text-secondary">STRONG PASSWORD GENERATOR</h1>
    <h2 class="text-white">Genera una password sicura</h2>

    <div id="parametroInserito">Nessun parametro valido inserito</div>
   
   


    <?php include "functions.php"; ?>
  
    <!-- creo form -->
    <form>

        <!-- input lunghezza password -->
        <label for="lengthPw">Lunghezza Password:</label>
        <select name="lengthPw" id="lengthPw">
            <option value="-1">seleziona lunghezza password</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>

        <!-- bottone submit per input -->
       
        <input type="submit" value="Genera Password">

        

    </form>

    <!-- invece di stampare questo in pagina dovrei fare un redirect su una pagina a parte -->
    <?php
    echo "<div class='text-success bg-white'>";
        echo "la tua Nuova Password: ";
        echo $passwordFinale;
    echo "</div>";

    ?>

 

</body>
</html>



   