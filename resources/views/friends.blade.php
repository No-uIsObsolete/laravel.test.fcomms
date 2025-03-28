<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Friends</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
            href="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.snow.css"
            rel="stylesheet"
    />
</head>
<body data-bs-theme="dark">

<div>
    <form action="" method="post" id="FriendSearchForm">
        @csrf
    <h4>Friends</h4>
    Search: <input type="text" name="FriendSearch"> <button type="submit" name="FriendSearchButton">Submit</button>
    <ul>

    </ul>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>
<script src="/public/assets/js/jquery.js"></script>
<script type="text/javascript"></script>
</body>
</html>
