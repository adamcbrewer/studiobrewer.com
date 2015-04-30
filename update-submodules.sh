#!/bin/bash
echo "Updating Kirby CMS submodules..."
git submodule update --init --recursive
git submodule foreach --recursive git checkout master
git submodule foreach --recursive git pull
