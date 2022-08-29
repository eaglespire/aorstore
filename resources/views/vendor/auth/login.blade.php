<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     I am vendor login
<div>
    @if($errors->any())
        <div style="color: red">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('vendor.login') }}" method="post">
        @csrf
        <div>
            <label for="">Email: </label>
            <input type="email" name="email" id="">
        </div>
        <div>
            <label for="">Password: </label>
            <input type="password" name="password" id="">
        </div>
        <button type="submit">Login</button>
        or
        <a href="{{ route('vendor.registrationForm') }}">Create a new account</a>
    </form>
</div>
</body>
</html>
