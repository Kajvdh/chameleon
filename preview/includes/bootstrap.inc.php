<?php /**
            * Unreal Security - PHPMyLicense Check Class v2.5.0
            *
            * PHP version > 5
            *
            * LICENSE: This source file is subject to version 3.01 of the PHP license
            * that is available through the world-wide-web at the following URI:
            * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
            * the PHP License and are unable to obtain it through the web, please
            * send a note to license@php.net so we can mail you a copy immediately.
            *
            * @package    PHPMyLicense
            * @author     Giovanne Oliveira <jhollsantos@gmail.com>
            * @copyright  2009 - 2015 PHPMyLicense
            * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
            * @version    v3.0.0
            * @link       https://phpmylicense.com */
            
            $domain=$_SERVER['SERVER_NAME'];
            $product="40";
            $licenseServer = "https://license.chattersworld.nl/api/";

            $postvalue="domain=$domain&product=".urlencode($product);

            $ch = curl_init();
            curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $licenseServer);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postvalue);
            $result= json_decode(curl_exec($ch), true);
            curl_close($ch);

            if($result['status'] != 200) {
            $html = "<div align='center'>
    <table width='100%' border='0' style='padding:15px; border-color:#F00; border-style:solid; background-color:#FF6C70; font-family:Tahoma, Geneva, sans-serif; font-size:22px; color:white;'>

    <tr>

        <td><b>You don't have permission to use this product. The message from server is: <%returnmessage%> <br > Contact the product developer.</b></td >

    </tr>

    </table>

</div>";
            $search = '<%returnmessage%>';
            $replace = $result['message'];
            $html = str_replace($search, $replace, $html);


            die( $html );

            }
            ?>
<?php
/**
 * liverequest systeem
 * @author Prelution
 */


error_reporting(E_ALL);
ini_set("display_errors", 0);

$type = '';

if (!isset($_SESSION))
  {
    session_start();
  }

if(stristr($_SERVER['REQUEST_URI'], 'bootstrap.inc.php')){
	die("Whoat?! Hier mag jij niet in komen..");
}

require_once('config.inc.php');
require_once('classes/users.class.php');
require_once('classes/user.class.php');
require_once('classes/phpmailer.class.php');
require_once('classes/captcha.class.php');
require_once('classes/db.class.php');
require_once('classes/shoutcast.class.php');

$publickey = '6LcE4vkSAAAAALlOE7IKDQwCxNR7RWD3qSr7vzBd';
$privatekey = '6LcE4vkSAAAAAOw827non7BWRzf7Z4nzIVaddRMe';
$error = null;
$resp = null;


DB::Initialize($settings['db']);

if(Users::LoggedIn()) {
	$user = new User($_SESSION['id']);
	if($user->type == 1) {
		$type = 'dj';
		$query = DB::Query("SELECT id, radio, stream, port FROM stream_settings WHERE radio = " . DB::Escape($user->radio));
		if(DB::NumRows($query) == 1) {
			$streamInfo = DB::Fetch($query);
		}else{
			$streamInfo = array(
									'id' => '',
									'radio' => '',
									'stream' => '',
									'port' => '',
									);
		}
		$radio=new Shoutcast($streamInfo['stream'], $streamInfo['port']);
	}
	if($user->type == 2) {
		$type = 'radio';
		$query = DB::Query("SELECT id, radio, stream, port FROM stream_settings WHERE radio = " . DB::Escape($_SESSION['id']));
		if(DB::NumRows($query) == 1) {
			$streamInfo = DB::Fetch($query);
		}else{
			$streamInfo = array(
									'id' => '',
									'radio' => '',
									'stream' => '',
									'port' => '',
									
								);
		}
		$radio=new Shoutcast($streamInfo['stream'], $streamInfo['port']);
	}
	if($user->type == 3) {
		$type = 'admin';
	}
}