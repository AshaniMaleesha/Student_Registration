<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="/css/style.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>  
    <section id="banner">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark " >
            <a class="navbar-brand" href="#" ><h1>Welcome to Student Registration<h1></a>
        </nav>
    <section style="padding-top:10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Add New Student
                       
                        
                        <a href="{{ url('all-students') }}" class="btn btn-success float-end">View Students</a>
                        
                        <hr>
                        <div class="card-body ">

                            @if (Session::has('student_added'))
                                <div class="alert alert-success" role="alert">
                                   {{ Session::get('student_added') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('student.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">NAME</label>
                                <input type="text" name="name" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label for="name">AGE</label>
                                <input type="text" name="age" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label for="name">HOME TOWN</label>
                                <input type="text" name="hometown" class="form-control"/>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="name">GENDER</label>
                                <input type="text" name="gender" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <div class="custom-file">
                                    <label for="file">CHOOSE PROFILE IMAGE</label>
                                    <input type="file" name="file" class="form-control" onchange="previewFile(this)"/>
                                    <img id="previewImg" name="profileimage" style="max-width:130px;margin-top:20px;"/>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ url('/admin/dashboard') }}" class="btn btn-primary ">Home</a>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>

        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
    <script>
        function previewFile(input){
            var file=$("input[type=file]").get(0).files[0];

            if(file){
                var reader = new FileReader();
                reader.onload = function(){
                    $('#previewImg').attr("src",reader.result);
                }
                reader.readAsDataURL(file);
            }
        }

    </script>  
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
    </section>
</body>
</html>