<table border="solid">
    <tr>
        <td >id</td>
        <td >name</td>
    </tr>
</table>
@foreach ($categorie as $mycategorie) 
<table border="solid" style="animation: 2ms">
  
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


