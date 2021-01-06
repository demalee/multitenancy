#service nginx stop
#<<<<<<< HEAD
#find / -type f -name ".certbot.lock" exec rm {} \
#certbot certonly --nginx  --preferred-challenges http  -d $1
#=======
#certbot certonly --standalone --preferred-challenges tls-sni -d $1
#>>>>>>> ab88236ef8a50686609566208d177b8123ae4959
#service nginx start
