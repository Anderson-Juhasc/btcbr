<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
    <script type="text/javascript">

        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function(){
            console.log(ajax.responseText);
        };
        ajax.open('GET', 'https://www.bitcointoyou.com/api/ticker.aspx', true);
        ajax.send();
    </script>
</body>
</html>
