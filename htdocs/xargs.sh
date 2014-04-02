#!/bin/bash
target=$1

xargs -t -n1 ./updateFile.sh ${target} < difs.sh
#echo xargs -t -n1 ./updateFile.sh ${target} < difs.sh
