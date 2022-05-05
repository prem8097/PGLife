<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" rel="stylesheet">
        <script src="js/bootstrap.bundle.js"></script>
        <link href="css/pglife.css" rel="stylesheet">
        <title>Home | PGLife</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                  <img src="img/logo.png" alt="x" width="100" height="54">
                </a>
                <button type="button" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
                  <span class="navbar-toggler-icon" ></span>
              </button>
                <div id="mynavbar" class="collapse navbar-collapse justify-content-end" >
                    <ul class="navbar-nav " >
                        
                        <li class="nav-item">
                          <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#my-signup">
                            <i class="fas fa-user"></i>signup
                          </a>
                        </li>
                        <div class="nav-vl"></div>
                        <li class="nav-item">
                          <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#my-login">
                            <i class="fas fa-sign-in-alt"></i>Login
                          </a>
                        </li>
                    </ul>
                </div>
              </div>
        </nav>

      <form method="post" action="signup.php">
        <div class="modal fade" id="my-signup" role="dialog" >
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">signup with PGLife</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                    <div class="input-group mb-3">
                    <span class="input-group-text" ><i class="fas fa-user"></i></span>
                    <input class="form-control"  name="full_name"    type="text" placeholder="Full Name">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    <input name="phone" type="text" class="form-control" placeholder="Phone Number">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input name="email" type="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input name="password" type="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-university"></i></span>
                    <input name="college_name" type="Text" class="form-control" placeholder="College Name">
                  </div>
                  
                  <div class="d-flex">
                    I'am a
                  <div class=" form-check  offset-1 ">
                      
                      <label class="form-check-label" for="l1">Male</label>
                      <input id="l1" type="radio" name="gender" class="form-check-input">
                  </div>
                  <div class="form-check offset-1">
                      <label class="form-check-label" for="l2">Female</label>
                      <input id="l2" type="radio" name="gender" class="form-check-input">
                  </div>   
                  </div><br>
                  <div class="d-grid gap-2">
                    <button class="btn btn-info " type="submit">Create Account</button>
                  </div>
                  
                </div>
                <div class="modal-footer justify-content-center">
                  Already have an account?
                  <a href="#" data-bs-toggle="modal" data-bs-target="#my-login" data-bs-dismiss="modal">Login</a>
             </div>
              </div>
              
          </div>
      </div>
      </form> 
        
 

    <form method="post" action="login.php">
      <div class="modal fade" id="my-login">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" >Login with PGLife</h5>
              <button type="button" data-bs-dismiss="modal" class="btn-close"></button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                <span class="input-group-text" ><i class="fas fa-user"></i></span>
                <input name="email" class="form-control" type="email" placeholder="Email">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" ><i class="fas fa-lock"></i></span>
                <input name="password" class="form-control" type="password" placeholder="Password">
              </div><br>
              <div class="d-grid">
                <button class="btn btn-info" type="submit">Login</button>
              </div>
            </div>
            <div class="modal-footer justify-content-center">
                <a  href="#"   data-bs-toggle="modal" data-bs-target="#my-signup" data-bs-dismiss="modal">Click here</a>
                to register a new account
            </div>
          </div>
        </div>
      </div>
    </form>

      <div class="banner">
      </div>
        <h2 class="txt pb-3">Happiness per Square Foot</h2>
        <form method="post" action="search.php">
          <div class="hi input-group w-50">
            <input  name="name" type="search" class=" form-control "  placeholder="Enter your city to search for PG's">
              <button type="submit" class="btn btn-secondary" ><i class="fa fa-search"></i></button>
        </div>
        </form>
          
        
      </div>
      <br>
      <br>
      <br><br><br>
<div class=" justify-content-center col-md">
      
  <div class="page-container">
    <h2 class="city-heading ">Major cities</h2> 
    <div class="row gx-5">
      <div class="city-card-container col-md-3 " >
        <a href="delhi.html">
          <div class=" p-3 city-card rounded-circle">
            <img  class="city " src="img/delhi.png" alt="u">
          </div>
        </a>
      </div>
      <div class="city-card-container col-md-3 ">
        <a href="mumbai.html">
          <div class="p-3 city-card rounded-circle">
            <img  class="city " src="img/mumbai.png" alt="u">
          </div>
          </a>
      </div>
      <div class="city-card-container col-md-3 ">
        <a href="bangalore.html">
          <div class="p-3 city-card rounded-circle">
            <img  class="city  " src="img/bangalore.png" alt="u">
          </div> 
        </a>
      </div>
      <div class="city-card-container col-md-3 ">
        <a href="hyderabad.html">
          <div class="p-3 city-card rounded-circle">
            <img  class="city " src="img/hyderabad.png" alt="u">
          </div>
        </a>
      </div>
     </div>
  </div><br>
  <!--
  <div class="footer"> 
    <div class="row ">
        <div class="offset-1 col-md mt-5 mr-5">
          <a href="#" class=" txt-foot">
            <div class=" col-md">
            PG in Delhi
            </div>
          </a>
        </div>
        
      <div class="col-md mt-5">
        <a href="#" class=" txt-foot">
          <div class=" col-md ">
          PG in Mumbai
          </div>
         </a>
      </div>
        
     
      <div class="col-md">
        <a href="#" class="txt-foot">
          <div class= "col-md mt-5">
          PG in Bengalore
          </div>
       </a>
      </div>
        
      
    <div class="col-md">
      <a href="#" class=" txt-foot">
        <div  class="col-md mt-5">
        PG in Hyderabad
        </div>
      </a>
    </div>
      
    
     
   </div>
   <div class="row">
     <div class="jio">
       <i>Prem sai@Copyrights 2022</i>
     </div>
   </div>


  </div>
-->
    <div class=" foot ">
      <div class="row ">
        <div class=" col-sm-3 mt-5 justify-content-center">
          <a href="delhi.html" class="foot-text">
          PG in Delhi
          </a>
        </div>
      
        <div class="col-sm-3 mt-5 justify-content-center">
          <a href="mumbai.html" class="foot-text" >
            PG in Mumbai
          </a>
        </div>
        <div class="col-sm-3 mt-5 justify-content-center">
          <a href="bangalore.html" class="foot-text">
            PG in Bangalore
          </a>
        </div>
      
        <div class="col-sm-3 mt-5 justify-content-center">
          <a href="hyderabad.html" class="foot-text">
            PG in Hyderabad
          </a>
       </div>
      </div>
      <div class="row">
        
      </div>
         <div class=" mt-5 foot-text offset-5 footer justify-content-center">
            <i>Prem © Copyright 2022 PGLife </i>
         </div>
    </div>
  
      
  </body>
  </html>