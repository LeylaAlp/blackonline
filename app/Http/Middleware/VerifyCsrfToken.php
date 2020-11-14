<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'https://blackonline.tech/siparisler',
	'http://blackonline.tech/siparisler',
'https://blackonline.tech/siparisler?user=1&signature=2ab85058a04a061559ef2669f4b09eccf9cbfdec73dbf9d9ed0cf349fd7855af'
    ];
}
