

<!-- {{print_r($errors)}} -->




<div>
    <form action="form" method="post">
        @csrf
        <div>
            <input type="text" name="name" placeholder="name"><span>@error('name'){{$message}}@enderror</span><br>
            <input type="email" name="email" placeholder="email"><span>@error('name'){{$message}}@enderror</span><br>
            <input type="text" name="city" placeholder="city"><span>@error('name'){{$message}}@enderror</span><br>
        </div>
        <button type="submit">Add User</button>
    </form>
</div>
