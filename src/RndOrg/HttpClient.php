<?php

/**
 *
 * @author Pierre Klink <dev@klinks.info>
 * @license MIT
 */

namespace RndOrg;

interface HttpClient
{

    /**
     * @abstract
     * @param $url string
     * @return array
     */
    public function request($url);

}
