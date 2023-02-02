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
    <div class="container">
        <div class="form">
            <img src="IMG/logo.png">
            <form action="podglad.php" method="POST">
                <label><input type="radio" name="loc" value="Wrocław" checked> Wrocław</label>
                <label><input type="radio" name="loc" value="Warszawa"> Warszawa</label>
                <label><input type="radio" name="loc" value="Białystok"> Białystok</label>
                <input type="text" name="name" placeholder="Imię i nazwisko" required>
                <input type="text" name="date" placeholder="Data wydania sprzętu" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                <input type="text" name="type" placeholder="Nazwa sprzętu" required>
                <input type="text" name="serial" placeholder="Numer seryjny" required>
                <select name="who">
                    <option>Piotr Budrewicz</option>
                    <option>Jakub Pietrzak</option>
                    <option>Wiktor Płuciennik</option>
                    <option>Michał Wasilewski</option>
                    <option>Jakub Wawrzyniak</option>
                </select>
                <input type="submit" value="wyślij">
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>