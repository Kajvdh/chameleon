<?php
/*

Now Playing PHP script for SHOUTcast

This script is (C) MixStream.net 2008

Feel free to modify this free script
in any other way to suit your needs.

Version: v1.1

*/


//sanitize GET vars start
$accepted_get_vals=array('the_stream','the_optional_history_path');
foreach ($_GET as $key => $value) {
	if (!in_array($key,$accepted_get_vals)) {
		$_GET[$key]=preg_replace('/[^a-z0-9]+/i', '', $_GET[$key]);
		unset($_GET[$key]);
	}
}
if (isset($_GET['the_stream']) && $_GET['the_stream']!='') {
		$_GET['the_stream']=preg_replace('/[^a-z0-9-:\/.;]+/i', '', $_GET['the_stream']);
}
if (isset($_GET['the_optional_history_path']) && $_GET['the_optional_history_path']!='') {
		$_GET['the_optional_history_path']=preg_replace('/[^a-z0-9-:\/.;]+/i', '', $_GET['the_optional_history_path']);
}
//sanitize GET vars end


$songtitle="";
if (!isset($_GET['the_stream'])) {
				//nothing
				die();
} else {
					if (isset($_GET['the_optional_history_path']) && $_GET['the_optional_history_path']!='') {
										$ch = curl_init();
								    curl_setopt($ch, CURLOPT_URL, $_GET['the_optional_history_path']);
								    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
								    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

										curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
										curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

								    if(curl_exec($ch) === FALSE) {
								         echo "Error: " . curl_error($ch);
								    } else {
								         //echo curl_exec($ch);
												 $string=curl_exec($ch);
												 $songtitle=$string;
								    }

								    curl_close($ch);
					} else {
										$the_link=trim($_GET['the_stream']);
										//ShoutCast V>=2
										$fp = fopen($_GET['the_stream'],'r');
										$info = '';
										if($fp) {
												while(!feof($fp)) {
													 $info .= fread($fp,1024);
												}
										}
										fclose($fp);
										if (!$fp) { //ShoutCast V<2
														$t = parse_url($the_link);
														if (!array_key_exists('host', $t)) {
												        $t['host']='';
												    }
														$ip=$t['host'];

														if (!array_key_exists('port', $t)) {
												        $t['port']=80;
												    }
														$port=$t['port'];

														if (!array_key_exists('scheme', $t)) {
												        $t['scheme']='http';
												    }

														if ($t['scheme']=='https') {
																$fp = fsockopen('ssl://'. $t['host'], $t['port']);
														} else {
																$fp = fsockopen($t['host'], $t['port'], $errno, $errstr, 5);
														}
														if (!$fp) {
																$songtitle="reading history..."; // sever is offline
														} else {
																fputs($fp, "GET /played.html HTTP/1.0\r\nUser-Agent: Mozilla\r\n\r\n");
																while (!feof($fp)) {
																	$info = fgets($fp);
																}
														}
										}
										$songtitle=$info;
					}

					if (trim($songtitle)=='') {
							$songtitle="The song title is not available";
					}

					echo $songtitle;
}
?>
