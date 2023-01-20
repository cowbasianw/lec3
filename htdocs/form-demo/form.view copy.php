<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Play</title>
</head>

<body>
    <h1><?= $msg ?></h1>
    <h2>What's in $_GET and $_POST? and $current_pics?</h2>
    <div>
        <?= dump("\$_GET", $_GET) ?>
        <?= dump("\$_POST", $_POST) ?>
        <?= dump("\$current_pics", $current_pics) ?>
    </div>
    <div class="container">
        <form method="POST" action="<?php echo $_SERVER["SCRIPT_NAME"]; ?>">
            <header>
                <h1>Image Lister</h1>
            </header>

            <ul>
                <li>
                    <label for="image-id">Image ID?</label>
                    <input type="text" name="image-id" id="image-id" />
                </li>

                <li>
                    <input type="submit" value="add image" />
                </li>
            </ul>
        </form>
    </div>

    <div>
        <header>
            <h3>Pics</h3>
            <?php foreach ($current_pics as $pic_id => $pic) : ?>
                <div>
                    <img src="<?= cloudinary_src($pic_id) ?>">
                    <span><?= $pic['city'] ?></span>
                </div>
            <? endforeach; ?>
        </header>
    </div>
</body>

</html>