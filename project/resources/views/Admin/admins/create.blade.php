<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin create</title>
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

        <a class="btn btn-secondary" href="admins">Back</a>
        <h2>Create Admin</h2>
    <form action="/admins" method="POST">
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1">
          @error('email')
          <div class="form-text text-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputName1" class="form-label">Name</label>
          <input type="text" value="{{old('name')}}" name="name" class="form-control" id="exampleInputEmail1">
          @error('name')
          <div class="form-text text-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPhone1" class="form-label">Phone</label>
          <input type="text" value="{{old('phone')}}" name="phone" class="form-control" id="exampleInputPhone1">
          @error('phone')
          <div class="form-text text-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputAddress1" class="form-label">Address</label>
          <input type="text" name="address" value="{{old('address')}}" class="form-control" id="exampleInputAddress1">
          @error('address')
          <div class="form-text text-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          @error('password')
          <div class="form-text text-danger">{{$message}}</div>
          @enderror
        </div>
        <ul>
					<li>one Uppercase letter.</li>
				   <li>one Lower case letter.</li>
				   <li>one number.</li>
				   <li>one special character.</li>
				   <li>at least 8 characters long.</li>
			   </ul>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
          <input type="password" name="password_confirmation" class="form-control">
          @error('password_confirmation')
          <div class="form-text text-danger">{{$message}}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-warning">Create</button>
      </form>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
