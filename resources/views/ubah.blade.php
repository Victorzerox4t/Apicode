<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
</head>
<body>

<h1>Edit Post</h1>

<form action="{{ route('post.update', $post['id']) }}" method="POST">
    @csrf
    @method('PUT')

    <p>
        Title:<br/>
        <input type="text" name="title" value="{{ $post['title'] }}" placeholder="Title" required>
    </p>
    <p>
        Body:<br/>
        <textarea name="body">{{ $post['body'] }}</textarea>
    </p>
    <p>
        <input type="submit" value="Simpan">
    </p>

</form>

</body>
</html>
