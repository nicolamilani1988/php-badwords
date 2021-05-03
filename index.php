<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .container{
            background-color: orange;
            padding: 50px;
            width: 60%;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        
        <?php
            echo '<h1>Questa è la mia frase</h1>';
            $sentence = 'La punizione che, per una volta, ha riaperto la serata e la doppietta che, non solo ha rotto il digiuno, ma anche ricacciato indietro lo psicodramma: la gioia spontanea dell’esultanza è l’immagine di un Ronaldo diverso nel momento più difficile';  
            echo $sentence;

            echo '<h1>Questa è la lunghezza della frase:</h1>';
            $length = strlen($sentence);
            echo $length;

            echo '<h1>Questa è la frase senza la parola vietata:</h1>';
            // URL = http://localhost/?badword=Ronaldo
            $badword = $_GET['badword']; 
            $newSentence = str_replace($badword,'***',$sentence);
            echo $newSentence;
        ?>

    </div>

    
</body>
</html>