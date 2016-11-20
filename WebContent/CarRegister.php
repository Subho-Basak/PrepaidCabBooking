<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GameXplorer | Add new game</title>
<meta name="" content="authored by http://www.nopeople.com/Design" />

<style type="text/css">
* {
	margin: 5px;
	font-family: arial;
	font-weight: normal;
	font-style: normal;
}

#generalspecs {
	position: absolute;
	left: 300px;
	top: 200px;
	width:auto;
	height:auto;
	padding: 30px 100px 30px 100px;
	background: #d0d0d0;
	box-shadow: 5px 5px 5px gray;
}


table input {
	width: 300px;
	height: 25px;
	border: 1px solid white;
}
table input[type="radio"]{
margin-left:100px;
width:20px;
height:15px;

}
table td {
	width: 150px;
}

label {
	transform: rotate(270deg);
	background: #404040;
	color: white;
	box-shadow: -5px -5px 5px gray;
}

#sbmt {
	position: absolute;
	top: 597px;
	right: 374px;
	width: 100px;
	height: 30px;
	border: none;
	background: #555555;
	color: #e0e0e0;
}
</style>
<script type="text/javascript">
	function showName() {
		var path = document.getElementById("upload");
		alert(path.value);
	}

</script>
</head>
<body>
	<h1
		style="padding: 20px 10px 20px 80px; background: #353535; margin: 50px -5px; color: white;">Enter
		news records</h1>
	<form id="form1" action="CarRegister_Script.php" method="post" enctype="multipart/form-data">


		<table id="generalspecs">
			<tr>
				<td>Id :</td>
				<td><input type="text" name="id"  /></td>
			</tr>
			<tr>
				<td>Brand :</td>
				<td><input type="text" name="brand" /></td>
			</tr>
			
			<tr>
				<td>Type :</td>
				<td><select name="type">
						<option>Micro</option>
						<option>Mini</option>
						<option>SUV</option>
						<option>Lux Sedan</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<td>Capacity :</td>
				<td><select name="capacity">
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<td><input type="radio" name="ac"  />AC</td>
				<td><input type="radio" name="ac"  />Wifi</td>
			</tr>
			
			<tr>
				<td>Rates :</td>
				<td><input type="text" name="cost"  /></td>
			</tr>
			<tr>
				<td>Upload a photo :</td>
				<td><input type="file" name="photo" id="upload" /></td>

			</tr>
			
			<tr>
				<td>Quantity :</td>
				<td><input type="text" name="qty"  /></td>
			</tr>
</table>
		<input type="submit" value="SAVE" id="sbmt" />

	</form>



</body>
</html>