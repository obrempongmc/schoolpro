<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pop up</title>
    <link rel="stylesheet" href="sty/pop.css">
</head>
<body>

      <div class="container">
        
        <button type="submit" class="btn1" onclick="openpop()">submit</button>

        <div class="popup" id="popup">
          <img src="images/correct.jpg" alt="">
          <h3>congratulation </h3>
          <p>
            you have signed up successfully!!!
             
          </p>
          <button type="button" class="btn" onclick="closepop()">ok</button>
 
        </div>
      </div>
      <script>
        let popup =document.getElementById("popup")
        function openpop(){
          popup.classList.add("open-popup")
        }
        function closepop(){
          popup.classList.remove("open-popup")
        }
      </script>
     
</body>
</html>







