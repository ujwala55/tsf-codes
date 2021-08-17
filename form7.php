<html>
    <head>
<title>TSF BANK </title>
<link rel="shortcut icon" type="image" href="image/bank.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style> 
/* input[type=text] {
  width: 100%;
  padding: 7px ;
  margin: 5px 0;
  border: 1px solid #000000;
  } */
input[type=submit] {
  background: rgba(107,99,250,0.6);
  border: 1px solid rgba(107,99,250,0.6);
  border-radius: 20px;
  padding-left:50px;
  padding-right:50px;
  padding-top:8px;
  padding-bottom: 8px;
  text-decoration: none;
  margin-top:20px;
}
input[type=number] {
  margin-top:20px;
}
input[type=submit]:hover
{
  background: white;
    color: black !important;
}
.nav {
  background-color: rgba(107, 99, 250, 0.6);
}
 .nav li a {
 color: white;
 }
.main {
  margin-left :500px;
  margin-top:200px;
  margin-right:500px;
  padding:60px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 8px 20px 0 rgba(107,99,250,0.6);
}
.user2{
  width:100%;
   margin-top:20px;
  padding-top:9px;
  padding-bottom:9px;
  padding-left:25px;
  padding-right:25px;
  border:1px solid grey;
  border-radius:5px;
  outline: none;
  background-color: #f1f1f1;
}
.user2,.user1:focus {
  border: 1px solid #555;
}
.user1 {
  width:100%;
  padding-top:9px;
  padding-bottom:9px;
  padding-left:15px;
  padding-right:15px;
  border:1px solid grey;
  border-radius:5px;
  outline: none;
  background-color: #f1f1f1;
}
.touser {
  margin-left:185px;
  margin-top:37px;
}
::selection {
  color: rgb(255, 255, 255);
  background: #6b63fa99;
}
</style>
</head>
<body>
<ul class="nav justify-content-center pb-3 pt-3 col-md-12 ">
        <li class="nav-item fs-md-1">
            <a class="nav-link active " aria-current="page" href="sample.html">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.html">ABOUT ME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="display.php">VIEW TRANSACTIONS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="customers.php">VIEW CUSTOMERS</a>
        </li>
    </ul>
    <div class="main">
<form action="" method="post" name="form1">
<table width="25%" >
<tbody><tr> 
<td>FROM</td>
<td> <input  class="user1" value="Sanjana" name="pname"></td>
</tr>
<tr> 
<td>TO</td>
<td><select  class="user2" name="pcode">
<option value="">-select person-</option>
      <option value="Bhuvana">Bhuvana</option>
      <option value="Bhavana">Bhavana</option>
      <option value="Shravya">Shravya</option>
       <option value="Rupa">Rupa</option>
       <option value="Siri">Siri</option>
       <option value="Rajasri">Rajasri</option>
       <option value="meghana">Meghana</option>
       <option value="Haritha">Haritha</option>  
</select></td>                                                  
</tr>
<tr> 
<td>AMOUNT&nbsp;&nbsp;</td>
<td><input type="number" name="pprice"></td>
</tr>
<tr> 
<td></td>
<td><input type="submit" name="Submit" value="submit"></td>
</tr>
           
       </tbody></table>
   </form>
</div>
<?php
//including the database connection file
include("config.php");
if(isset($_POST['Submit'])) {    
$pname = $_POST['pname'];
$pcode = $_POST['pcode'];
$pprice = $_POST['pprice'];

// if all the fields are filled (not empty)             
//insert data to database
$result = mysqli_query($cser, "INSERT INTO crud2(pname,pcode,pprice) VALUES('$pname','$pcode','$pprice')");
echo "<h3 style='margin-top:-450px; margin-left:480px;color: rgba(107, 99, 250, 0.6);'>Successfully transferred from $pname to $pcode</h3>";

}
?>
</body>
</html>