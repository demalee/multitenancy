#!/bin/sh
SED=`which sed`
CURRENT_DIR=`dirname $0`

echo " $0,   $1,   $2,"

# check the domain is valid!
#PATTERN="^(([a-zA-Z]|[a-zA-Z][a-zA-Z0-9\-]*[a-zA-Z0-9])\.)*([A-Za-z]|[A-Za-z][A-Za-z0-9\-]*[A-Za-z0-9])$";
#if [[ "$1" =~ $PATTERN ]]; then
#	DOMAIN=`echo $1 | tr '[A-Z]' '[a-z]'`
#	echo "Creating hosting for:" $DOMAIN
#
#else
#	echo "invalid domain name"
#	exit 1
#fi

CONFIG=$CURRENT_DIR/$1
cp $CURRENT_DIR/template.stub $CONFIG
$SED -i "s/{{DOMAIN}}/$1/g" $CONFIG
$SED -i "s/{{PUBLIC_FOLDER}}/$2/g" $CONFIG

mv  $CONFIG /etc/nginx/sites-enabled/
service nginx restart
echo "done"
