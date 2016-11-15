    <?php
    $page_title = "Home Page";
    $active_page = "home";
    include "assets/includes/header.php";
    include "assets/includes/global-nav.php";


    // Function to set header as red, green, or black.
    // $question is two letter string such as "q1". Matches name of radio button set for that question
    // $wrongAnswers is an array of the options that are wrong. correct answer = o2, $wronganswers = array('o1', 'o3', 'o4')

    function setQuestionHeader($question, $answer)
    {
      // echo $_POST[$question];
      $questionNum = substr($question, -1);
      if ($_POST[$question] == $answer) {
        echo "<h3 style='color: green;'>Question ".$questionNum.":</h3>";
      }
      elseif (is_null($_POST[$question]))
      {
        echo "here";
        echo "<h3>Question ".$questionNum.":</h3>";
        //echo "<h3 style='color: red;'>Question ".$questionNum."</h3>";
      }
      else {
        //echo "<h3>Question ".$questionNum."</h3>";
        echo "<h3 style='color: red;'>Question ".$questionNum.":</h3>";
      }
    }
?>

<form name="quizForm" action="quiz.php" method="post">

  <div class="question">
    <?php setQuestionHeader("q1","o2");?>
    <h4>Who was the prime researcher of Regular Expressions?</h4>
    <label for="q1o1"><input type="radio" name="q1" id="q1o1" value="o1" <?php if ($_POST["q1"] == "o1"){echo "checked";} ?>>&nbsp Ken Thompson</label><br/>
    <label for="q1o2"><input type="radio" name="q1" id="q1o2" value="o2" <?php if ($_POST["q1"] == "o2"){echo "checked";} ?>>&nbsp Steven Kleene</label><br/>
    <label for="q1o3"><input type="radio" name="q1" id="q1o3" value="o3" <?php if ($_POST["q1"] == "o3"){echo "checked";} ?>>&nbsp Dean Ganskop</label><br/>
    <label for="q1o4"><input type="radio" name="q1" id="q1o4" value="o4" <?php if ($_POST["q1"] == "o4"){echo "checked";} ?>>&nbsp Larry Wall</label><br/>
  </div>

  <div class="question">
    <?php setQuestionHeader("q2","o3");?>
    <h4>Who came up with the formal definition of regular expressions?</h4>
    <label for="q2o1"><input type="radio" name="q2" id="q2o1" value="o1" <?php if ($_POST["q2"] == "o1"){echo "checked";} ?>>&nbsp Bill Gates</label><br/>
    <label for="q2o2"><input type="radio" name="q2" id="q2o2" value="o2" <?php if ($_POST["q2"] == "o2"){echo "checked";} ?>>&nbsp Ken Thompson</label><br/>
    <label for="q2o3"><input type="radio" name="q2" id="q2o3" value="o3" <?php if ($_POST["q2"] == "o3"){echo "checked";} ?>>&nbsp Steven Kleene</label><br/>
    <label for="q2o4"><input type="radio" name="q2" id="q2o4" value="o4" <?php if ($_POST["q2"] == "o4"){echo "checked";} ?>>&nbsp Alfred Aho</label><br/>
  </div>

  <div class="question">
    <?php setQuestionHeader("q3",array('o1', 'o2', 'o3', 'o4'));?>
    <h4>R is a regular expression if (check all that apply):</h4>
    <label for="q3o1"><input type="checkbox" name="q3[]" id="q3o1" value="o1" <?php foreach($_POST["q3"] as $ans){if ($ans == "o1"){echo "checked";}} ?>>&nbsp R equals ∅</label><br/>
    <label for="q3o2"><input type="checkbox" name="q3[]" id="q3o2" value="o2" <?php foreach($_POST["q3"] as $ans){if ($ans == "o2"){echo "checked";}} ?>>&nbsp R equals ε (representing the language { ε })</label><br/>
    <label for="q3o3"><input type="checkbox" name="q3[]" id="q3o3" value="o3" <?php foreach($_POST["q3"] as $ans){if ($ans == "o3"){echo "checked";}} ?>>&nbsp R equals α, for each α ∈ Σ</label><br/>
    <label for="q3o4"><input type="checkbox" name="q3[]" id="q3o4" value="o4" <?php foreach($_POST["q3"] as $ans){if ($ans == "o4"){echo "checked";}} ?>>&nbsp (R1)* where R1 is a regular expression</label><br/>
  </div>

  <div class="question">
    <?php setQuestionHeader("q4","o1");?>
    <h4>What is the dot (period) used for when making a regular expression</h4>
    <label for="q4o1"><input type="radio" name="q4" id="q4o1" value="o1" <?php if ($_POST["q4"] == "o1"){echo "checked";} ?>>&nbsp  Gates</label><br/>
    <label for="q4o2"><input type="radio" name="q4" id="q4o2" value="o2" <?php if ($_POST["q4"] == "o2"){echo "checked";} ?>>&nbsp Thompson</label><br/>
    <label for="q4o3"><input type="radio" name="q4" id="q4o3" value="o3" <?php if ($_POST["q4"] == "o3"){echo "checked";} ?>>&nbsp en Kleene</label><br/>
    <label for="q4o4"><input type="radio" name="q4" id="q4o4" value="o4" <?php if ($_POST["q4"] == "o4"){echo "checked";} ?>>&nbsp ed Aho</label><br/>
  </div>

<div class="question" id="submitButton">
  <input id="submit" type="submit" value="Submit Quiz">
</div>
</form>


<?php
    include "assets/includes/footer.php";
?>
