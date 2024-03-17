

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> index</title>
    <link rel="stylesheet" href="styles.css">
<script src="scripts.js"></script>
   <link href="css/bootstrap.min.css" rel="stylesheet"/>
   <script src="js/bootstrap.bundle.js"></script>  
   <link rel="stylesheet" href="font-6/css/all.css">
</head>
<body class="backindex">
    <style>
        .backindex{
        height: 100vh;
        width: 100vw;

  
  background:url('images/hd1.jpg')rgba(0,0,0,0.5);
  background-blend-mode: multiply;
  background-position: center;
  background-size: cover;
  background-repeat:no-repeat;
}
    </style>
    <div class="container text-center " style="margin-top: 5%;">
       <form action="" method="post"><div class="card  col-md-5 col-lg-6 col-sm-10 "  >
            <div class="card-body  ">
            <div class="row text-center ">
            
            <h3>LOGIN</h3>

            <div class="form-group " >
             <label for="">Username</label>
             <input  type="text" name="username" autocomplete="off" required>
            </div>

            <div class="form-group">
             <label for="">Password</label>
             <input type="password" name="password" autocomplete="off" required>

             <a href="#" class=""><button onclick="
    document.getElementById('diplay').innerHTML='you logging in as admin ';
" class="btn btn-dark " >admin</button></a>
             <a href="#" class=""><button class="btn btn-dark ">staff</button></a> 
           </div>
            <style>
                a{
                    text-decoration: none;
                    
                }
                a button{
                    border-radius: 5px;
                }
            </style>
            
            
                
            </div>
                <div class="" >

                  Don't have Accounts <a href="loginreg.html">
                    <button style="background-color: goldenrod; color:green;border:none; padding:2px;">sign in</button></a>
                <div>
                <p id="display" style="color:black"></p>
                </div>
                </div>
        
                
            
            
           
        </div>
        
       
          
             
        </div> 
        
        
        
        </form>
        
    </div>
    
</body>
</html>