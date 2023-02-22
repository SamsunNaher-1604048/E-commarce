<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="d-flex justify-content-center m-5 ">
        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
            <form action="{{route('admin.check.login')}}" method="post" >
                @csrf
                <div class="login-form mt-5">
                    <h4 class="login-title">Admin login</h4>
                    <div class="row mt-5">
                        <div class="col-md-12 col-12">
                            <label>Email Address</label><br>
                            <input class="col-12 mb-0 form-control" type="email" placeholder="Email Address" name="email">
                        </div>
                        <div class="col-12 mt-3">
                            <label>Password</label><br>
                            <input class="col-12 mb-0 form-control" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-primary">Log In</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>