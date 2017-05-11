<meta charset="UTF-8">
<?php

session_start();
echo $_POST["login"];

echo $_POST["password"];
$usuario = array("francisco" => "123","santiago" =>"456","matias"=>"789");
if( isset($usuario[$_POST["login"]]) )
{
if($usuario[$_POST["login"]] == $_POST["password"])
	{
	echo "usuario  identificado!!";	
	
	header('Location: index.html');
	}
		
}
else
{
	echo "usuario no identificado!!";
}


?>
