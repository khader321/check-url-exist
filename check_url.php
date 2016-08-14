<?php
if(isset($_POST['submit_url']))
{
 $url = $_POST['url'];
 $url_headers = @get_headers($url);
 if(strpos($url_headers[0],'200'))
 {
  $exist = "URL Exist";
 }
 else 
 {
  $exist = "URL Does Not Exist";
 }
}
?>
