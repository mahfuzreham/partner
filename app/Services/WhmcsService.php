<?php
namespace App\\Services;

use Illuminate\\Support\\Facades\\Http;

class WhmcsService
{
    public function call(string $action, array $params = []): array
    {
        $url = rtrim((string) config('services.whmcs.url'), '/').'/includes/api.php';
        $payload = array_merge($params, [
            'action' => $action,
            'identifier' => config('services.whmcs.identifier'),
            'secret' => config('services.whmcs.secret'),
            'responsetype' => 'json',
        ]);

        return Http::asForm()->timeout(30)->post($url, $payload)->throw()->json();
    }
}