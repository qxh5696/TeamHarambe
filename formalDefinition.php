<?php
	include "assets/includes/page_start.php";
    $page_title = "Formal Definition";
    $active_page = "Formal Definition";
    include PATH_INC . "header.php";
?>

<div class="container">
	<h1 class="lead">Formal Definition</h1>

	<p>Regular expressions are defined formally under these conditions: 

		R is a regular expression if:
	</p>

	<ul>
		<li>R equals ∅</li>
		<li>R equals ε (representing the language { ε })</li>
		<li>R equals α, for each α ∈ Σ</li>
		<li>R equals R1 ∪ R2 where R1 and R2 are regular expressions</li>
		<li>(R1+R2) where R1 and R2 are regular expressions (and finally)</li>
		<li>(R1)* where R1 is a regular expression.</li>
	</ul>	


	<p>
		As an example, if we have the statement {0}{1}{1} which is expressed in Language Set Notation, we will have 001 in Regular Expression notation. Noted previously, Regular expressions can be expressed by using set notation operations, following an order precedence: Kleene star having the highest, followed by concatenation and lastly, union. Note again that a regular expression is not a language, just a means of describing a language. 
	</p>

	<p>
		

	</p>
</div>






<?php 
    include "assets/includes/footer.php";
?>