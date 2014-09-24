#!/bin/bash
if [ -z "$1" ]
  then echo "commit message is... ?"
  exit
fi
cd 1940smusic
bash dev/deploy.sh
git add --all
git commit -a -m "$1"
git push
cd ..
cd 1950smusic
bash dev/deploy.sh
git add --all
git commit -a -m "$1"
git push
cd ..
cd 1960smusic
bash dev/deploy.sh
git add --all
git commit -a -m "$1"
git push
cd ..
cd 1970smusic
bash dev/deploy.sh
git add --all
git commit -a -m "$1"
git push
cd ..
cd 1980smusic
bash dev/deploy.sh
git add --all
git commit -a -m "$1"
git push
cd ..
