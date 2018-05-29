<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <form action="add" method="POST">
            {{csrf_field()}}
                 <p>id discipline :</p> <input type="number" name="id" placeholder="entrer l'identifiant de la discipline">
            <br>
             <p>nom discipline : </p><input type="text" name="nom"placeholder="entrer le nom de la discipline">
            <input type="submit" value="Ajouter Nouvelle discipline">
    </form>
</body>
</html>