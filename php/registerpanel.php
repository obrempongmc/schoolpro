<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resgiter</title>
    <link rel="stylesheet" href="styles.css">
    
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <script src="js/bootstrap.bundle.js"></script>  
    <link rel="stylesheet" href="font-6/css/all.css">
</head>
<body>
    <div class="container c">
        
        <div class="row ">
         

             <div class="container bg-in  ">
               <form action="" method="post">
               <div class="card">
                     <div class="card-body bg-info m-5">
                     <header><h2>Register Staff</h2> </header>
             <div class="namecontainer">
             <div>  <label for="">Name</label>           
              </div>
              <div class="field  nametext">
               
               <input type="text" name="fname" id="name" placeholder="firstname" autocomplete="off ">
              </div>
           
             <div class="field nametext">
               <input type="text" name="lname" id="name" placeholder="last name" autocomplete="off" required>
           
              </div>
           </div>   
           <div class="field">
              <label for="">username</label>
              <input type="text" name="username" id="username" autocomplete="off" required>
           </div>
          <div class="field">
               <label for="">email</label>
              <input type="email" name="email" id="email" autocomplete="off" required>
          </div>
        
          <div class="field">
              <label for="">Telephone</label>
              <input type="number" name="telephone" id="date"  required>
         </div>
         <div class="field">
            <label for="">password</label>
            <input type="password" name="password" id="password" required>
         </div>
          <div>
             <input type="submit" class="full-size" value="submit" name="login">
             <a href='javascript:self.history.back()'><i class='fa fa-arrow-circle-left pt-2 '>Back</i> </a>
          </div>
         
           </div>


            </div>     
   
             </div>

                     </div>

               </div>
  
              </form>
    
           </div>
      </div>
   </div>
    
</body>
</html>