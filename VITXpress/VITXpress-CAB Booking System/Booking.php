<?php

?>
  <!DOCTYPE html>
<html>
<title>VITXpress</title>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" initial-scale="1" shrink-to-fit="yes">
    <link rel="stylesheet" href="css/style.css">
<style>
body{
background-image: url(imag/rwanda-244e.jpg) ;
}
#button{
       width: 160px;
       height: auto;
       background-color:brown;
       font-family:century gothic;
       color:white;
       font-size:20px;
}

#button:hover{
             border: 3px solid gold;
             background-color:white;
             color:brown; 
} 
#container{
  margin-top: 200px;
  margin-bottom:200px;  
  width: 900px;

  background-color: white;

  
}
#row1{
      display: table-row;
      padding-left: 120px;
      padding-right: 0px;
      border-radius: 5px;
      border:solid brown 1px;
      width: 500px;

    }
 
    input,textarea {
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  float:center;
}

input[type=submit] {
  width:200px;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  width:700px;  
  background-color: #f2f2f2;
  margin-top:100px;
  margin-bottom:200px;
}
label{
    float:left;
    padding-left:50px;
    font-family:century gothic;
}
h3{
    font-family:century gothic;
    font-size:20px;
    background-color:brown;
    color:white;
}

</style>
</heade>
<body>
<nav id="navbar">
<a id="bar" href="index.html">HOME</a>
<a id="bar" href="aboutus.html">ABOUT US</a>
<a id="bar" href="contact.php">CONTACT</a>
<a id="bar" href="Booking.php">BOOK YOUR CAR</a>
<nav id="sign">
<a id="signid" class="signcls" href="signup.php">Signin</a>
<a id="signid" href="login.php">Login</a>
</nav>
</nav>
<center>
<br>
<table width="1000" height="350" align="center">
<tr><td align="center">
<br>
<br><br><br><br><br>
     

<div id="collection">
     <form class="form-inline" action="tryths.php?location,pdate,rdate" name='dataform' id='reg_form' autocomplete='off'>
       <div id="lbel">
       <label id="lbell">Location</label>
       <label id="lbelp">Pick up Date</label>
       <label id="lbelr">Return Date</label>
       </div>
       
       <br>
        <select id="input" name="location" required>
          <option value="1">Katpadi-Chennai Airport</option>
          <option value="2">Katpadi-Railway Station</option>
          <option value="3">Chennai Airport-Katpadi</option>
          <option vale="4">Railway Station-Katpadi</option>
          <option value="5">Chennai Airport-VIT Vellore</option>
          <option vale="6">Railway Station-VIT Vellore</option>
          <option value="7">VIT Vellore-Chennai Airport</option>
          <option vale="8">VIT Vellore-Railway Station</option>
        </select>   
      <input type="date" id="input" placeholder="Pick up date" name="pdate" required>
      <input type="date" id="input" placeholder="Return date" name="rdate" required>
      <button type="submit" id="button">Choose a car</button>
    </form> 
</div>

</td></tr>
<br><br><br><br><br>
<tr><td><br><br><br></td></tr>
</table>
   
<center>
<br><br><br><br><br><br><br><br><br><br>
	 <table width="1340" height="100" align="center" bgcolor="brown">
<tr>
</td>
<td>
<a href="#"><b>Home</b></a>
&nbsp;&nbsp;&nbsp;
<a href="#"><b>About us</b></a>
&nbsp;&nbsp;&nbsp;
<a href="#"><b>Contact</b></a>
</td>
</tr>
<table width="1340" height="35" align="center" bgcolor="black">
<tr>
<td align="center">
<font color="grey" face="arial">2024 © VITXpress</font>
</html>




