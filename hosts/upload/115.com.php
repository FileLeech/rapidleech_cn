<?php

####### Account Info. ###########
$u115_login = ""; //Set you username
$u115_pass = ""; //Set your password
##############################

$not_done=true;
$continue_up=false;
if ($u115_login & $u115_pass)
    {
        $_REQUEST['my_login'] = $u115_login;
        $_REQUEST['my_pass'] = $u115_pass;
        $_REQUEST['action'] = "FORM";
        echo "<b><center>使用默认的用户名/密码。</center></b>\n";
    }

if ($_REQUEST['action'] == "FORM")
    $continue_up=true;
else{
?>
<table border=0 style="width:270px;" cellspacing=0 align=center>
<form method=post>
<input type=hidden name=action value='FORM' />
<tr><td nowrap>&nbsp;用户名*<td>&nbsp;<input type=text name=my_login value='' style="width:160px;" />&nbsp;</tr>
<tr><td nowrap>&nbsp;密码*<td>&nbsp;<input type=password name=my_pass value='' style="width:160px;" />&nbsp;</tr>
<tr><td colspan=2 align=center><input type=submit value='<?php echo lang(286); ?>' /></tr>
<tr><td colspan=2 align=center><small>*您可在<b><?php echo $page_upload["115.com"]; ?></b>中设置默认帐号</small></tr>
</table>
</form>
<?php
    }

if ($continue_up)
    {
        $not_done=false;
?>
<table width=600 align=center>
</td></tr>
<tr><td align=center>
<div id="login" width=100% align=center>登录到U.115.com</div>
<?php 
        $post['login[account]'] = $_REQUEST['my_login'];
        $post['login[passwd]'] = $_REQUEST['my_pass'];
        $post['back'] = "http://www.115.com";
        $post['goto'] = "http%3A%2F%2F115.com";

        $page = geturl("passport.115.com", 80, "/?action=login", 0, 0, $post);            
        is_page($page);
        $cookie1 = GetCookies($page);
        
      //  echo (" <div> Page : $page </div>");
        
        $errorcode =cut_str ($page , "name='error_code' value='","'");
      //  echo (" <div> errorcode : $errorcode </div>");
      
        if($errorcode)
        {
             html_error("登陆错误 - 请检查您的登录信息是否征正确！", 0);
        } 
      
      //  $linkaction =cut_str ($page ,' Location: ','');
      //  echo (" <div> linkaction : $linkaction </div>");
      //  
      //  if(!$linkaction)
      //  {
      //       html_error("Error logging in - are your logins correct!", 0);
      //  } 
      //  $Url = parse_url($linkaction);
      //  $page = geturl($Url["host"], $Url["port"] ? $Url["port"] : 80, $Url["path"].($Url["query"] ? "?".$Url["query"] : ""), 0, $cookie1, 0, 0, $_GET["proxy"],$pauth);    
      //  is_page($page);
      //  $cookie = GetCookies($page);
?>
<script>document.getElementById('login').style.display='none';</script>
<div id="info" width=100% align="center">验证上传用户名</div>

<?php 
        $Url = parse_url("http://115.com/");
        $page = geturl($Url["host"], $Url["port"] ? $Url["port"] : 80, $Url["path"].($Url["query"] ? "?".$Url["query"] : ""),"http://www.115.com/", $cookie1, 0, 0, $_GET["proxy"],$pauth);    
        
        $cookie = GetCookies($page);
        
        $Upload_url=cut_str ($page ,'"aid":1,"upload_url":"','",');
        $Upload_url=str_replace('\/','/',$Upload_url);
        
       // echo (" <div> Upload_url : $Upload_url </div>");
        
        $cookie_up =cut_str ($page ,"var USER_COOKIE = '","';");
        
        if(!$Upload_url)
        {
            html_error($Upload_url, 0);
        }
?>
<script>document.getElementById('info').style.display='none';</script>
<?php 
        $url = parse_url ($Upload_url); 
        //$url= parse_url("http://up.u.115.com/upload");
        $fpost = array();
        $fpost['Filename'] = $lname;
        $fpost['cookie'] = $cookie_up;
        $fpost['aid'] = '1';
        $agent='Shockwave Flash';
        $upfiles = upfile($url["host"],$url["port"] ? $url["port"] : 80, $url["path"].($url["query"] ? "?".$url["query"] : ""),"http://u.115.com/?ct=index&ac=my", $cookie, $fpost, $lfile, $lname, "Filedata" );
?>
<script>document.getElementById('progressblock').style.display='none';</script>
<?php
        //,"pick_code":"e65lenbo","ico":"
        $pickcode =cut_str ($upfiles ,'"pick_code":"','","ico"');
        //echo (" <div> pickcode : $pickcode </div>");
        //echo (" <div> upfiles : $upfiles  </div>");
        if(!$pickcode)
        {
             html_error("已完成，请转到您的账户以查看下载链接。", 0);
        }
        else
        {
            echo (" <div> Note: You required login before you can see it. </div>");
            $download_link = "http://115.com/file/$pickcode";
        }
        // echo (" <div> Mark </div>");
    }
?>