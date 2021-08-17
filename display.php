
  
<!-- // SQL query to select data from database
$sql = "SELECT * FROM userdata ORDER BY score DESC ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>
// HTML code to display data in tabular format  -->
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>TSF BANK</title>
    <link rel="shortcut icon" type="image" href="image/bank.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- CSS FOR STYLING THE PAGE -->
    <style> 
    .nav {
        background-color: rgba(107, 99, 250, 0.6);
        }
       .nav li a {
        color: white;
        }
        table {
            margin:  0 auto;
            font-size: large;
            border: 1px black;
        }
  
        h1 {
            margin-top:25px;
            text-align: center;
            color: rgba(107,99,250,0.6);
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: rgba(107,99,250,0.6);;
            border: 1px black;;
        }
        th {
         color: rgba(8, 8, 8, 0.6);
        }
        th,
        td {
            font-weight: bold;
            border: 1px black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: bold;
            color:white;
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
            <a class="nav-link" href="customers.php">VIEW CUSTOMERS</a>
        </li>
    </ul>
    <section>
        <h1>ALL TRANSACTIONS</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>FROM</th>
                <th>TO</th>
                <th>AMOUNT TRANSFERRED</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 

            include("config.php");
            $sql = "SELECT * FROM crud2 ";
                // output data of each row
                $result = $cser->query($sql);
                while($rows = $result->fetch_assoc())
            {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['pname'];?></td>
                <td><?php echo $rows['pcode'];?></td>
                <td><?php echo $rows['pprice'];?></td>
            </tr>
            <?php
            }
             ?>
        </table>
    </section>
</body>
</html>