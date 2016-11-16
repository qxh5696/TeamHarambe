<?php
	include "assets/includes/page_start.php";
    $page_title = "Uses";
    $active_page = "uses";
    include PATH_INC . "header.php";
    
?>

<h1>CS/CS Theory</h1>

    <p>
        Since we are able to relate Regular Expressions to other theory concepts
        such as Deterministic and Nondeterministic finite automata, we can incorporate
        that thinking into practical Computer Science applications. As an example, the
        Microsoft .Net framework remarks on its incorporation of regular expressions in
        their matching behavior: “The .NET Framework is a backtracking regular expression
        matcher that incorporates traditional Nondeterministic Finite Automata (NFA) engine
        such as that used by Perl, Python, Emacs, and Tcl, [distinguishing] it from faster,
        but more limited, pure regular expression engines such as those found in awk, egrep,
        or lex” (Microsoft).
    </p>
    
    <br/>

    <p>
        The NFA implementation is a bit exhaustive, running a “Greedy” match
        backtracking algorithm, testing all possible expansions of a regular
        expression in a specific order and accepting the first match. Because
        it backtracks, it can visit the same state multiple times if the state
        is arrived at over different paths. This makes it a bit slower since it
        repeats. The DFA implementation, just to compare, runs in linear time
        because it doesn’t require backtracking, therefore, never needing to test
        the same character more than once (Microsoft). 
    </p>
    
    <br/>
    
    <p>
        Those are just the basics, sadly. To get into more of the programming side
        of things, it’s important to address meta-characters in systems like POSIX.
        This includes looking at characters like “.”, “[ ]”, “[^ ]”, “^”, “$”, “( )”,
        “\n”,  and “{ }”. From this point on, this paper will look at the applications
        of Regular Expressions in programming. 
    </p>
    
    <br/>
    
    <p>
        The following will look at the POSIX standard, Basic Regular Expression syntax,
        which requires the usage of the above meta-characters.
            <ul>
                <li>“.” Will match any single character. As an example, “a.c” matches “abc”. </li>
                <li>“[ ]” is the bracket expression. It will match a single character that is
                contained within the brackets. [abc] matches “a”, “b”, or “c”</li>
                <li>[a-z] specifies a range which matches any lowercase letter from
                “a” to “z”. It is noted that these statements can be combined to form
                a statement, such as, [abcx-z] which matches “a”, “b”, “c”, “x”, “y”,
                or “z”. This is true because the only character from “x” to “z” is “y”.
                The difference between a statement such as “[abc]” and “[^abc]” is that
                the latter will match with any character other than “a”, “b”, or “c”.
                Likewise, “[^a-z]” will match any character that is not lowercase from
                “a” to “z”. “^” matches the starting position within the string.
                In line-based tools, it matches the starting position of any line.
                “^abc” will match if that is the start of a line in a file. </li>
                <li>“$” is used to check for the end of the string.
                In a sample statement, “.*?the end$” will match with the statement
                “this is the end”. “( )” defines a marked subexpression. The string
                matched within the parentheses can be recalled later. “</li>
                <li>“A(nt|pple)” will capture the word “Apple” or “Ant”. “\n” matches with the nth
                marked subexpression matched, where n is a digit from 1 to 9. “{m,n}”
                matches the preceding element at least m and not more than n times.
                As a last example, “a{3,5}” matches only “aaa”, “aaaa”, and “aaaaa”.
                Testing regular expressions can be done at regexpal.com. Getting familiar
                with regular expressions will make programming with files easier and text
                recognition a less daunting task.</li>
                
            </ul>

    </p>

<?php 
    include PATH_INC . "footer.php";
?>       