<?php
require 'conn.php';
$q = intval($_GET['q']);


$sql="SELECT * FROM `records` WHERE iban = '".$q."'";
$result = mysqli_query($conn,$sql);


 while($row = mysqli_fetch_array($result)) {
  echo "<table class='M'>
<tr>
<th>Transaction ID</th>
<th>IBAN</th>
<th>Amount</th>
</tr>";
echo "<tr>";
echo "<td>" . $row['TransactionID'] . "</td>";
echo "<td>" . $row['iban'] . "</td>";
echo "<td>" . $row['Amount'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($conn);


?>
