</body>

</html>
<?php
echo '<h1>Dev Info</h1>';
echo '<h2>POST</h2>';
print_r($_POST);
echo '<h2>GET</h2>';
print_r($_GET);
echo '<h2>SESSION</h2>';
print_r($_SESSION);
echo '<h2>COOKIE</h2>';
print_r($_COOKIE);
echo '<h2>SERVER</h2>';
print_r($_SERVER);
echo '<h2>FILES</h2>';
print_r($_FILES);
echo '<h2>REQUEST</h2>';
print_r($_REQUEST);
echo '<h2>ENV</h2>';
print_r($_ENV);
echo '<h2>GLOBALS</h2>';
print_r($GLOBALS);

?>