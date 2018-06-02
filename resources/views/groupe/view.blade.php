<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head> <link rel="stylesheet" href="menu.css">
<body>
        <table border=""> 
                <thead>
                    <tr>
                        <th>id </th><th>nom de groupe</th><th>nom discipline</th><th>nom categorie</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($groupe as $mygroupe)
                            <tr>
                                <td><center>{{$mygroupe->id}} </td></center>
                                <td><center> {{$mygroupe->nom}} </td></center>
                                <td><center>  {{$mygroupe->categorie_id}} </td></center>
                                <td><center>{{$mygroupe->discipline_id}}  </td></center>
                            </tr>
                        
            
                        @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <form action="groupe" method="POST">
                                {{csrf_field()}}
                                <td><input type="number" name="id" min="1" step="1"></td>
                                <td><input type="text" name="nomGroupe" placeholder="Entrer le nom "> </td>
                                <td>
                                    <form >
                                        <select name="selectCategorie" id="">
                                            @foreach ($categorie as $mycategorie)
                                                <option value=""> {{$mycategorie->nom}}</option>
                                            @endforeach
                                        </select>
                                    </form>
                                </td>
                                <td>
                                        <form action="" method="get" name="formDiscipline">
                                            <select name="selectDiscipline" id="">
                                                @foreach ($discipline as $mydiscipline)
                                                    <option value=""> {{$mydiscipline->nom}}</option>
                                                @endforeach 
                                            </select>
                                        </form>
                                    </td>
                                <td><input type="submit" name="ajouter" value="Ajouter"></td>
                        </form>
                    </tr>
                </tfoot>
            </table>
</body>
</html>