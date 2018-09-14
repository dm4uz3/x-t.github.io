#!/bin/bash
# Bashism, makes the BSD people mad.

prefix="f00f.me"

awk -f compile.awk $prefix/index.html > index.html
awk -f compile.awk $prefix/about.html > about.html
