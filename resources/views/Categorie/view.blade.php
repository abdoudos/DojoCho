@foreach ($categorie as $mycategorie) 
<table border="">
    <tr>
        <td >id</td>
        <td >name</td>
    </tr>
    <tr>
        <td>
                {{$mycategorie->id}}
        </td>
        <td>
                {{$mycategorie->nom}}
        </td>
    </tr>
</table>
   
    
@endforeach


