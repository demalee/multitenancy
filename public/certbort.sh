service nginx stop
certbot certonly --standalone --preferred-challenges tls-sni -d $1
service nginx start
