<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quizizy™</title>
  <link rel="stylesheet" href="assets\sass\style.css" />
</head>

<body>
  <div class="container">
    <section>
      <div class="logoText">
        <h1><span>Quiz</span><span>izy</span></h1>
      </div>
      <div class="button-container">
        <div class="inputBox">
          <form name="myForm" action="index1.php" onsubmit="return validateForm()">
            <input id="username" type="text" name="fname" />
            <span>Your Username</span>
        </div>
        <div class="button_start">
          <button id="lets" class="button button-1" onclick="getname()">Let's Start</button>
        </div>
        </form>
      </div>
    </section>
  </div>
</body>
<script src="./assets/js/main.js"></script>

</html>