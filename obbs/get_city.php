<?php
require_once("includes/dbconnection.php");
if(!empty($_POST["state_id"])) 
{
$stateid=$_POST["state_id"];
$sql=$dbh->prepare("SELECT * FROM cities WHERE state_id =:stateid");
$sql->execute(array(':stateid' => $stateid));	
?>
<option value="">Select City</option>
<?php
while($row =$sql->fetch())
{
?>
<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
<?php
}
}
?>