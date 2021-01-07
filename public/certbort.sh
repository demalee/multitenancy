#echo "d^fSPWn'!tB2GXB." | sudo -S


sudo su - <<EOF
service nginx stop
certbot certonly --standalone --preferred-challenges http -d $1
service nginx start
EOF
