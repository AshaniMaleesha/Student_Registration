<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    
    <link rel="stylesheet" href="{{ asset('static/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="/css/style.css"> 
</head>
<body>

    <section style="padding-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="card">
                        <div class="card-header">
                           <h4><b> Login | Custom Auth</b><h4>
                        </div>
                        <div class="card-body ">
                            <form action="{{ route('auth.check') }}" method="post">
                
                                @if (Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                @endif
                
                
                
                                 @csrf
                                    <div class="form-group">
                                        <label><b>Email </b></label> <br>
                                        <input type="text" class="form-controll" name="email" placeholder="Enter email address" value="{{ old('email') }}"><br>
                                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                        
                                    </div>
                
                                    <div class="form-group">
                                        <label><b>Password</b></label> <br>
                                        <input type="password" class="form-controll" name="password" placeholder="Enter your password"><br>
                                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                    </div><br>
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                    <br>
                                    <br>
                                    <a href="{{ route('auth.register') }}" class="link">I don't have an account, create new</a>
                            </form>
                            
                        </div>
                    
                    </div>
                </div>
            </div>

        </div>
    </section>
    



</body>
</html>


