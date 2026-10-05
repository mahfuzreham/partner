# ResellNom Partner SaaS

White-label multi-tenant reseller platform for ResellNom.

## cPanel structure

Keep the Laravel source outside the web root:

/home/USERNAME/
├── partner/          # Laravel source + .env + vendor
└── public_html/      # browser-accessible files only

Clone the repository to /home/USERNAME/partner.

## First deployment

cd ~
git clone git@github.com:mahfuzreham/partner.git partner
cd ~/partner
cp .env.example .env
/opt/cpanel/ea-php83/root/usr/bin/php ~/composer.phar install --no-dev --optimize-autoloader
/opt/cpanel/ea-php83/root/usr/bin/php artisan key:generate
/opt/cpanel/ea-php83/root/usr/bin/php artisan migrate --force
mkdir -p ~/public_html
cp public/.htaccess ~/public_html/.htaccess
cp public/index.php ~/public_html/index.php
/opt/cpanel/ea-php83/root/usr/bin/php artisan optimize

## Updates

cd ~/partner
git pull origin main
/opt/cpanel/ea-php83/root/usr/bin/php ~/composer.phar install --no-dev --optimize-autoloader
cp public/.htaccess ~/public_html/.htaccess
cp public/index.php ~/public_html/index.php
/opt/cpanel/ea-php83/root/usr/bin/php artisan migrate --force
/opt/cpanel/ea-php83/root/usr/bin/php artisan optimize

Never put .env, WHMCS credentials, app/, config/, database/, resources/, routes/, or vendor/ directly inside public_html.
