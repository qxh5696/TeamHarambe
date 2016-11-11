<?php
	include "assets/includes/page_start.php";
    $page_title = "History of Reg. Ex";
    $active_page = "History";
    include PATH_INC . "header.php";
?>


	<div class="container">

		<h1 class="lead">History of Regular Expressions</h1>

		<p class="well well-sm">
			The study of regular expressions began when Stephen Kleene described regular languages outside of set notation. Being introduced by Stephen Kleene, they made their first debut in the realm of theoretical computer science and automata theory.
		</p>

		<p class="well well-sm">
			Regular expressions are often referenced through Kleene’s theorem, which states that Regular Expressions and Finite Automata are equivalent (with respect to the languages they describe/accept). Regular expressions were popular throughout 1968 in two cases: pattern matching and text editing. 
		</p>

		<p class="well well-sm">
			The first appearances of regular expressions in program form were when Ken Thompson built Kleene’s notation into an editor known as QED as a means of matching patterns in text files (Thompson, Kernighan). He increased the speed of the compilation of regular expressions by using what’s known as “Just in time compilation”, also known as dynamic translation which is execution done at run-time. This was later added to Unix leading to the popular unix search tool grep.
		</p>

		<p class="well well-sm">
			This eventually led to the lexical analysis component of compilers. Many variations of these original forms of regular expressions were used in Unix programs at Bell Labs in the 1970s. Regular expressions were subsequently adopted by a wide range of programs and were then standardized in 1992 following POSIX. In the 1980s, more advanced forms of regular expressions began with the Language Perl.
		</p>

		<p class="well well-sm">
			The use of regular expressions in structured information standards for document and database modeling started in the 1960s and expanded in the 1980s when industry standards like the International Organization of Standardization Standard General Markup Language (ISO SGML) consolidated. 
		</p>

		<p class="well well-sm">
			Starting in 1997, Philip Hazel developed the Perl compatible regular language expression, which attempts to mimic Perl’s regular expression functionality and is used by modern tools including PHP and the Apache HTTP Server. 
		</p>

		<p class="well well-sm">
			Today, Regular Expressions are widely supported in programming languages, text processing programs, advanced text editors, and much more. Regular expression support comes standard in many programming language libraries such as Python and Java, which leads to the next topic of regular expressions in programming. 
		</p>
	</div>
	
	



<?php 
    include "assets/includes/footer.php";
?>  