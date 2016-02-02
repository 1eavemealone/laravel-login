<form method="POST" action="/login">  
    <input type="hidden" name="_token" value="{{ csrf_token() }}">  
    <input type="email" name="email" value="{{ old('email') }}">  
    <input type="password" name="password">  
    <button type="submit">Login</button>  
</form>  