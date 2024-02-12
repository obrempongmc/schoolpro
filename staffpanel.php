<?php 
include  ('php/config.php');
$time =time();
$actual_hours = date('h');
$actual_minutes =date('i');
$actual_sec=date('s');
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
</head>
<body >

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7 col-md-6">
            <div class="card log ">
                <div class="card-body showdow-sm ">
                    <div class="container text-center">
                        <div class="row ">
                            <div class="bg-secondary">
                            <div class=" justify-content-center " style="padding-left:5px;">
                             <div class="row justify-content-center">
                              <h2>Login Time</h2>
                    
                
                             </div>
                                         <div class="bg-white  text-center my-3 " style="margin-right: 5px;">
                                             <label for=""  >Today's Date : <?php echo date('d M Y',$time) ?>

                                             </label>
                                          </div>
                                           <div class="   ">
                                                 <label for="" class="bg-white p-1 " ><?php echo ($actual_hours-1)?></label>
                                                 <label for="" class="bg-white p-1 "><?php echo $actual_minutes ?></label>
                                                 <label for="" class="bg-white p-1"><?php echo $actual_sec ?></label>
                
         
                                           </div>
                                             <div class=" container row  justify-content-center d-flex">
            
                                               <div>
                                                  <input type="submit" class="full-size" value="TIME IN" name="login">
                                                   <a href='javascript:self.history.back()'><i class='fa fa-arrow-circle-left pt-2 '>Back</i> </a>
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
    </div>
</div>

   
</body>
</html>