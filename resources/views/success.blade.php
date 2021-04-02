<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h3 class="display">You are successfully login to the system</h3><br/>
    @if(isset(Auth::user()->email))
    <div class="alert alert-danger">
        <strong>Welcome {{ Auth::user()->email }}</strong></br>
        <a href="{{ url('/logout') }}">Logout</a>
    </div>
    @else
        <script>window.location="/";</script>
    @endif
 <div>
</div>
</body>
</html>