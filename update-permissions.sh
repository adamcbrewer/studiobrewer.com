#!/bin/bash
echo "Setting permissions..."
chmod -R 777 app/content
chmod -R 766 app/thumbs
chmod -R 766 app/assets/avatars
chmod -R 777 app/site/cache
chmod 777 app/site/accounts
