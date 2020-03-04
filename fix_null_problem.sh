#!/bin/bash
## Fixes problems with generated APIs with null Values for strings...

find . -type f -name "*.php" -exec sed -i "s/\: 'null'/\: null/g" {} +
