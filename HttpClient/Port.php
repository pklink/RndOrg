<?php

/**
 *
 * @author Pierre Klink <dev@klinks.info>
 * @license MIT
 */

namespace RndOrg\HttpClient;

interface Port
{

    /**
     * @abstract
     * @param $url string
     * @return array
     */
    public function request($url);

}
