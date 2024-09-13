#!/bin/sh
sed -i "s/FLAGFLAGFLAG/$GZCTF_FLAG/" /var/www/html/index.php
export GZCTF_FLAG=""
