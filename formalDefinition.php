<?php
	include "assets/includes/page_start.php";
    $page_title = "History of Reg. Ex";
    $active_page = "History";
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
</div>




<?php 
    include "assets/includes/footer.php";
?>