#!/bin/sh

#echo $1;
cd ../../
mkdir folder1
cp -a multitenancy/ folder1/
cd folder1
mv multitenancy $1
cd ..
mv  -v folder1/$1/ multitenancy/public/websites/
cd multitenancy/public/websites
cd $1/public
rm -rf websites
#cd ../../../../
#cp .env public/websites/$1
#cd multitenancy/public/websites/$1
#php artisan key:generate

cd /etc/nginx/
