<?php
if($_POST['submit'] == "Upload"){
	include('config/UpLoadTree.php');
	$upload = new Upload($_FILES['arquivo']['name'] , $_FILES['arquivo']['size'] , $_FILES['arquivo']['tmp_name'] , $_FILES['arquivo']['type']);
}
if($_POST['submit'] == "Upload Todos"){
	include('config/MultiploUpLoadTree.php');
	$multiploUpload = new MultiploUpload($_FILES['arquivo']['name'] , $_FILES['arquivo']['size'] , $_FILES['arquivo']['tmp_name'] , $_FILES['arquivo']['type']);
	
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery.js">             	</script>
<script type="text/javascript" src="js/interface/interface.js"> </script>
<script type="text/javascript" src="js/funcoes.js">           	</script>

</head>

<body>
	<div>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <fieldset>
        	<span>
				<input type="file"   name="arquivo"  />
        	</span>
            <span>
        		<input type="submit" name="submit" value="Upload" id="submit"/>    
            </span>
        </fieldset>
    </form>
    </div>
</body>
</html>