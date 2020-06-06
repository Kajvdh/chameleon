 <?php
/*Now Playing PHP script for SHOUTcastThis script is (C) MixStream.net 2008
Feel free to modify this free script in any other way to suit your needs.
Version: v1.1*/
/* ----------- Server configuration ---------- */
$ip = "46.243.158.46";
$port = "8048";
/* ----- No need to edit below this line ----- */
/* ------------------------------------------- */
$fp = @fsockopen($ip,$port,$errno,$errstr,1);
if (!$fp)
{
   echo "Whe Are Getting DDoSSeD!! So no sound for this moment, blame the Turks!!";
   // Diaplays when sever is offline
}
else
{
   fputs($fp, "GET /7.html HTTP/1.0\r\nUser-Agent: Mozilla\r\n\r\n");
   while (!feof($fp))
   {
      $info = fgets($fp);
   }
   $info = str_replace('</body></html>', "", $info);
   $split = explode(',', $info);
   if (empty($split[6]) )
   {
      echo "The current song is not available";
      // Diaplays when sever is online but no song title
   }
   else
   {
      $title = str_replace('\'', '`', $split[6]);
      $title = str_replace(',', ' ', $title);
      echo "Nu speelt: $title";
      // Diaplays song
   }
}
?> 