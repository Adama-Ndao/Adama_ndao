<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="borde:1px solid black">
    <tr style="background-color: lime; font-size:20px;">
                <td>num</td>
                <td>Nom</td>
                <td>Duree</td>
            </tr>
          <tr>
          <td>{{$Cour1->num}}</td>
          <td>{{$Cour1->nom}}</td>
          <td>{{$Cour1->duree}}</td>
          </tr>

          <tr>
          <td>{{$Cour2->num}}</td>
          <td>{{$Cour2->nom}}</td>
          <td>{{$Cour2->duree}}</td>
          </tr>

          <tr>
          <td>{{$Cour3->num}}</td>
          <td>{{$Cour3->nom}}</td>
          <td>{{$Cour3->duree}}</td>
          </tr>
    </table>
</body>
</html>