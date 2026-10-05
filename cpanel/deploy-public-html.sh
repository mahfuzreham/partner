#!/bin/bash
set -e

APP_DIR="$HOME/partner"
PUBLIC_DIR="$HOME/public_html"

cd "$APP_DIR"
git pull origin main
/opt/cpanel/ea-php83/root/usr/bin/php ~/composer.phar install --no-dev --optimize-autoloader

mkdir -p "$PUBLIC_DIR"
cp -f "$APP_DIR/public/.htaccess" "$PUBLIC_DIR/.htaccess"
cp -f "$APP_DIR/public/index.php" "$PUBLIC_DIR/index.php"

/opt/cpanel/ea-php83/root/usr/bin/php "$APP_DIR/artisan" migrate --force
/opt/cpanel/ea-php83/root/usr/bin/php "$APP_DIR/artisan" optimize

echo "Deployment completed."
