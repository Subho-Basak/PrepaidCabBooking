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
	left: 350px;
	top: 200px;
	padding: 30px 200px 30px 200px;
	background: #d0d0d0;
	box-shadow: 5px 5px 5px gray;
}

#minspecs {
	position: absolute;
	left: 350px;
	top: 800px;
	padding: 30px 200px 30px 210px;
	background: #d0d0d0;
	box-shadow: 5px 5px 5px gray;
}

#recomend {
	position: absolute;
	left: 350px;
	top: 1150px;
	padding: 30px 200px 30px 210px;
	background: #d0d0d0;
	box-shadow: 5px 5px 5px gray;
}

table input {
	width: 300px;
	height: 25px;
	border: 1px solid white;
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
	top: 497px;
	right: 274px;
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
				<td>Name :</td>
				<td><input type="text" name="name"  /></td>
			</tr>
	
			<tr>
				<td>Type :</td>
				<td><input type="text" name="type"  /></td>
			</tr>
			<tr>
				<td>Capacity :</td>
				<td><input type="number" name="capacity"  /></td>
			</tr>
			
			<tr>
				<td>Cost :</td>
				<td><input type="text" name="cost"  /></td>
			</tr>
			<tr>
				<td>Upload a photo :</td>
				<td><input type="file" name="photo" id="upload" /></td>

			</tr>
</table>
		<input type="submit" value="SAVE" id="sbmt" />

	</form>



</body>
</html>