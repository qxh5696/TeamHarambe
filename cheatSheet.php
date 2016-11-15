<?php
	include "assets/includes/page_start.php";
    $page_title = "Cheat Sheet";
    $active_page = "Cheat Sheet";
    include PATH_INC . "header.php";
?>

	<div class="container">
		<h1 class="lead">Cheat Sheet/ Quick reference</h1>
		<dl>
			<dt>Literal Characters</dt>
			<dd>A single literal character, such as ‘a’ or ‘5’</dd>
			<dd>Matches the first occurrence of that character in a string unless told otherwise</dd>

			<dt>Character Sets</dt>
			<dd>Matches only one character out of a set of characters</dd>
			<dd>To match a ‘c’ or an ‘s’, you use ‘[cs]’ to match words, such as ‘license’ (li[cs]en[cs]e). It helps finding words that might be commonly misspelled. </dd>
			<dd>You can use a hyphen ‘-’ to specify a range of characters in a character class, such as ‘[0-9]’</dd>
			<dd>You can use more than 1 range in a character class. ‘[0-9a-zA-Z]’</dd>
			<dd>You can use a caret ‘^’ after the opening square bracket to negate the character class</dd>
			<dd>
				<ul>
					<li>It matches for any character not in the character class, 
					including whitespace unless otherwise specified</li>
					<li>In the example, ‘p[^5]’, it will find any character that matches what is not in the character class.
					 So it will find “pie”, but not “woop” (no character after the ‘p’ in “woop”)</li>
				</ul>
			</dd>

			<dt>Shorthand Character Classes</dt>
			<dd>‘/d’ is used to match any character that is a digit</dd>
			<dd>‘/w’ is used to match any “word character” (alphanumeric and underscore)</dd>
			<dd>‘/s’ is used to match any whitespace characters including tabs and line breaks</dd>
			<dd>The actual characters matched depends on the software, but usually include non-English letters and numbers</dd>

			<dt>The dot</dt>
			<dd>The dot ‘.’ is used to match any single character except for whitespace</dd>
			<dd>‘d.g’ will match “dog”, “dig”, ‘d%g’</dd>

			<dt>Anchors</dt>
			<dd>Anchors do not match any character, but match a position instead</dd>
			<dd>‘^’ matches at the start of a string</dd>
			<dd>‘$’ matches at the end of the string</dd>

			<dt>Alternation</dt>
			<dd>Alternation is the RegEx equivalent of “or”</dd>
			<dd>Using ‘pie|people’ on “people buy a pizza pie” will match “people”. Using it again will match “pie”.</dd>
			<dd>You can have as many alternations as you want ‘pie|people|squid|964’</dd>
			<dd>Alternation has the lowest precedence of all RegEx operations. It is common to have to group alternation uses with other operators</dd>

			<dt>Repitition</dt>
			<dd>Regular
				<ul>
					<li>‘?’ marks the preceding token in a regular expression as optional</li>
					<li>‘*’ tells the engine to attempt to match the preceding token 0 or more times</li>
					<li>‘+’ tells the engine to attempt to match the preceding token 1 or more times</li>
					<li>‘{ }’ specifies a specific amount of repetition</li>
				</ul>
			</dd>

			<dd>Greedy and Lazy reptition
				<ul>
					<li>Repetition operators or quantifiers are greedy and expand the match as far as they can</li>
					<li>“<.+>” will match “<\EM>hi<\EM>”</li>
					<li>Placing a question mark after the quantifier makes it lazy (“<.+?>” will match “<\EM>”)</li>
				</ul>
			</dd>

			<dt>Grouping/Capturing</dt>
			<dd>Place parentheses around multiple tokens to group them together
				<ul>
					<li>“Set(Value)?” Matches “Set” or “SetValue”</li>
				</ul>
			</dd>

			<dt>Backreferences</dt>
			<dd>You can use backreferences to match the same text that was matched by the capturing group
				<ul>
					<li>“([abc])=\1” matches “a=a”, “b=b”, “c=c”. Nothing else</li>
				</ul>
			</dd>
			<dd>You can instead use names to keep track of groups using “< >”
			<ul>
				<li>“(?<\group1>[abc])=\k<\group1>” is the same as “([abc]\1</li>
			</ul>
			</dd>	

			<dt></dt>





	</div>

<?php 
    include "assets/includes/footer.php";
?>