<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('static/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="/css/style.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand" href="#" ><h1>Welcome to Student Registration<h1></a>
         <div class="navbar-nav">
            <ul>
            <li><a href="/addStudent" class="btn btn-warning">Add Student</a><li>
            <li><a href="/all-students" class="btn btn-warning">View Students</a><li>
            <li><a href="{{ route('auth.logout') }}" class="btn btn-primary">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="slider">
    <figure>
                <div class="slide">
                    <img src="/images/1.jpg" alt="Cover Image"/>
                    <img src="/images/2.jpg" alt="Cover Image"/>
                    <img src="/images/3.jpg" alt="Cover Image"/>
                    <img src="/images/4.jpg" alt="Cover Image"/>
                    <img src="/images/5.jpg" alt="Cover Image"/>
                </div>

               
        </figure>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">All right reserved © 2021</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>    
      
    
</body>
</html>