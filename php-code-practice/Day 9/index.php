<?php
require __DIR__.'/vendor/autoload.php';
// use Demo\Models\User;
use Demo\Controllers\UserController;
use Demo\Controllers\TodoController;

$user = new UserController();
$todo = new TodoController();
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>User Table</h2>

<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>todos</th>
    <!-- <th>Country</th> -->
  </tr>
  <?php foreach($user->index() as $user): ?>
  <tr>
    <td><?=$user->id?></td>
    <td><?=$user->name?></td>
    <td>
      <?php 
      if (!empty($todo->findByUserId($user->id))):
      foreach($todo->findByUserId($user->id) as $todo): ?>
        <?php
          echo "ko"
           ?>
      <?php endforeach;
      endif; ?>
    </td>
  </tr>
<?php endforeach; ?>
</table>

</body>
</html>

<?php
echo "#######USER TABEL#######\n";
// echo $todo->findByUserId
// echo $user->index();
// echo "\n";
// echo $user->findById(1);
// echo "</br>";
// $user = new UserController();
// echo $user->create((object)["name"=>"Indah"]);
// echo "\n";
// echo "#######TODO TABEL#######\n";
// echo $todo->create((object)["title"=>"todo 2","user_id"=>1]);
// echo $todo->index();
// echo "\n";
// echo $todo->findById(1);
// echo "\n";
// $todoItem = $todo->findById(1);
// echo $todoItem->User->name;
// echo "\n";
// echo $todoItem->title;