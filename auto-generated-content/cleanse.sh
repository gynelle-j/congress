#!/bin/bash
cat $1 | tr -d '\n' | tr -d '\t' | sed 's/Offices is Sydney.*//g' | sed 's/^.*entry-title blue normal">/###/g'  | 
sed 's/</\n&/g' | sed 's/>/&\n/g' | egrep -v ">|<"  

