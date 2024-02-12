<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminpage</title>
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
<body>
    <input type="checkbox" id="check" style="display: none;" >
    
        <label for="check">
           
            <i class="fas fa-bars " id="btn"></i>
            <i class="fas fa-times "id="cancel"></i>
            
        </label>
   
    <div class="sidebar">

            <header>Archive</header>
        
        <ul>
            <li> <a href="http://" class="item"><i class="fas fa-qrcode"></i>Dashboard </a></li>
            <li> <a href="staffpanel.php" class="item" ><i class="fas fa-chalkboard-teacher"></i>Staff </a></li>
            <li> <a href="http://"  class="item" ><i class="fas fa-users"></i>Students</a></li>
            <li> <a href="http://"  class="item" ><i  class="fas fa-money-bill-wave "></i>Fees</a></li>
            <li> <a  class="dropdown dropdown-toggle" data-bs-toggle="dropdown">Add new <i  ></i> 
             </a>
             <ul class="dropdown-menu bg-secondary  "  >  
                  <li class="dropdown-item "> <a href="adminreg.html" >Admin</a></li>
                  <li class="dropdown-item"> <a href="colum.html" >Staff</a></li>
                  <li class="dropdown-item"><a href="studentpanel.php" >student</a></li>
             </ul>
        
            </li>
            
        </ul>
         
    </div>
    <section>

    </section>
   <script >
    $(document).ready(function(){
        $('.sub-btn').click(function(){
            $('this').next('.sub-menu').slideToggle();
            $(this).find('.dropdown').toggleClass('rotate');
        })
    })
   </script>
    
</body>
</html> 
