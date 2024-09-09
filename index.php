<?php
require_once "functions.php";
require_once "controller.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Uz</title>
    <link rel="stylesheet" href="./assets/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="wrapper">
        <header> Xabarlashuv </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <!-- Message Item -->
                                 <?php
                                  if (!empty($allMessage)):?>
                                 <?php foreach($allMessage as $message):?>
                                <?php $messageData = generateMessageItem($message)
                                            ?>
                                <div class="messsage_item">
                                    <div class="avatar">
                                        <img src="" alt="avatar">
                                    </div>
                                    <div class="message_body w-100">
                                        <div class="meta">
                                          <span class="username"><?= $messageData[0] ?></span>  
                                          <span class="date">
                                          <?= $messageData[1] ?>
                                          </span>

                                        </div>
                                        <div class="text">
                                        <?= $messageData[2] ?>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php endforeach; ?>
                                <?php endif; ?>
                                <div class="message_body">
                                        <form action="">
                                            <input type="file" name="" id="">
                                            <input type="text" name="ism"
                                            placeholder="Ism"
                                            class="form-control"
                                            >
                                            <textarea name="message" type="text"
                                            placeholder="Xabar"
                                            class="form-control"></textarea>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>