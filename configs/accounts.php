<?php
if (!defined('RAPIDLEECH')) { require_once("index.html"); exit; }
$premium_acc = array();

### �Ƴ���ͷ��'//'�����������û�����������ʹ�ø߼��ʺ�###
//$premium_acc["rapidshare_com"] = array('user' => 'your username', 'pass' => 'your password');
// ֻʹ���ڶ��rapidshare�߼��ʺ� - ���������һ��ʹ�ö���ʺţ���ע�͵�����һ��
//$premium_acc["rapidshare_com"] = array(array('user' => 'your username1', 'pass' => 'your password1'),array('user' => 'your username2', 'pass' => 'your password2'),array('user' => 'your username3', 'pass' => 'your password3'));
//$premium_acc["netload_in"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["cramit_in"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["megashare_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["gigasize_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["share-online_biz"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["megashares_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["uploaded_net"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["filefactory_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["filedude_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["sendspace_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["depositfiles_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["crocko_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["hotfile_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["filecloud_io"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["uploading_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["ugotfile_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["freakshare_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["oron_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["movshare_net"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["veehd_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["hellshare_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["bitshare_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["mediafire_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["uploadstation_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["turbobit_net"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["4shared_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["filefat_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["filejungle_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["youtube_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["filesmonster_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["letitbit_net"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["filedino_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["filepost_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["fileape_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["filesflash_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["extabit_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["netuploaded_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["furk_net"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["bayfiles_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["jumbofiles_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["fileserving_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["file4sharing_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["bulletupload_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["speedyshare_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc["filegaze_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc ["necroupload_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc ["filemates_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc ["luckyshare_net"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc ["cyberlocker_ch"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc ["nowvideo_eu"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc ["upstore_net"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc ["ex-load_com"] = array('user' => 'your username', 'pass' => 'your password');
//$premium_acc ["datafile_com"] = array('user' => 'your username', 'pass' => 'your password');

###�߼��ʺ�cookie���ã�������Ѿ���������һ���߼��ʺ��벻Ҫʹ�����
//$premium_acc["hotfile_com"] = array('cookie' => 'your premium cookie');
//$premium_acc["rapidshare_com"] = array('cookie' => 'your premium cookie');
//$premium_acc["uploaded_net"] = array('cookie' => 'your premium cookie');
//$premium_acc["uploading_com"] = array('cookie' => 'your premium cookie');
//$premium_acc["netload_in"] = array('cookie' => 'your premium cookie');

###�߼��ʺ��ܳ����ã�������Ѿ���������һ���߼��ʺ��벻Ҫʹ�����
//$premium_acc["letitbit_net"] = array('pass' => 'your password');
//$premium_acc["vip_file_com"] = array('pass' => 'your password');
//$premium_acc["shareflare_net"] = array('pass' => 'your password');
//$premium_acc["fileflyer_com"] = array('pass' => 'your password');
//$premium_acc["livefile_org"] = array('key' => 'your password');

###�������ظ߼��˻�###
//$premium_acc["au_dl"] = array('user' => 'your username', 'pass' => 'your password'); # �Ƴ���ͷ��'//'�����������û�����������ʹ��rapidshare.de�߼��ʺ�

?>