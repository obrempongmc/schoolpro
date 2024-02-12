<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staff registration</title>
    <link rel="stylesheet" href="styles.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <script src="js/bootstrap.bundle.js"></script>  
    <link rel="stylesheet" href="font-6/css/all.css">
</head>
<body>
    <div class="container-fluid ">
        <div class="row justify-content-center ">
            <div class="col-xl-10 col-lg-12 col-md-9 ">
                <div class="card showdow-sm my-5 " >
                    <div class="card-body p-0  ">
                       <div class="card-body my-5 text-white bg-secondary">
                       <div class="row justify-content-center " >
                            <div class="col-lg-4 ">
                                <div class="class-form p-2">
                                  <div style="text-align: center;">
                                  <label ><h4 >Registration </h4></label>
                                  <hr>
                                  </div>  
                                    <div class="container  p-1  line ">
                                        <div>  <label for="">Name</label>           
                                        </div>
                                        <div class="field  nametext">
                                         
                                         <input type="text" name="fname" id="name" placeholder="firstname" autocomplete="off ">
                                        </div>
                                     
                                        <div class="field nametext">
                                         <input type="text" name="mname" id="name" placeholder="middle name" autocomplete="off" >
                                     
                                        </div>
                                        <div class="field nametext">
                                         <input type="text" name="lname" id="name" placeholder="last name" autocomplete="off" required>
                                     
                                        </div>
                                        <div class="">
                                            <label for="">Telephone</label>
                                            <input type="number" name="telephone" id="date"  required>
                                       </div>
                                       <div class="">
                                         <label for="">Community</label>
                                         <input type="text" name="community" id="date"  required>
                                        </div>
                                        <label for="">Gender</label>
                                        <div class="sex form-group"  style="align-items: center;">
                                               
                                                <br>
          
                                            <label for="">Male</label>
                                            <input type="radio" name="gender" id="sex"  required>
                                      
                                            <label for="">Female</label>
                                            <input type="radio" name="gender" id="sex"  required>
                               
                                      
                                        </div>
                                        <div class="row justify-content-center: center;">
                                            <button class="btn-primary" style="width: 100px; margin-left: 35%; border-radius: 5px;" type="button" name="staffregister">Submit</button>
                                        </div>


                                </div>
                            </div>
                        </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>