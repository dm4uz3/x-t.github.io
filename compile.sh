#!/bin/bash
# Bashism, makes the BSD people mad.

prefix="src"

awk -f compile.awk $prefix/index.html > index.html
awk -f compile.awk $prefix/about.html > about.html
awk -f compile.awk $prefix/source.html > source.html
