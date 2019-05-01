<html>
    <body>
        @if ($user)
            <pre>@json($user)</pre>
        @else
            <h1>Not logged in. Go away!</h1>
        @endif
    </body>
</html>