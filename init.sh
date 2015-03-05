#!/bin/bash
echo "Installing NPM and Bower packages..."
npm install && bower install && grunt init
echo "Initialising Kirby CMS submodules..."
git submodule update --init --recursive
echo "Creating directories..."
mkdir app/site/accounts
mkdir app/assets/avatars
mkdir app/site/cache
