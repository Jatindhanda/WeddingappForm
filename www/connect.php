<?php
connection
{
$pdo = new PDO('mysql:host=localhost;dbname=phone_app', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');
echo 'connect';
}
catch (PDOException $e)
{
echo 'Unable to connect to the database server: ' . $e->getMessage();
exit();
}

?>