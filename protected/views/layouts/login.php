<?php //if cookie not available(not logged in) show form ?>
<form name='login_form' method='POST' action='#gosomewhere'>
<input type='text' name='username'><br>
<input type='password' name='password'><br>
<input type='button' value='Login' onclick='doLogin()'>
</form>
<?php //if looged in, show user panel?>