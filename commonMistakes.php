<?php
	include "assets/includes/page_start.php";
    $page_title = "Common Mistakes";
    $active_page = "Common Mistakes";
    include PATH_INC . "header.php";
?>

	<div class="container">
		<h1 class="lead"> Common Mistakes in Regular Expressions</h1>

		<h2>Common Errors in regular expressions</h2>
		<dt>Spaces</dt>
		<dd>
			<ul>
				<li>Spaces can be very frustrating in regular expressions because you can accidentally add a space you don't mean to.</li>
				<li>As an example, if you are matching for a phone number and you look for "585 469 2458" vs "585  469 2458", notcie there is one more space between the area code and the first distinct digits. At a quick glance you might not notice a problem and are wondering what's wrong with your phone number.</li>
			</ul>
		</dd>
		<dt>Character escaping</dt>
		<dd>
			<ul>
				<li>Remeber to escape special characters such as quotation marks (" "), parentheses ( "()" ), square brackets ( "[ ] " ) and other fancy characters. This will vary from language to language so remember to read your language's documentation.</li>
			</ul>
		</dd>
		<dt>Correct Language syntax</dt>
		<dd>Remeber that using regular expressions in different languages call for different styles. As an example, for javascript you must enclose your regular expressions between 2 backslashes ("\"). </dd>
		<dd>Again, it comes back to making sure you're using the correct syntax for your language. </dd>

		<dt>Matching substrings vs. entire lines</dt>
		<dd>Remember to use the special characters "^" and "$" to make sure that an <strong>entire line</strong> matches a regular expression vs just a substring.</dd>

		<dt>The power of the kleene star</dt>
		<dd>Remember that the kleene star ("*") denotes "zero or more occurrences". So saying something like (foo|bar)* will match <u>everyline</u> </dd>

		<dt>Over specifying</dt>
		<dd>
			Remember not to bite off more than you can chew, overspecification is a factor that can slow down even the most
			powerful of regular expressions. The perfect regular expression will give a good enough length such that the processor won't have too much work BUT STILL be able to find everything you're looking for.
		</dd>




	</div>

<?php 
    include "assets/includes/footer.php";
?>