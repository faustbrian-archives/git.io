<?php

/*
 * This file is part of Git.io PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Gitio\Api;

use BrianFaust\Unified\AbstractApi;

class Link extends AbstractApi
{
    public function reveal($url)
    {
        return $this->get($url)->getHeader('Location');
    }

    public function conceal($url, $code = null)
    {
        $this->setFormParameters(compact('url', 'code'));

        return $this->post(null)->getHeader('Location');
    }
}
