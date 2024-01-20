<?php shell_exec("cd /var/www/data/; git pull;");header("HTTP/1.1 303 See Other");header("Location: ."); ?>
