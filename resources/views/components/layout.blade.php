<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    
    {{$slot}} 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container">
        <form action="register" method="POST">
            @csrf
          <div class="mb-3">
            @error('username')
            {{$message}}
            @enderror
                
            
              <label for="exampleInputEmail1" class="form-label">Username</label>
              <input type="text" value="{{old('username')}}" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          <div class="mb-3">
            @error('email')
            {{$message}}
            @enderror
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" value="{{old('email')}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            @error('password')
            {{$message}}
            @enderror
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Retype Password</label>
              <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
            </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>  

</body>
</html>