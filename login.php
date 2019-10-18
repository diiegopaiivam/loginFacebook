<?php
require 'fb.php';

$helper = $fb->getRedirectLoginHelper();

$permissao = array('email');

$loginurl = $helper->getLoginUrl('http://localhost:8000/callback.php', $permissao);

?>

<a href="<?php echo htmlspecialchars($loginurl);?>">Login Facebook</a>