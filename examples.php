<?php
	include "assets/includes/page_start.php";
    $page_title = "Examples";
    $active_page = "Examples";
    include PATH_INC . "header.php";
?>

<div class="container">
	<h1 class="lead">Regular Expression Examples</h1>

	<p>These are base examples, they are not favored towards any language so that you can copy them and use them in whatever 
	language you need the regular expression in appropriately. </p>

	<h2>Finding a phone number (American):</h2>
	<p class="well well-sm">
		^[2-9]\d{2}-\d{3}-\d{4}$
	</p>
	<h2>Finding an email (overly simple):</h2>
	<p class="well well-sm">
		^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$
	</p>

	<h2>Dates</h2>
	<div class="well well-sm">
		<p>
			(^|\s|\()((([1-9]){1}|([0][1-9]){1}|([1][012]){1}){1}[\/-]((2[0-9]){1}|(3[01]){1}|([
			01][1-9]){1}|([1-9]){1}){1}[\/-](((19|20)([0-9][0-9]){1}|([0-9][0-9]){1})){1}(([\s|\)|:])|(^|\s|\()((([0-9]){1}|([
			0][1-9]){1}|([1][012]){1}){1}[\/-](([11-31]){1}|([01][1-9]){1}|([1-9]){1}){1}[\/-](((19|20)([0-9][0-9]){1}|([0-9][
			0-9]){1})){1}(([\s|\)|:|$|\&gt;])){1}){1}){1}){1}
		</p>	
		<p>This regular expression will match the following formats: 01/01/2001 | 01-01-2001: | (1-1-01)</p>
	</div>
	

	<h2>Time</h2>
	<div class="well well-sm">
		<p>^([0-1][0-9]|[2][0-3]):([0-5][0-9])$</p>
		<p>This expression will match the following: 02:04 | 16:56 | 23:59</p>
	</div>

	<h2>URL Verification</h2>
	<div class="well well-sm">
		<p>^http\://[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(/\S*)?$</p>
		<p>This regular expression will match the following: http://psychopop.org | http://www.edsroom.com/newUser.asp | http://unpleasant.jarrin.net/markov/inde</p>
	</div>

	<h2>Zip codes (and canadian postal codes)</h2>
	<div class="well well-sm">
		<p>^((\d{5}-\d{4})|(\d{5})|([AaBbCcEeGgHhJjKkLlMmNnPpRrSsTtVvXxYy]\d[A-Za-z]\s?\d[A-Za-z]\d))$</p>
		<p>This regular expressoin will match the following: 00501 | 84118-3423 | n3a 3B7</p>
	</div>

	<h2>Money</h2>
	<div class="well well-sm">
		<p>^([1-9]{1}[\d]{0,2}(\,[\d]{3})*(\.[\d]{0,2})?|[1-9]{1}[\d]{0,}(\.[\d]{0,2})?|0(\.[\d]{0,2})?|(\.[\d]{1,2})?)$</p>
		<p>This regular expression will match the following: 132,123,123.23 | 123456.23 | 0.23</p>
	</div>

	<h2>Addresses (simple)</h2>
	<div class="well well-sm">
		<p>^(\d{3,})\s?(\w{0,5})\s([a-zA-Z]{2,30})\s([a-zA-Z]{2,15})\.?\s?(\w{0,5})$</p>
		<p> This regular expression will match the following: 101 W Main St | 101 W Main St. N | 101 Main St N</p>

	</div>

	

</div>

<?php 
    include "assets/includes/footer.php";
?>