<table border="solid">
    <thead>
            <tr>
                    <td >id</td>
                    <td >name</td>
                </tr>
    </thead>
@foreach ($discipline as $mydiscipline) 
    <tr>
        <td>
                {{$mydiscipline->id}}
        </td>
        <td>
                {{$mydiscipline->nom}}
        </td>
    </tr>
@endforeach
<tfoot>
        <tr>
            <form action="/discipline" method="POST">
                    {{csrf_field()}}
                    <td><input type="number" name="id"></td>
                    <td><input type="text" name="nom" placeholder="nom"></td>
                    <td><input type="submit" name="ajouter" value="Ajouter"></td>
            </form>
        </tr>
    </tfoot>
</table>


   
    



