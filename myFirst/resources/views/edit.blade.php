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
            <div style="background:blue; border-radius:10px;padding:5px">
                <h1 style="font-size:50px; color:white">Formulaire de modification</h1>
            </div>
            <br>
            <form method="POST" action="{{ route('update.etudiant', ['id' =>$etudiant->id]) }}">
                @csrf
                <input type="text" name="prenom" value="{{$etudiant->prenom}}"  placeholder="FirstName">
                <input type="text" name="nom" value="{{$etudiant->nom}}" placeholder="LastName">
                <input type="text" name="langage" value="{{$etudiant->langage}}" placeholder="Langage de programmation">
                <input type="text" name="niveau" value="{{$etudiant->niveau}}" placeholder="Niveau de programmation">
                <input type="number" name="age" value="{{$etudiant->age}}" placeholder="Votre age">

                <input type="submit" name="" value="Modifier">

            </form>
            <br>
            <br>
            <a style="border:1px solid; background:blue; border-radius:10px; padding:10px;
             font-size:20px;marging-bottom:10px; color:white" href="{{ route('liste.etudiant') }}">
             Liste des étudiants</a>
        </center>
        
       
    </body>
</html>