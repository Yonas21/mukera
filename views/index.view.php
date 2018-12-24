<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title></title>
    <?php require 'partials/layout.php'; ?>
  </head>

  <body>
    <header>
        <h1>

                <!-- //another for writing and echoing php -->
           <?= 'Mukera' ?>

        </h1>
        <?php require 'partials/nav.php'; ?>
        <ul>
          <h3>task to finish</h3>
            <?php foreach($tasks as $task):?>
              <li>
                <?php if($task->completed):?>
                  <span class="icon" style="color:green"><?=$task->description?></span>
                <?php else:?>
                  <span style="color: red"><?=$task->description?></span>
                <?php endif; ?>
              </li>
            <?php endforeach ?>

        </ul>

    </header>
  </body>
</html>
