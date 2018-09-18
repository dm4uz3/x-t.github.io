#!/bin/bash
# Bashism, makes the BSD people mad.

prefix="src"

if [[ $1 == "--debug" ]]; then
    if [[ $2 != "" ]]; then
        awk -f compile.awk $2 | less
    else
        awk -f compile.awk $prefix/index.html | less
    fi
    exit 0
fi

awk -f compile.awk $prefix/index.html > index.html
awk -f compile.awk $prefix/about.html > about.html
awk -f compile.awk $prefix/source.html > source.html
awk -f compile.awk blog/src_2018.html > blog/2018.html
