<?php

// Descending Order

          $desc_query = "SELECT * FROM students ORDER BY per DESC limit 0,10";
          $result = executeQuery($desc_query);
    
    
    /* Default Order
 else {
        $default_query = "SELECT * FROM students";
        $result = executeQuery($default_query);
}*/


function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "hackethon");
    $result = mysqli_query($connect, $query);
    return $result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> taluka level </title>
       <style>
			.page
			{
				background-color:#eee;
			}
            table, th, td 
			{
				border: 1px solid black;
			}

			td, th
			{
				border: 1px solid #ddd;
				padding: 10px;
				font-size:14px;
				text-align:center;
			}

			tr:nth-child(even){background-color: #f2f2f2;}

			tr:hover {background-color: #ddd;}

th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
        </style>
    </head>
    <body>
      <div class="page">
	  <center>
	  <h1>RMP Predictors</h1>
	  <h2>Top 10 Students in ##### Taluka</h2>
	  <div class="tab1">
        <form action="taluka.php" method="post">
          
            <table>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>School Id</th>
                    <th>Percentage</th>
					<th>Action</th>
                </tr>
                <!-- populate table from mysql database -->
                <?php while ($row = mysqli_fetch_array($result)):?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
					<td><?php echo $row[3];?></td>
					<td><?php echo '<a href="#"><button>validate</button></a>  <a href="#"><button>Delete</button></a>   <a href="#"><button>Send to District</button></a>    '?></td>
                </tr>
                <?php endwhile;?>
            </table>
			</center>
        </form>
		</div></div>
 <form action="taluka.php" method="post">
 <?php
// Descending Order

          $desc_query = "SELECT * FROM students ORDER BY per DESC limit 11,15";
          $result = executeQuery($desc_query); 
?>
		<div class="page">
          <br><br><center>
		  <h2>Next Top 5 Students in ##### Taluka</h2>
		  <div class="tab2">
            <table>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>School Id</th>
                    <th>Percentage</th>
					<th>Action</th>
                </tr>
                <!-- populate table from mysql database -->
                <?php while ($row = mysqli_fetch_array($result)):?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
					<td><?php echo $row[3];?></td>
					<td><?php echo '<a href="#"><button>validate</button></a>  <a href="#"><button>Delete</button></a>  <a href="#"><button>Sent to District</button></a>'?></td>
                </tr>
                <?php endwhile;?>
            </table></center>
			</div>
        </form>
		</div>
    </body>
</html>