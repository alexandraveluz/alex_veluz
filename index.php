
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="" method="post" id="form1">
		 <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add" onclick="ad()"></td>

                <td><input type="submit" name="show" value="Show" onclick="sho()"></td>
            </tr>
        </table>
    </form>

    <script type="text/javascript">
		function ad(){
			document.getElementById('form1').action = "add.php";
		}
		function sho(){
			document.getElementById('form1').action = "show.php";
		}

	</script>
</body>
</html>	