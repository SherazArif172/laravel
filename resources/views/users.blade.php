<div>
   
<!-- {{
    print_r($users)
}} -->
   <table border="1">
    <tr>
    <td>name</td>
    <td>email</td>
    <td>city</td>
    </tr>

    @foreach($users as $user)
<tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->city}}</td>
</tr>
@endforeach
   </table>
</div>
