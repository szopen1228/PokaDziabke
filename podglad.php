<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>PDF Generator</title>
</head>
<body>
    <div id="print">
        <img id="logo" src="IMG/logo.png">
        <div class="name">
            <h1><?php echo $_POST["name"];?></h1>
            <h2>( Imię i Nazwisko )</h2>
        </div>
        <div class="date">
            <h1 style="display: inline"><?php echo $_POST["loc"];?></h1>
            <h1 style="display: inline"><?php echo $_POST["date"];?></h1>
            <h2>( Miejsce i Data )</h2>
        </div>
        <div class="text">
            <h1>Protokół odbiorczo - zdawczy sprzętu informatycznego</h1>
            <h2>Niniejszym poświadczam odbiór od firmy Intrum sp. z o.o. sprzetu typu: </h2>
            <p><?php echo $_POST["type"];?></p>
            <h2>Numer seryjny: </h2>
            <p><?php echo $_POST["serial"];?></p>
            <h2>Wraz z: </h2>
            <p>Zasilacz</p>
            <h2 style="padding: 45px 0px 25px 0px; font-size: 18px; text-align: center;">Oświadczam, że w przypadku wygaśniecia lub zerwania mojej umowy z w/w firmą zobowiązuję się zwrócić sprzęt w stanie normalnego zużycia.</h2>
            <h2 style="font-size: 18px; text-align: center;">W przypadku zgubienia bądź uszkodzenia zobowiązuję się do pokrycia kosztów naprawy lub kupna nowego sprzętu.</h2>
        </div>
        <div class="sign">
            <div style="grid-area: 1 / 1 / 2 / 2;">
                <canvas id = "signature-pad" width="300px" height="100px"></canvas>  
            </div>
            <img style="grid-area: 1 / 2 / 2 / 3;" src="IMG/<?php echo $_POST["who"];?>.png">
            <h2 style="grid-area: 2 / 1 / 3 / 2;">( Podpis osoby pobierającej )</h2>
            <h2 style="grid-area: 2 / 2 / 3 / 3;">( <?php echo $_POST["who"];?> )</h2>
        </div>
    </div> 
    <a href="index.php"><button>COFNIJ</button></a>
    <button class="exportBtn" onclick="exportPDF()">DRUKUJ</button>

    <script src="html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.3.5/signature_pad.min.js" integrity="sha512-kw/nRM/BMR2XGArXnOoxKOO5VBHLdITAW00aG8qK4zBzcLVZ4nzg7/oYCaoiwc8U9zrnsO9UHqpyljJ8+iqYiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="script.js"></script>
</body>
</html>