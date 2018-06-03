<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <table border="">
            <thead >
                <th>id</th>
                <th>date</th>
                <th>heur debut</th>
                <th>heur fin</th>
                <th>le jour </th>
                <th> num groupe</th>
            </thead>
            <tbody>
                @foreach($seance as $myseance)
                    <tr>
                        <td> {{$myseance->id}} </td>
                        <td> {{$myseance->date}} </td>
                        <td> {{$myseance->heureDebut}} </td>
                        <td> {{$myseance->heureFin}} </td>
                        <td> {{$myseance->joure}} </td>
                        <td> {{$myseance->groupe_id}} </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <form action="/seance" method="POST">
                        {{csrf_field()}}
            
                            <td><input type="number" name="id" id="" min="0" ></td>
                            <td><input type="date" name="date" id="" ></td>
                            <td><input type="time" name="heureDebut" id=""></td>
                            <td><input type="time" name="heureFin" id=""></td>
                            <td><input type="text" name="joure" id="" placeholder="Entre le jour"></td>
                            <td><input type="number" name="groupe_id" id=""></td>
                            <td><input type="submit" name="" id=""></td>
                    </form>
            </tr>
            </tfoot>
        </table>
</body>
</html>