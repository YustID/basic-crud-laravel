<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="m-5">
    <form method="POST" action="/posts/{{$posts->id}}">
        @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Image Link</label>
        <input type="text" value="{{$posts->image}}" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Title</label>
        <input type="text" value="{{$posts->title}}" name="title" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
    <label for="floatingTextarea2">Content</label>
    <textarea class="form-control" value="{{$posts->content}}" name="content" style="height: 100px"></textarea>
    </div>
    <input type="submit" class="btn btn-primary"></input>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>