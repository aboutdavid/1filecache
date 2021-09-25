# 1filecache
1 file php caching system for all of your projects

It's very simple (and possibly broken)

```php
// this should be at the top of your script (well, at least before any output is displayed to the user)
require 'cache.php';
$dirname = "./cache"; // folder where the cache is stored
$cachetime = 900; // How long the cache should store stuff (in seconds)
$cache = new 1filecache(); // load the cache file
$cache->loadCache($dirname, $cachetime)
// place your script here
// ... insert html and php content here
// before the script ends
$cache->saveCache($dirname)
```

It should work in PHP 5, however, was tested on PHP 7

This is really the first time I've released code for PHP, so it's kind of bad lol
