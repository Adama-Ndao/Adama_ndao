<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table>
            <tr style="background-color: lime; font-size:20px;">
                <td>Prenom</td>
                <td>Nom</td>
                <td>Langage</td>
                <td>Niveau</td>
                <td>Age</td>
            </tr>
            @if ($etude->count() > 0)
                @foreach ($etude as $adama)
                    <tr>
                        <td>{{$adama->prenom}}</td>
                        <td>{{$adama->nom}}</td>
                        <td>{{$adama->langage}}</td>
                        <td>{{$adama->niveau}}</td>
                        <td>{{$adama->age}}</td>
                    </tr>
                @endforeach
            @else
                <span>
                    Aucun Etudiant dans la base de donnee
                </span>
            @endif
        </table>
    </center>
</body>
</html>