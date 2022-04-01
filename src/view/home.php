<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/assets/scripts/script.js" defer></script>
    <link rel="stylesheet" href="/assets/styles/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>
    <?php if(isset($msg)): ?>
        <p>Normal tag, <?php echo $msg ?></p>
        <p>Short echo tag, <?= $msg ?></p>
    <?php endif; ?>
    <button id="btn-msg">Click Me</button>
</body>
</html>