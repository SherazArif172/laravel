@include('common.header',['page'=>"this is aoutt page"])

<x-message-banner msg="loged in successfuly"/>

<h1>aboutt</h1>

<!-- echo url()->previous(); -->
{{ URL::current();}}

<a href="{{URL::to('nametwo')}}">about</a>

 