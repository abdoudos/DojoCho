<table border="solid">
    <tr>
        <td >id</td>
        <td >name</td>
    </tr>
</table>

@foreach ($discipline as $mydiscipline) 
<table border="solid" style="animation: 2ms">
  
    <tr>
        <td>
                {{$mydiscipline->id}}
        </td>
        <td>
                {{$mydiscipline->nom}}
        </td>
    </tr>
</table>
   
    
@endforeach


