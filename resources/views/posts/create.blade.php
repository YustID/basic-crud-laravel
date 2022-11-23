<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create Data</title>
</head>
<body>

<div class="m-5">
    <h1>Tambah Data</h1>
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label for="exampleInputEmail1" class="form-label">Image Link</label>
        <input type="text" name="image" class="form-control">

        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" name="title" class="form-control">

        <label for="exampleInputEmail1" class="form-label">Content</label>
        <textarea name="content" rows="10" class="form-control"></textarea>

        <input type="submit" name="submit" value="Save" class="form-control btn btn-primary">
    </form>
</div>
</body>
</html>