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
       <table border=1>
            <tr>
                <td>N°</td>
                <td>Nom</td>
                <td>Duree</td>
            </tr>
           <tr>
            <td>{{$cour1->num}}</td>
            <td>{{$cour1->nom}}</td>
            <td>{{$cour1->duree}}</td>
           </tr>

           <tr>
            <td>{{$cour2->num}}</td>
            <td>{{$cour2->nom}}</td>
            <td>{{$cour2->duree}}</td>
           </tr>

           <tr>
            <td>{{$cour3->num}}</td>
            <td>{{$cour3->nom}}</td>
            <td>{{$cour3->duree}}</td>
           </tr>
       </table>
</center>
    </body>
</html>