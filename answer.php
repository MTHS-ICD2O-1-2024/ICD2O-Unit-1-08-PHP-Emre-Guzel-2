<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8" />
  <meta name="description" content="Hello world in JS " />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Emre Guzel" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_green.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="css/style.css">
  <title>Hello world in js </title>
</head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <form class='clauclator-form' action="#">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4">
        <label class="mdl-textfield__label" for="sample4">Number...</label>
        <span class="mdl-textfield__error">Input is not a number!</span>
      </div>
    </form>
    <main class="mdl-layout__content">
        <div class="right-image">
          <img src="./" alt="laptop image" />
        </div>
        <div class="page-content">The answer is ...</div>
        <br />
        <div class="page-content-answer">
          <a href="./index.php">Return ...</a>
        </div>
      </main>
  </div>
    <?php echo '<p>Hello, World!, in PHP</p>'; ?>
  </body>
</html>
