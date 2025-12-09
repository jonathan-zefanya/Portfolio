<?php
require 'firestore.php';
$db = getFirestore();
$id = $_GET['id'];
$db->collection('projects')->document($id)->delete();
header('Location: index.php');
?>