#service nginx stop
#certbot certonly --standalone --preferred-challenges http -d $1
#service nginx start
certbot --nginx --noninteractive -d $1

