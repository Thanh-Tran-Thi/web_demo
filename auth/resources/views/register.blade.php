<html>
    <head>
        <title>Register</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        <form action="{{ action('RegisterController@register') }}" method="POST">
            @csrf
            Name: <input type="text" name="name" />
            Email: <input type="text" name="email" />
            Password: <input type="password" name="password" />
            @if($errors->has('password'))
            {{-- $errors : array --}}
                <p>{{ $errors->first('password') }}</p>
            @endif
            Confirm password: <input type="password" name="password_confirmation" />
            <button type="submit">Register</button>
        </form>
    </body>
</html>