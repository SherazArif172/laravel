<h1>view purpose</h1>
<h2>{{$name}}</h2>  // to get any name


@if($name=="bzura")
    <h2>this is anil</h2>
    @elseif($name=="sheraz")
    <h2>this is sheraz</h2>
    @else {
        "some one other"
    }
    @endif


<h2>{{$users[0]}}</h2> // array can not be get in blade tamplet 


<!-- <div>                      // how you can display array
@foreach($users as $user)      
<h4>{{$user}}</h4>
@endforeach
</div> -->


<!-- <div>                            // how to make loop
    @for($i=0;$i<10;$i++)
    <h1>{{$i}}<h1/>
@endfor
</div> -->


<x-message-banner msg="loged out successfuly"/>
{{ URL::previous();}}


    
