<!DOCTYPE html>
<?php
$answer = "dickbutt";
$question = "question";
?>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <title>Flashcard Machine!</title>
    <link rel="stylesheet" type="text/css" href="flashcards.css">
  </head>

  <body>
    <div id="app">
      <div id="header">
        <h1>Flashcards</h1>
        <p>This is a flashcard application designed to test
	your knowledge of computer hardware for CompTIA A+ Examination</p>
      </div>

      <div id="front" class="card">
        <?php echo "<p id=\"question\">".$question."</p>"; ?>
      </div>

      <div id="back" class="card">
        <?php echo "<p id=\"answer\">".$answer."</p>"; ?>
      </div>

      <div id="controls">
        <div id="showCard" class="ctrlBtn">
          <p>Show Card</p>
        </div>

        <div id="nextCard" class="ctrlBtn">
          <p>Other Button</p>
        </div>
      </div>

    </div>

  </body>
  <script src="main.rb"></script>
  <script src="main.js"></script>
</html>
