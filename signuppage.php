
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin registration</title>
    <link rel="stylesheet" href="styles.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <script src="js/bootstrap.bundle.js"></script>  
    <link rel="stylesheet" href="font-6/css/all.css">
</head>
<body>
    <div class="container" style="height:100vh;">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card showdow-sm my-5">
                    <div class="card-body m-5 bg-secondary text-white" >
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-9 col-md-10">
                                <div style="text-align: center;">
                                    <label ><h3 >Login details</h3></label>
                                    <hr>
                                    </div> 
                                    <form action="adminreg.php" method="post">
                                    <br>
                                      <div class="container  p-1  line border-black text-center">
                                          <div>  <label for=""><h4>Username</h4></label>           
                                          </div>
        
                                       
                                         <div class="">
                                           <input type="text" name="username" id="name" placeholder="Username" autocomplete="off" required>
                                       
                                          </div>
                                          <div class="form-group "> 
                                             <label for=""><h4>Password</h4></label>
                                             <input type="password" name="password1" placeholder="password">
                                             
                                             <label for=""><h4>Password</h4></label>
                                             <input type="password" name="password2" placeholder=" repeat password">

                                                      
                                          </div>
                                          <div class="row justify-content-center: center;">
                                            <button class="btn-primary my-3" style="width: 100px; margin-left: 50%; border-radius: 5px;" type="button" name="sign_up_button">Submit</button>
                                        </div>

                                        </form> 

                                        
                                          
                                            
                                            
                                        

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>