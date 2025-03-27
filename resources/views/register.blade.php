<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
<form action="" method="post">
    @csrf
    <input type="text" name="username" value="{{old('username')}}">  Username <br>
    @error('username')
    <div class="error">{{ $message }}</div>
    @enderror
    <input type="email" name="email" value="{{old('email')}}"> Email <br>
    @error('email')
    <div class="error">{{ $message }}</div>
    @enderror<br>
    <input type="text" name="firstname" value="{{old('firstname')}}"> Firstname <br>
    @error('firstname')
    <div class="error">{{ $message }}</div>
    @enderror
    <input type="text" name="lastname" value="{{old('lastname')}}">  Lastname <br>
    @error('lastname')
    <div class="error">{{ $message }}</div>
    @enderror
    <input type="tel" name="telephone" value="{{old('telephone')}}"> Telephone <br>
    @error('telephone')
    <div class="error">{{ $message }}</div>
    @enderror<br>
    <input type="password" name="password">  Password <br>
    @error('password')
    <div class="error">{{ $message }}</div>
    @enderror
    <input type="password" name="password_repeat"> Repeat password <br>
    @error('password_repeat')
    <div class="error">{{ $message }}</div>
    @enderror<br>
    <input type="checkbox" name="terms"> Terms and Service<br>
    @error('terms')
    <div class="error">{{ $message }}</div>
    @enderror<br>
    <input type="submit" value="Submit">
</form>
</body>
</html>