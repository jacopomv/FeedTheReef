#!/bin/bash
sudo systemctl start httpd
sudo systemctl start php-fpm
sudo systemctl start postgresql
sudo stty -F /dev/ttyACM0 cs8 9600 ignbrk -brkint -imaxbel -opost -onlcr -isig -icanon -iexten -echo -echoe -echok -echoctl -echoke noflsh -ixon -crtscts
python /srv/FeedTheReef/PythonServer/feedMyReefServer.py

exit 0