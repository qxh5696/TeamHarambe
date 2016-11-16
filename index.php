<?php
    include "assets/includes/page_start.php";
    $page_title = "Home Page";
    $active_page = "home";
    include PATH_INC . "header.php";
?>

<h2>Welcome to RegExplain!</h2>
<p>RegExplain is a comprehensive website to provide you with a basic understanding of RegEx and the ability to integrate it into your site.</p>
<br />
<p><strong>Confused about RegEx?</strong> RegEx is short for regular expression. It's a special text string for describing a search pattern. It may sound basic, but regular expressions are very powerful when used correctly. For example:</p>
<code>\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\b</code>
</p>This is an example of a regular expression string. This specific strings allows you to search for any email address within your text, code, or database. While this may look confusing now, RegExplain will teach and help you become experience in no time.</p>

<p><a href="#">Get started now!</a></p>

<?php 
    include PATH_INC . "footer.php";
?>       
