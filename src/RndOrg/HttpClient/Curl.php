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
     * @var resource
     */
    private $handle;


    /**
     * @return void
     */
    public function __destruct()
    {
        if (is_resource($this->handle))
        {
            curl_close($this->handle);
        }
    }


    /**
     * @param $url string
     * @return array
     */
    public function request($url)
    {
        // create curl handle if needed
        if (!is_resource($this->handle)) {
            $this->handle = curl_init();
            curl_setopt($this->handle, CURLOPT_RETURNTRANSFER, true);
        }

        // set url
        curl_setopt($this->handle, CURLOPT_URL, $url);

        // return response as array
        return $this->splitResponse(curl_exec($this->handle));
    }


    /**
     * @param $response
     * @return array
     */
    protected function splitResponse($response)
    {
        return explode("\n", trim($response));
    }

}
