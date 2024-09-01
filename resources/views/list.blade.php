<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Post</title>
</head>
<body>

<h3>List Post</h3>

<a href="{{route('post.add')}}">Tambah</a>


<table border="1">
    <thead>
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Slug</th>
        <th>Body</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @php $no=1; @endphp
    @foreach($response_json as $row)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$row['title']}}</td>
            <td>{{$row['slug']}}</td>
            <td>{{$row['body']}}</td>
            <td>
                <a href="{{ route('post.ubah', $row['id']) }}">Ubah</a>
                <a href="{{ route('post.delete', $row['id']) }}">Hapus</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
