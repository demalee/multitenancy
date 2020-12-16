#!/bin/sh

while true;
do
  ping -c1 $1
  if [ $? -eq 0 ]
  then
    echo "success"
    exit 0
    else
        echo "fail"
	    exit 1
  fi
done
