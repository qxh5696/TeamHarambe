<?php
	include "assets/includes/page_start.php";
    $page_title = "Cheat Sheet";
    $active_page = "Cheat Sheet";
    include PATH_INC . "header.php";
?>

	<div class="container">
		<h1 class="lead">Reg Ex. Best Practices and Uses</h1>

		<h2>When should I use a regular expression?</h2>

		<p> Regular expressions are generally used for input that has no consistent form or variable input, i.e, paragraph 
		forms, essays, the like. You can also use regular expressions for input validation on form fields on websites, i.e 
		making sure a phone number matches an expected format or that emails aren't just a random string of characters. </p>	

		<h2>Are some regular expressions better than others?</h2>

		<p>The way a regular expression is specified is very important with regards to how the expression is processed. If you
		 write an ambiguous regular expressions that can capture and match a lot of results, it will take longer for your system 
		 that is processing the expression to return results. A good rule of thumb is that usually the longer the expression, 
		 the better it is it will be more tightly bound to what you're looking for, easing the number of results the system has to return. </p>

		<h2>Regular expressions in practice</h2>


		<p>
			Since we are able to relate Regular Expressions to other theory concepts such as Deterministic and Nondeterministic
			 finite automata, we can incorporate that thinking into practical Computer Science applications. As an example, the 
			 Microsoft .Net framework remarks on its incorporation of regular expressions in their matching behavior: “The .NET
			  Framework is a backtracking regular expression matcher that incorporates traditional Nondeterministic Finite 
			  Automata (NFA) engine such as that used by Perl, Python, Emacs, and Tcl, [distinguishing] it from faster, but more
			   limited, pure regular expression engines such as those found in awk, egrep, or lex” (Microsoft).
		</p>

		<p>
			The NFA implementation is a bit exhaustive, running a “Greedy” match backtracking algorithm, testing all possible 
			expansions of a regular expression in a specific order and accepting the first match. Because it backtracks, it can 
			visit the same state multiple times if the state is arrived at over different paths. This makes it a bit slower 
			since it repeats. The DFA implementation, just to compare, runs in linear time because it doesn’t require 
			backtracking, therefore, never needing to test the same character more than once (Microsoft). 
		</p>
	</div>
	

		
<?php 
    include "assets/includes/footer.php";
?>