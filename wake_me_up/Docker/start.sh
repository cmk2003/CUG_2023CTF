#!/bin/bash


echo $FLAG > /flag

export FLAG=no_flag

FLAG=no_flag
rm /var/log/apache2/access.log             //防止非预期
rm /var/log/apache2/error.log              //防止非预期
apache2-foreground