
<table border="solid">
        <thead>
                <tr>
                        <td >id</td>
                        <td >name</td>
                    </tr>
        </thead>
        <tbody>
                @foreach ($categorie as $mycategorie) 
                <tr>
                    <td>
                            {{$mycategorie->id}}
                    </td>
                    <td>
                            {{$mycategorie->nom}}
                    </td>
                </tr>
            @endforeach            
        </tbody>
        <tfoot>
                <tr>
                        <form action="/categorie" method="POST">
                                {{csrf_field()}}
                                <td><input type="number" name="id"></td>
                                <td><input type="text" name="nom" placeholder="nom"></td>
                                <td><input type="submit" name="ajouter" value="Ajouter"></td>
                        </form>
                    </tr>
        </tfoot>
</table>



