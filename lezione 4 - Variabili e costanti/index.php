<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial PHP - lezione 4</title>
</head>


<style>

    form{
        display: flex;
        flex-direction: column;
        width: 200px;
        padding: 40px;
    }

    label{
        margin-bottom: 5px;
        margin-top: 10px;
    }

    input{
        margin-top: 10px;
    }

</style>


<body>


    <h1>Form esempio</h1>

    <form method="POST" action="esempio.php">

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Inserisci nome">

        <label for="cognome">Cognome</label>
        <input type="text" id="cognome" name="cognome" placeholder="Inserisci cognome">

        <input type="submit" value="Invia dati">

    </form>
    



</body>
</html>