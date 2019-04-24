<html>
    <head>
        <title>Sample</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        <form action="{{ action('AuthController@login') }}" method="POST">
            @csrf
            Email: <input type="text" name="email" />
            Password: <input type="password" name="password" />
            <button type="submit">Login</button>
        </form>
    </body>
</html>