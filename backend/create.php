<?php
require 'firestore.php';
$db = getFirestore();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = [
    'Title' => $_POST['title'],
    'Description' => $_POST['description'],
    'Features' => explode(',', $_POST['features']),
    'TechStack' => explode(',', $_POST['techstack']),
    'Img' => $_POST['img'],
    'Link' => $_POST['link'],
    'Github' => $_POST['github'],
  ];
  $db->collection('projects')->add($data);
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Create Project</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Create Project</h2>
    <?php $data = []; include 'form.php'; ?>
  </div>
</body>
</html>
