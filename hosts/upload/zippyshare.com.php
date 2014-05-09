<?php
######## Account Info ########
$upload_acc['zippyshare_com']['user'] = ''; //Set your userid/alias
$upload_acc['zippyshare_com']['pass'] = ''; //Set your password
########################

$_GET['proxy'] = isset($_GET['proxy']) ? $_GET['proxy'] : '';
$not_done = true;
$continue_up = false;

if ($upload_acc['zippyshare_com']['user'] && $upload_acc['zippyshare_com']['pass']) {
	$_REQUEST['up_login'] = $upload_acc['zippyshare_com']['user'];
	$_REQUEST['up_pass'] = $upload_acc['zippyshare_com']['pass'];
	$_REQUEST['action'] = 'FORM';
	echo "<b><center>Using Default Login.</center></b>\n";
}

if (!empty($_REQUEST['action']) && $_REQUEST['action'] == 'FORM') $continue_up = true;
else {
	echo "<table border='0' style='width:270px;' cellspacing='0' align='center'>
	<form method='POST'>
	<input type='hidden' name='action' value='FORM' />
	<tr><td style='white-space:nowrap;'>&nbsp;用户名*</td><td>&nbsp;<input type='text' name='up_login' value='' style='width:160px;' /></td></tr>
	<tr><td style='white-space:nowrap;'>&nbsp;密码*</td><td>&nbsp;<input type='password' name='up_pass' value='' style='width:160px;' /></td></tr>\n";
	echo "<tr><td colspan='2' align='center'><br /><input type='submit' value='上传' /></td></tr>\n";
	echo "<tr><td colspan='2' align='center'><small>*您可以在 <b>".basename(__FILE__)."</b> 中设置默认帐号</small></td></tr>\n";
	echo "</form>\n</table>\n";
}

if ($continue_up) {
	$not_done = false;
	$domain = 'zippyshare.com';
	$referer = "http://$domain/";

	// Login
	echo "<table style='width:600px;margin:auto;'>\n<tr><td align='center'>\n<div id='login' width='100%' align='center'>登录到zippyshare.com</div>\n";

	$cookie = array('ziplocale' => 'en');
	if (!empty($_REQUEST['up_login']) && !empty($_REQUEST['up_pass'])) {
		$post = array();
		$post['login'] = $_REQUEST['up_login'];
		$post['pass'] = $_REQUEST['up_pass'];
		$post['remember'] = 'on';

		$page = geturl($domain, 80, '/services/login', $referer, $cookie, $post, 0, $_GET['proxy'], $pauth);is_page($page);
		is_present($page, '?invalid=1', 'Login failed: User/Password incorrect.');
		$cookie = GetCookiesArr($page, $cookie);
		if (empty($cookie['zipname']) && empty($cookie['ziphash'])) html_error('Error: Login cookies not found.');
		$login = true;
	} else {
		echo "<b><center>Login not found or empty, using non member upload.</center></b>\n";
		$login = false;
	}

	// 验证上传用户名
	echo "<script type='text/javascript'>document.getElementById('login').style.display='none';</script>\n<div id='info' width='100%' align='center'>验证上传用户名</div>\n";

	$page = geturl($domain, 80, '/', $referer, $cookie, 0, 0, $_GET['proxy'], $pauth);is_page($page);

	if (!preg_match('@\'uploader\'[\s\t]*:[\s\t]*[\'|\"](https?://www\d+\.zippyshare\.com/[^\r\n\'\"\s\t<>]+)[\'|\"]@i', $page, $up)) html_error('Error: Cannot find upload server.', 0);

	$post = array();
	$post['Filename'] = $lname;
	$post['uploadify'] = 'true';
	$post['embPlayerValues'] = (!empty($cookie['embed-player-values']) ? $cookie['embed-player-values'] : 'null');
	if ($login) {
		$post['zipname'] = $cookie['zipname'];
		$post['ziphash'] = $cookie['ziphash'];
	}
	$post['Upload'] = 'Submit Query';

	$up_url = $up[1];

	// Uploading
	echo "<script type='text/javascript'>document.getElementById('info').style.display='none';</script>\n";

	$url = parse_url($up_url);
	$upfiles = upfile($url['host'], defport($url), $url['path'].(!empty($url['query']) ? '?'.$url['query'] : ''), $referer, $cookie, $post, $lfile, $lname, 'Filedata', '', $_GET['proxy'], $pauth, 'Shockwave Flash');

	// Upload Finished
	echo "<script type='text/javascript'>document.getElementById('progressblock').style.display='none';</script>\n";

	is_page($upfiles);

	if (preg_match('@https?://www\d*\.zippyshare\.com/v/\d+/file\.html@i', $upfiles, $link)) $download_link = $link[0];
	else html_error('Download link not found.', 0);

}

//[17-5-2013] Written by Th3-822.

?>