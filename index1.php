<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Quizizy™</title>
  <link rel="stylesheet" href="assets/sass/style1.css" />
</head>

<body>
  <div id="stp">
    <section class="stepper">
      <span class="step step-1 active"></span>
      <span class="step step-2"></span>
      <span class="step step-3"></span>
    </section>
  </div>
  <div class="quiz-app">
    <div id="guide" class="questions-guide">
      <h2>Quiz Guide :</h2>
      <div class="guideElem">
        <h4>1. After select your answer submit it</h4>
        <h4>2. You have only 30 seconds per each question</h4>
        <h4>3. You can't Exit from the quiz while you are playing</h4>
      </div>

      <div id="boutton">
        <button id="btn-exit" class="button button-1"><strong>Exit</strong></button>
        <button id="btn-play" class="button button-1"><strong>Play</strong></button>
      </div>
    </div>
    <div class="quiz-questions none">
      <div class="contdown">
        <span class="seconds">You have</span>
        <span id="username"></span>
        <span id="quest-num">1 / 10</span>
      </div>
      <div class="quiz-info">
        <div class="category"><span></span></div>
        <div class="count"><span></span></div>
      </div>
      <div id="question">
        <div class="quiz-area">
          <h2></h2>
        </div>
        <div class="answers-area">
          <div class="answer">
            <input type="radio" id="answer-1" name="questions" />
            <label for="answer-1"></label>
          </div>
          <div class="answer">
            <input type="radio" id="answer-2" name="questions" />
            <label for="answer-2"></label>
          </div>
          <div class="answer">
            <input type="radio" id="answer-3" name="questions" />
            <label for="answer-3"></label>
          </div>
          <div class="answer">
            <input type="radio" id="answer-4" name="questions" />
            <label for="answer-4"></label>
          </div>
        </div>
      </div>
      <div>
        <button type="button" class="next" id="next">Submit</button>
      </div>
    </div>
  </div>
  <div class="result none">
    <div id="question">
      <div class="quiz-area">
        <h2>hfzfsz</h2>
      </div>
      <div class="answers-area">
        <div class="answer true">
          <p class="result-option">salam</p>
        </div>
        <div class="answer">
          <p class="result-option">salam</p>
        </div>
        <div class="answer">
          <p class="result-option">salam</p>
        </div>
        <div class="answer">
          <p class="result-option">salam</p>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="./assets/js/main.js"></script>

</html>