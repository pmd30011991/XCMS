<?php
	/* Load */
	require_once('load.php');
    $auth = Authorize::getInstance();
    if($auth->isLogin())
        
?>
<h1>Login</h1>
<form method="post">
    <input type="text" name="username" placeholder="Type username here" />
    <input type="password" name="password" placeholder="Type password here" />
     <input type="submit"  value="Login" />
</form>