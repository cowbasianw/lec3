<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Son of Tut-02</title>
</head>

<body>

    <div class="box">
        <h1><?= current_time() ?></h1>

        <h2>Skipping this part!</h2>

        <div class="container">
            <?php foreach ($photo_ids as $photo_id) : ?>
                <img src="<?= cloudinary_src($photo_id) ?>">
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>