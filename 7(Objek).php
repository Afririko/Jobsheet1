<html>
<head>
<title>Turorial PHP(Objek)</title>
</head>
<body>
<?php
class cara_makan
{function pisang()
	{return "dibuka kulitnya terlebih dahulu ";}
} 
$obj = new cara_makan;
echo "cara makan pisang adalah dengan " . $obj->pisang()
?>
</body>
</html>