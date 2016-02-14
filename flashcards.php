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
    <!-- get a conntection to my sqlite3 database of exam questions and answers going -->
    <?php
      $db = new SQLite3('db/flashcards.db');




      $cardIndex = 1;
      $card = $db->query("SELECT * FROM flashcards WHERE cardIndex = ".$cardIndex);
      $a = $card->fetcharray();
      $cardIndex = $a[0];
      $question = $a[1];
      $answer = $a[2];

    

    ?>
    <div id="app">
      <div id="header">
        <h1>Flashcards</h1>
        <p>This is a flashcard application designed to test
	your knowledge of computer hardware for CompTIA A+ Examination</p>
      </div>

 instead of having two divs that i update the contents of, im gonna make a list and use next and prev
      <div id="front" class="card">
        <p id="question"><?php echo $question; ?></p>
      </div>

      <div id="back" class="card">
        <p id="answer"><?php echo $answer; ?></p>
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

  <script src="main.js"></script>
</html>
