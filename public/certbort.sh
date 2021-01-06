#service nginx stop
#find / -type f -name ".certbot.lock" exec rm {} \
certbot certonly --nginx  --preferred-challenges http  -d $1
#service nginx start
