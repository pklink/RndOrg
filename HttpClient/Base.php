<?php

/**
 *
 * @author Pierre Klink <dev@klinks.info>
 * @license MIT
 */

namespace RndOrg\HttpClient;

require_once dirname(__FILE__) . '/Port.php';

abstract class Base implements Port
{

    /**
     * @param $response
     * @return array
     */
    protected function _splitResponse($response)
    {
        return explode("\n", trim($response));
    }

}
