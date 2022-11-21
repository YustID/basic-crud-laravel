<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>View Data</title>
</head>
<body>
    <div class="p-5">
        <h1>View your data</h1>
        <table class="table table-striped">
            <thead>
                <th>No.</th>
                <th>Image</th>
                <th>Title</th>
                <th>Content</th>
                <th>Action</th>
            </thead>
            @forelse ($posts as $post)                
            <tbody>
                <td>{{$post->id}}</td>
                <td><img src="{{$post->image}}" alt="gambar" height="100px"></td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td><a href="#" class="btn btn-primary">Update</a>
                <a href="#" class="btn btn-danger">Delete</a></td>
                @empty
                <div class="alert alert-danger">
                    Data Post belum Tersedia.
                </div>
            </tbody>                
            @endforelse
            
        </table>
    </body>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>