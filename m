#!/bin/bash
if test "$#" -eq 0; then
  ./yii migrate --interactive=0
fi
if test "$#" -eq 1; then
  ./yii migrate/create --interactive=0 $1
  vim-last migrations
fi
