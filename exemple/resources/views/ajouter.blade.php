<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <center>
            <div style="background:lime; border-radius:10px;padding:5px">
                <h1 style="font-size:50px; color:black">Formulaire Ajout d'un Projet</h1>
            </div>
            <br>
            <table>
            <form method="POST" action="{{ route('stored') }}">
                @csrf
                <label for=""> Nom :
                <input type="text" name="nom" placeholder="Nom">
                </label>
                <br>
                <br>
                <input type="submit" name="" value="Enregistrer">

            </form>
            </table>
            <br>
            <br>
            <a style="border:1px solid; background:lime; border-radius:10px; padding:10px;
             font-size:20px;marging-bottom:10px; color:black" href="{{ route('categorie') }}">
             Liste des Projets</a>
        </center>
        
       
    </body>
</html>