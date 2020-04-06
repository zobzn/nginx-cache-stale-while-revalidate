#!/bin/bash

cd tmp

while true; do
    clear
    date
    echo ""
    # wget -E -H -k -p http://127.0.0.1:3000/
    # time curl -sSL -i -H "Accept-Encoding: gzip" -X GET http://127.0.0.1:3000/segseg
    time curl -sSL -i -X GET http://127.0.0.1:3000/segseg
    sleep 1
done
