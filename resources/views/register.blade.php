<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
            href="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.snow.css"
            rel="stylesheet"
    />
</head>
<body data-bs-theme="dark">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>
<script src="/public/assets/js/jquery.js"></script>
<script type="text/javascript"></script>
</body>
</html>