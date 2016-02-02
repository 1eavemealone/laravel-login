 @if(Auth::check())
{{Auth::user()->name}}  --- <a href="/logout">Logout</a>
@else
<a href="/login">Click here to login</a>
@endif