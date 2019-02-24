<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Class 101</title>
</head>
<body>

<ul>
<!-- Viewing tasks array with a list -->
  <?php foreach($tasks as $task): ?>
    <li>

      <?php if($task->getCompleted()): ?>
        <strike><?= $task->getDescription(); ?></strike>
      <?php else: ?>
        <?= $task->getDescription(); ?>
      <?php endif; ?>
    
    </li>
  <?php endforeach; ?>
</ul>

  
</body>
</html>