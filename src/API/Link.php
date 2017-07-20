<?php

/*
 * This file is part of Git.io PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Gitio\API;

class Link extends AbstractAPI
{
    /**
     * Reveal the given github.com url.
     *
     * @param string $url
     *
     * @return string
     */
    public function reveal(string $url): string
    {
        return $this->client->withoutRedirecting()->get($url)->header('Location');
    }

    /**
     * Conceal the given github.com url.
     *
     * @param string $url
     *
     * @return string
     */
    public function conceal(string $url): string
    {
        return $this->client->asFormParams()->post('create', compact('url'))->body();
    }
}
