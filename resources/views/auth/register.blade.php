<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/auth.css">
  </head>
  <body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                    <p class="text-white-50 mb-5">Please enter your data form!</p>
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-outline form-white mb-4">
                            <input type="text" name="name" id="name" class="form-control form-control-lg 
                            @error('name')
                                is-invalid
                            @enderror" placeholder="Name" required value="{{old('name')}}"/>
                            @error('name')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
    
                        <div class="form-outline form-white mb-4">
                            <input type="text" name="username" id="username" class="form-control form-control-lg @error('username')
                            is-invalid
                        @enderror" placeholder="Username" required value="{{old('username')}}"/>
                        @error('username')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        </div>
    
                        <div class="form-outline form-white mb-4">
                          <input type="email" name="email" id="email" class="form-control form-control-lg @error('email')
                          is-invalid
                      @enderror" placeholder="Email" required value="{{old('email')}}"/>
                          @error('email')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{$message}}
                            </div>
                          @enderror
                        </div>
          
                        <div class="form-outline form-white mb-4">
                          <input type="password" name="password" id="Password" class="form-control form-control-lg @error('password')
                          is-invalid
                      @enderror" placeholder="Password" required/>
                          @error('password')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
          
                        <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>
                    </form>
      
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                    </div>
      
                  </div>
                  
                  <div>
                    <p class="mb-0">Already registered? <a href="/login" class="text-white-50 fw-bold">Login</a>
                    </p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>