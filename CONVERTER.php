<html>
<head>
<style>
	#box
	{
		width:350px;
		height:270px;
		margin:0px auto;
		border:2px solid black;
		padding:10px;
		border-color: grey;
	}
	h2{
		text-align: center;
	}
	table{
		margin:0px auto;
	}
	body{
	    background-color:black;
	    padding-top:200px;
	    color:white;
	}
</style>
</head>
 
<body>
 
<form align="center" action="currencyconvertor.php" method="post">
 
<div id="box">
<h1><center>Currency Converter</center></h1>
<table>
	<tr>
	<td>
		Enter Amount:<input type="text" name="amount"><br>
	</td>
</tr>
<tr>
<td>
	<br><center>From:<select name='cur1'>
	 <option value="USD" selected>US Dollar(USD)</option>
 
	 </select>
    </center>
</td>
</tr>
<tr>
	<td>
	<br><center>To:<select name='cur2'>
	 <option value="INR" selected >Indian Rupee(INR)</option>
      
	</select>
        </center>
</td>
</tr>
<tr>
<td><center><br>
<input type='submit' name='submit' value="CovertNow"></center>
</td>
</tr>
</table>
    </div>
</form>

<?php
if(isset($_POST['submit'])){
	
$amount = $_POST['amount'];
$cur1 = $_POST['cur1'];
$cur2 = $_POST['cur2'];
 

if($cur1=="USD" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center><b>&#8377 &nbsp;</b>" . $amount* 76.60 . "</center>";
}

}
 
?>
 
</body>
</html>
