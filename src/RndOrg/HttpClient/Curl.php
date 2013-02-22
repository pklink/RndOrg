<?php

/**
 *
 * @author Pierre Klink <dev@klinks.info>
 * @license MIT
 */

namespace RndOrg\HttpClient;

class Curl implements \RndOrg\HttpClient
{

    /**
     * @param $url string
     * @return array
     */
    public function request($url)
    {
        $request = \jyggen\Curl::get($url);
        return explode("\n", trim($request['data']));
    }

}
