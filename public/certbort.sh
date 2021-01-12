#!/bin/bash
if [ "$(whoami)" != "root" ]
then
	echo  "d^fSPWn'!tB2GXB." | sudo -S su -c "$0"
#sudo service nginx stop
#sudo certbot certonly --standalone --preferred-challenges http -d $1
#sudo service nginx start
sudo certbot --nginx --noninteractive --redirect  -d $1

  exit
else
#sudo service nginx stop
#sudo certbot certonly --standalone --preferred-challenges http -d $1
#sudo service nginx start
sudo certbot --nginx  --noninteractive --redirect -d $1

fi
