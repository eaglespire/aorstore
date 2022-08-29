<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Vendor Register</h1>

        <div class="container">
            @if($errors->any())
                <div style="color: red">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('vendor.register') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="" class="form-label">
                        Your Fullname
                    </label>
                    <input type="text" name="name" id="">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">
                        Email
                    </label>
                    <input type="email" name="email" id="">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">
                        Password
                    </label>
                    <input type="password" name="password" id="">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">
                        Retype-Password
                    </label>
                    <input type="password" name="password_confirmation" id="">
                </div>
                <button type="submit">Sign Up</button>
            </form>
        </div>
</body>
</html>
