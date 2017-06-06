<?php

/*
 * This file is part of Git.io PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\GitIO;

use BrianFaust\Unified\AbstractHttpClient;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_url' => 'http://git.io',
        'headers' => [
           'User-Agent' => 'BrianFaust/Git.io',
        ],
        'defaults' => [
            'allow_redirects' => false,
        ],
    ];

    protected $responseFormat = 'stream';
}
