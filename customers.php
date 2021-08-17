<html>
    <head>
<title>TSF BANK </title>
<link rel="shortcut icon" type="image" href="image/bank.png">
<script src="https://kit.fontawesome.com/5af0044972.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style> 
.nav {
  background-color: rgba(107, 99, 250, 0.6);
}
 .nav li a {
 color: white;
 }
 .customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
.customers td, .customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

.customers tr:nth-child(even){background-color: #f2f2f2;}

.customers tr:hover {background-color: #ddd;}

.customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:  rgba(107, 99, 250, 0.6);
  color: white;
}
 a:link,a:visited {
  background-color:  rgba(107, 99, 250, 0.3);
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
h1 {
  text-align: center;
  font-family: arial;
  color: rgba(107, 99, 250, 0.6);
  margin-top: 10px;
}
::selection {
  color: rgb(255, 255, 255);
  background: #6b63fa99;
}
.footer {
  background-color:  rgba(107, 99, 250, 0.5);
  text-align: center;
  color:white;
  padding:40px;
}
 </style>
</head>
<body>
<ul class="nav justify-content-center pb-3 pt-3 col-md-12 ">
        <li class="nav-item fs-md-1">
            <a class="nav-link active" aria-current="page" href="sample.html">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.html">ABOUT ME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="display.php">VIEW TRANSACTIONS</a>
        </li>
    </ul>
    <h1>ALL CUSTOMERS</h1>
    <table class="customers">
  <tr>
     <th>S.NO</th>
     <th>Name</th>
     <th>Email</th>
     <th>Current Balance</th>
     <th>Transfers</th>
  </tr>
  <tr>
   <td>1</td>
   <td>Bhavana</td>
   <td>bhavana@gmail.com</td>
   <td id="user_1">12000</td>
    <td><a href="form.php" target="self">Transfer</a></td>
  </tr>
  <tr>
   <td>2</td>
   <td>Bhuvana</td>
   <td>bhuvana@gmail.com</td>
   <td id="user_2">17000</td>
    <td><a href="form1.php" target="self">Transfer</a></td>
  </tr>
  <tr>
  <td>3</td>
   <td>Shravya</td>
   <td>shravya@gmail.com</td>
   <td id="user_3">19000</td>
    <td><a href="form2.php" target="self">Transfer</a></td>
  </tr>
  <tr>
  <td>4</td>
   <td>Rupa</td>
   <td>rupa@gmail.com</td>
   <td id="user_4">12000</td>
    <td><a href="form3.php" target="self">Transfer</a></td>
  </tr>
  <tr>
  <td>5</td>
   <td>Siri</td>
   <td>siri@gmail.com</td>
   <td id="user_5">19000</td>
    <td><a href="form4.php" target="self">Transfer</a></td>
  </tr>
  <tr>
  <td>6</td>
   <td>Rajasri</td>
   <td>rajasri@gmail.com</td>
   <td id="user_6">16000</td>
    <td><a href="form5.php" target="self">Transfer</a></td>
  </tr>
  <tr>
  <td>7</td>
   <td>Chandana</td>
   <td>chandana@gmail.com</td>
   <td id="user_7">13000</td>
    <td><a href="form6.php" target="self">Transfer</a></td>
  </tr>
  <tr>
  <td>8</td>
   <td>Sanjana</td>
   <td>sanjana@gmail.com</td>
   <td id="user_8">14000</td>
    <td><a href="form7.php" target="self">Transfer</a></td>
  </tr>
  <tr>
  <td>9</td>
   <td>Meghana</td>
   <td>meghana@gmail.com</td>
   <td id="user_9">11000</td>
    <td><a href="form8.php" target="self">Transfer</a></td>
  </tr>
  <tr>
  <td>10</td>
   <td>Haritha</td>
   <td>haritha@gmail.com</td>
   <td id="user_10">18000</td>
    <td><a href="form9.php" target="self">Transfer</a></td>
  </tr>
</table>
</body>
<footer>
  <div class="footer">
            <p>copyright &copy; 2021 Made by Ujwala</p>
            <a href="https://www.gmail.com"><i class="fa fa-envelope-o"></i></a>
            <a href="https://www.linkedin.com/in/ujwala-adepu-6a96a11b3/"><i class="fab fa-linkedin"></i></a>
          </div>
</footer>
</html>