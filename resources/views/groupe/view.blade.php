<table border=""> 
    <thead>
        <tr>
            <th>id </th><th>nom de groupe</th><th>nom discipline</th><th>nom categorie</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($groupe as $mygroupe)
                <tr>
                    <td>{{$mygroupe->id}} </td>
                    <td> {{$mygroupe->nom}} </td>
                    <td>  {{$mygroupe->categorie_id}} </td>
                    <td>{{$mygroupe->discipline_id}}  </td>
                </tr>

            @endforeach
    </tbody>
</table>





