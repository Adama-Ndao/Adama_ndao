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
    <div style="background:lime; border-radius:10px;padding:5px">
        <h1 style="font-size:50px; color:black">Liste des produits</h1>
    </div>
    <br>
        <a style="border:1px solid; background:lime; border-radius:10px; padding:10px;
            font-size:20px;marging-bottom:10px; color:black" href="{{ route('ajout') }}">
            Ajouter un produit
        </a>
        <br>
        <br>
        <table>
            <tr style="background-color:lime; color:black; font-size:20px;padding:5px">
                <td>ID</td>
                <td>NOM</td>
                <td>QUantite</td>
                

            @if ($produits->count() > 0)
                        @foreach ($produits as $produit) 
                            <tr>
                            <td>{{ $produit->id }}</td>
                                <td>{{ $produit->nom }}</td>
                                <td> {{$produit->quantite }} </td>
                                <td>
                                    
                                </td>
                            </tr>
                        @endforeach
                  @else 
                        <span>Aucun produit  dans la base</span>
            @endif 
            <br>
        
        </table>
    </center>
</body>
</html>