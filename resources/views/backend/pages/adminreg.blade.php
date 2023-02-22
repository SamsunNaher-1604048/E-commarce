<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="d-flex justify-content-center m-4">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
            <form action="#" method="post">
                @csrf
                <div class="login-form">
                    <h4 class="login-title">Register of Sdmin</h4>
                    <div class="row">
                        <div class="col-md-12 mb-20">
                            <label>Name</label><br>
                            <input class="mb-0 clo-12" type="text" placeholder="First Name" name="name">
                        </div>
                        <div class="col-md-12 mb-20">
                            <label>Email Address</label><br>
                            <input class="mb-0 col-12" type="email" placeholder="Email Address" name="email">
                        </div>
                        <div class="col-md-12 mb-20">
                            <label>Password</label><br>
                            <input class="mb-0 col-12" type="password" placeholder="Password" name='password'>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>