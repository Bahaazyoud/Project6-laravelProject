<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Category Edit</title>
    <style>
        ::-webkit-scrollbar {
            width: 20px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #ffb606ed;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #d69a0a;
        }
    </style>
</head>
<body>
    <div class="container mt-5">

        <a class="btn btn-secondary" href="/admin/category">Back</a>
        <h2>Edit Category</h2>
        <img
        class="" width="250px"
        src="{{$category->image ? asset('storage/' . $category->image) :asset('/image/no-image.jpg')}}"
        alt=""
    />
    <form action="/admin/category/edit/{{$category->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Your Image</label>
          <input type="file" name="image" value="{{$category->image}}" class="form-control" id="exampleInputfile1">
          @error('image')
          <div class="form-text text-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputName1" class="form-label">Category Name</label>
          <input type="text" value="{{$category->name}}" name="name" placeholder="Text" class="form-control" id="exampleInputEmail1">
          @error('name')
          <div class="form-text text-danger">{{$message}}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit Category</button>
      </form>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
