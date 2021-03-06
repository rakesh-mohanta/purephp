<?php
/* (c) Anton Medvedev <anton@elfet.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pure\Proxy;

use Pure\Proxy;

class Generator
{
    private $client;
    private $alias;

    public function __construct($client, $alias)
    {
        $this->client = $client;
        $this->alias = $alias;
    }

    public function __get($path)
    {
        return new Proxy($this->client, $this->alias, $path);
    }
}