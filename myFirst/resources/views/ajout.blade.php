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
                <h1 style="font-size:50px; color:black">Formulaire Ajout d'un Etudiant</h1>
            </div>
            <br>
            <table>
            <form method="POST" action="{{ route('store.etudiant') }}">
                @csrf
                <label for=""> Prenom :
                <input type="text" name="prenom"  placeholder="Prenom">
                </label>
                <br>
                <br>
                <label for=""> Nom :
                <input type="text" name="nom" placeholder="Nom">
                </label>
                <br>
                <br>
                <label for=""> Langages :
                <input type="text" name="langage" placeholder="Langage">
                </label>
                <br>
                <br>
                <label for=""> Niveau :
                <input type="text" name="niveau" placeholder="Niveau">
                </label>
                <br>
                <br>
                <label for=""> Age :
                <input type="number" name="age" placeholder="Votre age">
                </label>
                <br>
                <br>
                <input type="submit" name="" value="Enregistrer">

            </form>
            </table>
            <br>
            <br>
            <a style="border:1px solid; background:lime; border-radius:10px; padding:10px;
             font-size:20px;marging-bottom:10px; color:black" href="{{ route('liste.etudiant') }}">
             Liste des étudiants</a>
        </center>
        
       
    </body>
</html>