# ResellNom Partner SaaS

White-label multi-tenant reseller platform for ResellNom.

## Current foundation
- Laravel 12 / PHP 8.2+
- Partner dashboard UI
- Products and partner pricing UI
- Support ticket UI
- Withdrawal UI
- Custom domain and branding UI
- Multi-tenant/product/commission/withdrawal database foundation
- WHMCS API service foundation

## cPanel deployment

1. Clone the private repository with your GitHub SSH deploy key.
2. Copy `.env.example` to `.env` and configure MySQL/WHMCS credentials.
3. Run Composer using the cPanel PHP 8.3 binary.
4. Run `php artisan key:generate`, `php artisan migrate --force`, and `php artisan optimize`.
5. Set the cPanel document root to `/home/USERNAME/partner.resellnom.com/public`.

Never commit `.env` or WHMCS credentials.
