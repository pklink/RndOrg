<?php

/**
 *
 * @author Pierre Klink <dev@klinks.info>
 * @license MIT
 */

namespace RndOrg\HttpClient;

require_once dirname(__FILE__) . '/Base.php';

class Curl extends Base
{

    /**
     * @var resource
     */
    private $_handle;


    /**
     * @return void
     */
    public function __destruct()
    {
        if (is_resource($this->_handle))
        {
            curl_close($this->_handle);
        }
    }


    /**
     * @param $url string
     * @return array
     */
    public function request($url)
    {
        // create curl handle if needed
        if (!is_resource($this->_handle)) {
            $this->_handle = curl_init();
            curl_setopt($this->_handle, CURLOPT_RETURNTRANSFER, true);
        }

        // set url
        curl_setopt($this->_handle, CURLOPT_URL, $url);

        // return response as array
        return $this->_splitResponse(curl_exec($this->_handle));
    }

}
