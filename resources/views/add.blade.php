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

<h1>Add Post</h1>

<form action="{{route('post.store' )}}" method="post">

@csrf

    <p>
        Title:<br/>
        <input type="text" name="title" placeholder="Title" required>
    </p>
    <p>
        Body:<br/>
        <textarea name="body"></textarea>
    </p>
    <p>
        <input type="submit" value="Simpan">
    </p>


</form>



</body>
</html>
