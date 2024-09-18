<div>
   

   <table border="1">
    <tr>
    <td>name</td>
    <td>email</td>
    <td>city</td>
    </tr>

    @foreach($data as $student)
<tr>
    <td>{{$student->name}}</td>
    <td>{{$student->class}}</td>
    <td>{{$student->batch}}</td>
</tr>
@endforeach
   </table>
</div>
