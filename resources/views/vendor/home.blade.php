<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <div>
       @if(session()->has('status'))
           <p style="color: green">{{ session()->get('status') }}</p>
       @endif
       <p>
           Welcome Vendor!
       </p>
   </div>
<div>
    <form action="{{ route('vendor.logout')}}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>
</body>
</html>
