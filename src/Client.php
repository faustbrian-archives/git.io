<?php

declare(strict_types=1);

/*
 * This file is part of Git.io PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Gitio;

use Plients\Http\Http;

class Client
{
    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \Plients\Gitio\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri('https://git.io/');

        $class = "Plients\\Gitio\\API\\{$name}";

        return new $class($client);
    }
}
