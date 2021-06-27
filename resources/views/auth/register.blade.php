<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('static/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:45px" >
            <div class="col-md-4 col-md-offset-4 ">
                <h4>Register | Custom Auth</h4><hr>
                <form action="{{ route('auth.save') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Name</label> 
                        <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name') }}">
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                        
                    @enderror
                    </div>

                    <div class="form-group">
                        <label>Email</label> 
                        <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Password</label> 
                        <input type="password" class="form-control" name="password" placeholder="Enter your password">
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                    </div>

                    <button type="submit" class="btn btn-primary">Sign Up</button>
                    <br>
                    <a href="{{ route('auth.login') }}">I already have an account, Sign In</a>
                </form>
            </div>
        </div>

    </div>
</body>
</html>