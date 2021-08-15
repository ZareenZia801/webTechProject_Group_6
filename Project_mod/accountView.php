<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>send msg to Accounts</title>
   
   <style type="text/css">
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
       
   </style>
</head>
<body> 
<?php include 'navBar.php';?>

<div class="col-3 col-s-3">
<h1>Send Message to Accounts</h1>
Once you've paid your 1st payment, please send a confirmation message by filling up this form.<br><br>
<div class="popup" onclick="myFunction()">Click me for more info!
  <span class="popuptext" id="myPopup">You must pay first...</span>
</div>
<script>
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>


</div>
<div class="col-6 col-s-6">
	<center>

<form name="contactForm" action="controller/addAccount.php" method="POST" enctype="multipart/form-data">
	
    <label>User Name:</label>
    <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username..." /><br /><br>
      
    <label>E-mail:</label>
    <input type="text" name="email" class="form-control" placeholder="Enter your E-mail..." /><br /><br>

    <label>Amount:</label>
    <input type="text" name="amount" class="form-control" placeholder="Enter the amount you paid..." /><br /><br>

    <label>Comment Box:   </label><br>

    <textarea class="form-control" rows="4" cols="80" placeholder="Type a message..." name="comment_text"></textarea>

    <br><br><br><br>

    <input type="submit" name="addAccount" value="Submit" class="btn btn-info" />
    <input type="reset" name="reset" value="reset"><br />
                        
</form>
    </center>           
                        
  
   
</div>
</div>
</body>
 <div class="Ffooter">
    <?php include 'Footer.php';?>
 </div>
</html>