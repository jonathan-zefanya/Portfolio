<?php
require 'firestore.php';
$db = getFirestore();
$projects = $db->collection('projects')->documents();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Project List</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Project List</h2>
    <a href="create.php" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mb-4">+ Add Project</a>

    <ul>
      <?php foreach ($projects as $project): 
        $data = $project->data(); ?>
        <li class="mb-4 border-b pb-2">
          <div class="flex justify-between items-center">
            <div>
              <h3 class="text-xl font-semibold"><?= $data['Title'] ?></h3>
              <p class="text-gray-600"><?= $data['Description'] ?></p>
            </div>
            <div>
              <a href="edit.php?id=<?= $project->id() ?>" class="text-blue-500 hover:underline">Edit</a> |
              <a href="delete.php?id=<?= $project->id() ?>" class="text-red-500 hover:underline">Delete</a>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</body>
</html>
