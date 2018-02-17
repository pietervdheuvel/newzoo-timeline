<?php

require __DIR__ . '/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new Twig_Environment($loader);

//company planning = IEABSK6ZI4GJEBSR
//my accountID = IEABSK6Z
//folders in my account = www.wrike.com/api/v3/accounts/IEABSK6Z/folders


$login = array(
    'Authorization' => 'bearer 1J9qUEIiOsYtsnKLZ1aODqoMuqI5eZSC1Ego55z8KSzW9P9QnH4bVcXxdb025GCK-N-WFIUKC'
);

$request = Requests::get('https://www.wrike.com/api/v3/folders/IEABSK6ZI4GL6Z4J/tasks', $login);

$data = json_decode($request->body, true);
$data = $data['data'];

echo $twig->render('timeline.template.html', ['tasks' => $data]);

?>

<!-- <html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Timelify | Simple Timeline plugin</title>
	<link href="http://fonts.googleapis.com/css?family=Kristi|Alegreya+Sans:300,800" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/timelify.css">
</head>
<body>

<div>
    Hello
</div> -->
