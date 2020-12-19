#!/bin/bash
ping -c1 $1 | sed -nE 's/^PING[^(]+\(([^)]+)\).*/\1/p'
#if [ $OUT -eq "51.15.211.57" ]
#then
#echo "success"
#exit 0
#else
#    echo "fail"
#    exit 1
#fi
