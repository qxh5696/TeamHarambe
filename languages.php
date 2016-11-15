<?php
	include "assets/includes/page_start.php";
    $page_title = "Languages/Language Support";
    $active_page = "Languages";
    include PATH_INC . "header.php";
?>

<div class="container">
	<h1 class="lead">Languages and Language Support</h1>

<p>Here are how regular expressions are handled in certain high-level languages: </p>

<h2>C/C++</h2>

<div class="well well-sm">
	<p>
		The ".h" file for regular expressions must be included: 
	</p>

	<span> <strong>#include &lt;regex.h&gt;</strong> </span>
	
	<p>Execution function for regular expressions: </p>

	<span>int regexec (const regex_t *restrict compiled, const char *restrict string, size_t nmatch, regmatch_t matchptr[restrict], int eflags)</span>

	<p>regexec returns 0 if the regular expression matches; otherwise, it returns a nonzero value. If you want to get information about what part of string actually matched the regular expression or its subexpressions, use the arguments matchptr and nmatch. Otherwise, pass 0 for nmatch, and NULL for matchptr.</p>

	<p>EX:  regcomp(&amp;regex, "<strong>INSERT REGULAR EXPRESSION HERE</strong>", 0);</p>

</div>

<h2>C#</h2>

<div class="well well-sm">

	<p> The following include must be present:</p>

	<span><strong> using System.Text.RegularExpressions;</strong> </span>

	<p>Execution of Regular Expressions: </p>

	<pre>
		MatchCollection mc = Regex.Matches(text, expr);
	</pre>
	

	<p>"mc" will be an array of matches so to display them you can use a "foreach" loop to display each one.</p>

</div>

<h2>Java</h2>
<div class="well well-sm">

	<p> The following imports must be present: </p>
	
	<span><strong>import java.util.regex.Matcher;</strong></span>
	<span><strong>import java.util.regex.Pattern; </strong> </span>

	<p>The execution of regular expressions is as follows:</p>

	<pre>
		String line = "This order was placed for QT3000! OK?";
     	String pattern = "(.*)(\\d+)(.*)";
     	Pattern r = Pattern.compile(pattern);
  	 	Matcher m = r.matcher(line);
     	"m" will have a group attribute that has each match in it. If there's a match it will say "m.m=find()" is true.
	</pre>

	
	
</div>

<h2>Javascript</h2>

<div class="well well-sm">
	<p>The syntax is as follows: <strong>/pattern/modifiers;</strong> </p>

	<p>The execution is as follows: </p>
	<pre>
		var str = "The best things in life are free";
		var patt = new RegExp("e");
		var res = patt.exec(str);
	</pre>
	
</div>

<h2>Perl</h2>

<div class="well well-sm">
	<p>There are 3 regular expressions operators in perl: </p>

	<ul>
		<li>Match Regular Expression - m//</li>
		<li>Substitute Regular Expression - s///</li>
		<li>Transliterate Regular Expression - tr///</li>
	</ul>

	<p>Perl is the mother of all languages for regular expressions</p>

	<p>my ($hours, $minutes, $seconds) = ($time =~ m/(\d+):(\d+):(\d+)/);</p>

	<p>Perl has so much built around regular expressions it would be unreasonable to try and include it in this webpage.
	See the following link for more information: <a href="http://www.tutorialspoint.com/perl/perl_regular_expression.htm" target=_blank>Perl Reg. Ex.</a></p>
	
</div>

<h2>PHP</h2>

<div class="well well-sm">

	<p>Here is a simple reg. ex. example in PHP:</p>

	<pre>
		$foods = array("pasta", "steak", "fish", "potatoes");	 
		$p_foods = preg_grep("/p(\w+)/", $foods);   
		print "Found food is " . $p_foods[0];
		print "Found food is " . $p_foods[1];
	</pre>
	
</div>

<h2>Python</h2>

<div class="well well-sm">

	<p> The following imports must be present: </p>
	
	<span> <strong>import re</strong> </span>

	<p>The main function to execute this rege ex. is: <strong> re.search(pattern, string, flags=0) </strong></p>
		
	<p>Here is an example of reg ex in Python: </p>	

	<pre>
		
		line = "Cats are smarter than dogs"

		matchObj = re.match( r'(.*) are (.*?) .*', line, re.M|re.I)

		if matchObj:
		   print "matchObj.group() : ", matchObj.group()
		   print "matchObj.group(1) : ", matchObj.group(1)
		   print "matchObj.group(2) : ", matchObj.group(2)
		else:
		   print "No match!!"

	</pre>


	
</div>

<h2>Ruby</h2>

<div class="well well-sm">
	
	<p>Like Javascript, you only have to specify the pattern like so: <strong>/pattern/</strong> </p>

	<p>A simple example: </p>

	<pre>
		line1 = "Cats are smarter than dogs";
		line2 = "Dogs also like meat";

		if ( line1 =~ /Cats(.*)/ )
		  puts "Line1 contains Cats"
		end
		if ( line2 =~ /Cats(.*)/ )
		  puts "Line2 contains  Dogs"
		end
	</pre>

</div>

<h2>SQL</h2>

<div class="well well-sm">

	<p>For SQL, you only have to use the keyword "REGEXP" in queries and you will be able to match regular expressions 
	accordingly</p>

	<p>Example: </p>
	<p>SELECT 'fofo' REGEXP '^fo';</p>

	<p>This will return all results from the table from a column that match the specified regExp.</p>
	
</div>

<h2>Swift</h2>

<div class="well well-sm">

	<p>The following import must be made: NSRegularExpression</p>

	<p>Because Swift is object oriented, an object must be created to search for patterns. </p>
	<p>Here's an example: </p>
	<pre>
		// (1):
		let pat = "\\b([a-z])\\.([a-z]{2,})@([a-z]+)\\.ac\\.uk\\b"
		// (2):
		let testStr = "x.wu@strath.ac.uk, ak123@hotmail.com     e1s59@oxford.ac.uk, ee123@cooleng.co.uk, a.khan@surrey.ac.uk"
		// (3):
		let regex = try! NSRegularExpression(pattern: pat, options: [])
		// (4):
		let matches = regex.matchesInString(testStr, options: [], range: NSRange(location: 0, length: testStr.characters.count))
	</pre>
	
</div>
</div>




<?php 
    include "assets/includes/footer.php";
?>