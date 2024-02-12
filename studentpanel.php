<?php
/*if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("location: studentpanel.ph");
  exit; // Terminate script execution after redirect
} else {
   
   // Fetching POST data
   $fname = $_POST["fname"];
   $lname = $_POST["lname"];
   $dob = $_POST["dob"];
   $class = $_POST["class"];
   $gender = $_POST["gender"];
   $gfname = $_POST["gfname"];
   $glname = $_POST["glname"];
   $telephone = $_POST["telephone"];
   $comm = $_POST["community"];
   $fschool = $_POST["formersch"];
   $region = $_POST["region"];
   $city = $_POST["cityandtown"];
   $illness = $_POST["illness"];
   $allergy = $_POST["specify"];

    try {
      require_once('config.php');

      $query = "INSERT INTO `studenttbl` (`fname`, `lname`, `DOB`, `genderid`, `classid`, `Gfname`, `Glname`, `telno`, `comm`, `formerschool`, `loc`, `allergy`, `specify`) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

      $stmt = $pdo->prepare($query);
      $stmt->execute([$fname, $lname, $dob, $gender, $class, $gfname, $glname, $telephone, $comm, $fschool, $region, $city, $illness, $allergy]);

      // Redirect after successful insertion
      header("location: studentpanel.php");
      exit; // Terminate script execution after redirect

    } catch(PDOException $ee) {
        echo "Connection failed: " . $ee->getMessage();
    } finally {
        // Always clean up resources
        $stmt = null;
        $pdo = null;
    }
}*/
?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <script src="js/bootstrap.bundle.js"></script>  
    <link rel="stylesheet" href="font-6/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body >
  <!-- <form action="" method="post">
   
  <div class="reg_container bg-info">
    <div class="box ">

       <div class="container sex ">
           <label for=""><h4>Student Information</h4></label>
         </div>
       
              
           <label for="">Name</label>           
         
             
       <div class="field  nametext text-center">
         
          <input type="text" name="fname" id="name" placeholder="firstname" autocomplete="off ">
        </div>
     
       <div class="field nametext">
           <input type="text" name="lname" id="name" placeholder="last name" autocomplete="off" required>
     
         </div>
       <div class="form-group d-block">
         <label for="">Date of Birth</label>
         <input type="date" name="dob" id="date"  required>
       </div>
       
        
    
       <div class="row m-2">
        <label for=""> Class</label>
            
         <select required name="class" class="form-control mb-3">
              <option value="">--Select class--</option>
              <option  value="Todlers">Tods</option>
              <option  value="KG1">KG 1</option>
              <option value="kG2">KG 2</option>
              <option  value="p1">BASIC 1</option>
              <option  value="p2">BASIC 2</option>
              <option  value="p3">BASIC 3</option>
              <option  value="p4">BASIC 4</option>
              <option value="p5">BASIC 5</option>
              <option value="p6">BASIC 6</option>
              <option value="f1">FORM 1</option>
              <option  value="f2">FORM 2</option>
              <option  value="f3">FORM 3</option>

           
      
           </select>
       
       </div>
          
       <label for="" style="text-align: center;">Gender </label>
      
        
       <div class="form-check form-check-lg form-group  sex " style="align-items: center; display: block;"  >

            
        <input class="form-check-input" type="radio" name="gender"  value="male">
        <label for="">Male</label>
      
      
      </div>
      <div class="form-check form-check-lg">
        <input class="form-check-input" type="radio" name="gender"  value="female">
        <label for="">Female</label>
      
      
      </div>
     
         <hr>

            <label for=""><h4>Guardian Information</h4></label>
    <div class="container  p-1  line border-black">
        <div>  <label for="">Name</label>           
        </div>
        <div class="field  nametext">
         
         <input type="text" name="gfname" id="name" placeholder="firstname" autocomplete="off ">
        </div>
     
       <div class="field nametext">
         <input type="text" name="glname" id="name" placeholder="last name" autocomplete="off" required>
     
        </div>
        <div class="">
            <label for="">Telephone</label>
            <input type="number" name="telephone" id="date"  required>
       </div>
       <div class="">
         <label for="">Community</label>
         <input type="text" name="community" id="date"  required>
        </div>
        <hr>
        <div>
          <label for=""><h3>Other details</h3></label>
          <div class="form-group">
            <label for="">Former School</label>
            <input type="text" name="formersch">
            <label for="">Region</label>
            <input type="text" name="Region">
            <label for=""  >city and town</label>
            <input type="text" name="cityandtown">

          </div>
          <div class="form-group">
            <label for=""><h4>Health</h4></label>
            <hr>
            <br>

            Do your Child have any allergy or illness?<br>
            <div class="form-check form-check-lg form-group  sex " style="align-items: center;"  >

            
              <input class="form-check-input" type="radio" name="illness"  value="yes">
              <label for="">Yes</label>
            
            
            </div>
            <div class="form-check form-check-lg">
              <input class="form-check-input" type="radio" name="illness"  value="no">
              <label for="">No</label>
            
            
            </div>
           

            
          </div>
          <div class="m-3">
             <br>
            <label for="">if any specify</label>
            <br>
             <textarea name="specify" id="" cols="30" rows="5"> write any allergy your ward have.</textarea>
          </div>
         
         
        
          
         
          
        </div>
       
          <button type="submit" class="fab fa-telegram btn btn-primary "  style="align-items: center;"></button>
        
          
          
      
             
        </div>
       
     </div>
     </div>
      
      
   
   
   
     
     
  
    


    
    
 
 
     </div>
    
    
  </div> -->
  </form>
  <div class="container">
      <div class="row">
        <div class="col-md col-sm-10 ">
          <div class= text-center">
          <label for=""><h2>Student Information</h2></label>
          <br>

          <label for=""><h3>Name</h3></label>           
         
             
       <div class="row">
        <div class="d-lg-flex">
        <div class=" text-center">
         
         <input type="text" name="fname" id="name" placeholder="firstname" autocomplete="off ">
       </div>
    
      <div class=" text-center">
          <input type="text" name="lname" id="name" placeholder="last name" autocomplete="off" required>
    
        </div>

        </div>
       </div>


          </div>
          

        </div>
      </div>
  </div>
    
</body>
</html>