<?php
$mysql_hostname = "localhost";
$mysql_user = "1335054";
$mysql_password = "acm123";//CHANGE THIS
$mysql_database = "1335054";//CHANGE THIS
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database) or die("Could not connect database");

//error_reporting(E_ALL);
// ini_set('display_errors', 1);
error_reporting(E_ERROR | E_PARSE);
$conn = new mysqli($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$flag=0; $sum=0;
//$termm = $_POST['s_term'];
//$syy = $_POST['s_sy'];
$quser=mysqli_query($conn,"select * from `school_year` where status=1");
// set variable
$term=$sy=0;
while($row=mysqli_fetch_array($quser)){
  $term = $row['term'];
  $sy = $row['sy'];
}

$result = mysqli_query($conn,"select * from transactions where term='$term' AND sy='$sy'");
while($row = mysqli_fetch_array($result)) {
  $amnt = $row['amount'];
  $sum = $sum+$amnt;
}

$dif=0;
$amnt1=0;
$result1 = mysqli_query($conn,"select * from expense where term='$term' AND sy='$sy'");
while($row1  = mysqli_fetch_array($result1)){
  $amnt1 = $row1['amount'];
  $dif = $dif+$amnt1;
}/*
if (mysqli_num_rows($result1) > 0) {
echo 'User name exists in the table.';
} else {
echo 'User name does not exist in the table.';
}*/
?>
<div class="card-panel pos" style="overflow-x:auto;">
  <table class="acm" style="width:100%">
    <thead>
      <tr style="text-align:center;">
        <th style="text-align:center;">Total Budget</th>
        <th style="text-align:center;">Total Expense</th>
        <th style="text-align:center;">Remaining Budget</th>
      </tr>
    </thead>
    <tr >
      <td style="text-align:center;"> <?php echo $sum; ?> </td>
      <td style="text-align:center;"> <?php echo $dif; ?> </td>
      <td style="text-align:center;"> <?php echo ($sum - $dif); ?> </td>

    </tr>
  </table>
</div>
<?php




?>
