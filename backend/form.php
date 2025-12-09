<form method="post" class="space-y-4">
  <input name="title" placeholder="Title" value="<?= $data['Title'] ?? '' ?>" class="w-full p-2 border rounded"><br>
  <input name="description" placeholder="Description" value="<?= $data['Description'] ?? '' ?>" class="w-full p-2 border rounded"><br>
  <input name="features" placeholder="Features (comma separated)" value="<?= isset($data['Features']) ? implode(',', $data['Features']) : '' ?>" class="w-full p-2 border rounded"><br>
  <input name="techstack" placeholder="Tech Stack (comma separated)" value="<?= isset($data['TechStack']) ? implode(',', $data['TechStack']) : '' ?>" class="w-full p-2 border rounded"><br>
  <input name="img" placeholder="Image URL" value="<?= $data['Img'] ?? '' ?>" class="w-full p-2 border rounded"><br>
  <input name="link" placeholder="Website Link" value="<?= $data['Link'] ?? '' ?>" class="w-full p-2 border rounded"><br>
  <input name="github" placeholder="GitHub Link" value="<?= $data['Github'] ?? '' ?>" class="w-full p-2 border rounded"><br>
  <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Save</button>
</form>
