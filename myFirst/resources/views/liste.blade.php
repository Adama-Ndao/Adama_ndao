<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>

    <body>
        <center> 
            <div style="background:lime; border-radius:10px;padding:5px">
                <h1 style="font-size:50px; color:black"><marquee>Liste des étudiants</marquee></h1>
            </div>
            <br>
            <a style="border:1px solid; background:lime; border-radius:10px; padding:10px;
             font-size:20px;marging-bottom:10px; color:black" href="{{ route('ajout.etudiant') }}">
             Ajouter un étudiant</a>
            <br>
            <br>
            <table border=1>
                <tr style="background-color:lime; color:black; font-size:20px;padding:5px">
                    <td>PRENOM</td>
                    <td>NOM</td>
                    <td>LANGAGE PREFERE</td>
                    <td>NIVEAU</td>
                    <td>AGE</td>
                    <td>ACTION</td>
                </tr>

                
            @if ($etudiants->count() > 0)
                        @foreach ($etudiants as $etudiant) 
                            <tr>
                                <td>{{ $etudiant->prenom }}</td>
                                <td> {{ $etudiant->nom }} </td>
                                <td> {{$etudiant->langage }} </td>
                                <td> {{ $etudiant->niveau }} </td>
                                <td> {{ $etudiant->age }} </td>
                                <td>
                                    <a style="color:red" href="{{route('delete.etudiant', ['id' =>$etudiant->id])}}">Sup🗑</a>
                                    <a href="{{route('edit.etudiant', ['id' =>$etudiant->id])}}">Mod✏</a>
                                </td>
                            </tr>
                        @endforeach
                  @else 
                        <span>Aucun etudiant  dans la base</span>
            @endif 
                
            </table>
        </center>
    </body>