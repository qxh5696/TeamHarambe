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
        echo "<h3 style='color: green;'>Question ".$questionNum."</h3>";
      }
      elseif (is_null($_POST[$question]))
      {
        echo "here";
        echo "<h3>Question ".$questionNum."</h3>";
        //echo "<h3 style='color: red;'>Question ".$questionNum."</h3>";
      }
      else {
        //echo "<h3>Question ".$questionNum."</h3>";
        echo "<h3 style='color: red;'>Question ".$questionNum."</h3>";
      }
    }
?>

<form name="quizForm" action="index.php" method="post">

  <div class="question">
    <?php setQuestionHeader("q1","o2");?>
    <label for="q1o1"><input type="radio" name="q1" id="q1o1" value="o1" <?php if ($_POST["q1"] == "o1"){echo "checked";} ?>>&nbsp Option 1</label><br/>
    <label for="q1o2"><input type="radio" name="q1" id="q1o2" value="o2" <?php if ($_POST["q1"] == "o2"){echo "checked";} ?>>&nbsp Option 2</label><br/>
    <label for="q1o3"><input type="radio" name="q1" id="q1o3" value="o3" <?php if ($_POST["q1"] == "o3"){echo "checked";} ?>>&nbsp Option 3</label><br/>
    <label for="q1o4"><input type="radio" name="q1" id="q1o4" value="o4" <?php if ($_POST["q1"] == "o4"){echo "checked";} ?>>&nbsp Option 4</label><br/>
  </div>

  <div class="question">
    <?php setQuestionHeader("q2","o3");?>
    <label for="q2o1"><input type="radio" name="q2" id="q2o1" value="o1" <?php if ($_POST["q2"] == "o1"){echo "checked";} ?>>&nbsp Option 1</label><br/>
    <label for="q2o2"><input type="radio" name="q2" id="q2o2" value="o2" <?php if ($_POST["q2"] == "o2"){echo "checked";} ?>>&nbsp Option 2</label><br/>
    <label for="q2o3"><input type="radio" name="q2" id="q2o3" value="o3" <?php if ($_POST["q2"] == "o3"){echo "checked";} ?>>&nbsp Option 3</label><br/>
    <label for="q2o4"><input type="radio" name="q2" id="q2o4" value="o4" <?php if ($_POST["q2"] == "o4"){echo "checked";} ?>>&nbsp Option 4</label><br/>
  </div>

  <div class="question">
    <?php setQuestionHeader("q3",array('o1', 'o2'));?>
    <label for="q3o1"><input type="checkbox" name="q3[]" id="q3o1" value="o1" <?php foreach($_POST["q3"] as $ans){if ($ans == "o1"){echo "checked";}} ?>>&nbsp Option 1</label><br/>
    <label for="q3o2"><input type="checkbox" name="q3[]" id="q3o2" value="o2" <?php foreach($_POST["q3"] as $ans){if ($ans == "o2"){echo "checked";}} ?>>&nbsp Option 2</label><br/>
    <label for="q3o3"><input type="checkbox" name="q3[]" id="q3o3" value="o3" <?php foreach($_POST["q3"] as $ans){if ($ans == "o3"){echo "checked";}} ?>>&nbsp Option 3</label><br/>
    <label for="q3o4"><input type="checkbox" name="q3[]" id="q3o4" value="o4" <?php foreach($_POST["q3"] as $ans){if ($ans == "o4"){echo "checked";}} ?>>&nbsp Option 4</label><br/>
  </div>


<div class="question" id="submitButton">
  <input id="submit" type="submit" value="Submit Quiz">
</div>
</form>


<?php
    include "assets/includes/footer.php";
?>
