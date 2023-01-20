<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Form Play</title>
</head>

<body>

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


</body>

</html>