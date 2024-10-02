<!DOCTYPE html>

<html>

<head>

<title></title>

</head>

<body>
<p>GET: <?= var_dump($_GET) ?></p>
<p>POST: <?= var_dump($_POST) ?></p>
<p>Hello, your last name is: <?= htmlspecialchars($_POST['lname']) ?></p>

</body>

</html>