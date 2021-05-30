<?php
class 1filecache {
$filecachepath = "$dirname/" . md5($_SERVER['REQUEST_URI']). ".cachefile";
    function loadCache($dirname, $seconds) {
        
if (file_exists($filecachepath)){
$cached=time()-filemtime($filecachepath);
$cached_date = date("l\, F jS\, Y \@ h:i:s A",filemtime($filecachepath)); // get the cache date
  if ($cached < $config->cachetime){
    echo "<!-- Serving file from cache. Cached on $cached_date -->";
    echo file_get_contents($filecachepath);
    die(); // It's cache, don't finish execution of the script
  };
};
ob_start();
    }
    function saveCache($dirname){
    $cachefile = fopen($filecachepath, "w");
  fwrite($cachefile, ob_get_contents());
  fclose($cachefile);
  ob_end_flush();
    };
};
