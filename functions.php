<?php
        
    // mi salvo input dell'utente sul voto
    $lengthPw = $_GET["lengthPw"] ?? -1;
    echo "input lunghezza Password:";
    var_dump($lengthPw);
    echo "</br>"; 

    echo "<span>password prima che utente tocchi qualsiasi cosa: </span>";
    $password = "";
    var_dump($password);
    echo "</br>"; 

    //creo variabile password in cui a ogni ciclata pusho dentro il nuovo carattere
    

    //mi creo una funzione che genera una lettera N volte
    function randomCharachters($lunghezzaPassword, $emptyString) {
        
        
        for ($i=0; $i < $lunghezzaPassword; $i++) { 

            $randomCharachter = chr(rand(33,122)); // genera una lettera random
            //echo $randomCharachter; // me la stampa ogni volta che la genera

    
            //concatena carattere nella stringa password che inizialmente è vuota
            $emptyString .= $randomCharachter;
            //var_dump($emptyString);
            //alla fine ho una password della lunghezza che mi serve

            //COME LA TIRO FUORI DALLA FUNZIONE? sicuramente devo farlo dopo il ciclo

            
            
        };
        // return $password;
        
        //echo $password;

        echo "</br>";
        echo "password generata all'interno della funzione dopo il ciclo:";
        echo "</br>";
        var_dump($emptyString);
        echo "</br>";
        echo "</br>";

        
        $result = $emptyString;
        return $result;
        
    };


    //chiamo la funzione
    //randomCharachters($lengthPw, $password);

    // dopo la funzione voglio vedere di nuovo password stampata per vedere se funziona tutto bene

    
    $passwordFinale=randomCharachters($lengthPw, $password);
    echo "</br>"; 
    echo "<span> questo succede tutto fuori dalla funzione  </span>";
    echo "</br>"; 
    var_dump($passwordFinale);


    // echo "</br>"; 


?>