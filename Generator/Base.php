<?php

/**
 *
 * @author Pierre Klink <dev@klinks.info>
 * @license MIT
 */

namespace RndOrg\Generator;

require_once dirname(__FILE__) . '/Port.php';

/**
 *
 * @throws \RuntimeException
 */
abstract class Base implements Port
{

    /**
     * The number of columns in which the integers will be arranged.
     *
     * @var int
     */
    private $_col = 1;

    /**
     * Determines the return type of the document that the server produces as its response. 
     *
     * @var string
     */
    private $_format = 'plain';

    /**
     * @var \HttpClient\Port
     */
    private $_httpClientInstance;

    /**
     * @var string
     */
    public $baseUrl = 'http://www.random.org/';

    /**
     * @var string
     */
    public $httpClient = 'Curl';

    /**
     * Determines the randomization to use to generate the strings.
     *
     * @var string
     */
    public $rnd = 'new';


    /**
     * 
     * @param array $params "name of url param" => "name of class property" | "name of class property" = "name of url param"
     * @return array
     */
    protected function _request($params = array())
    {
        // add default params
        $params = array_merge($params, array(
            'col'    => '_col',
            'format' => '_format',
            'rnd'
        ));

        // get generator url and prepare for additional params
        $url = $this->getGeneratorUrl() . '?';

        // add params to to url
        foreach ($params as $urlName => $propertyName)
        {
            // if numeric index is the url-param-name = name of property
            if (is_numeric($urlName))
            {
                $urlName = $propertyName;
            }
            
            $url .= "&{$urlName}={$this->$propertyName}";
        }

        return $this->getHttpClientInstance()->request($url);
    }


    /**
     * @return \HttpClient\Port
     */
    public function getHttpClientInstance()
    {
        if (!is_object($this->_httpClientInstance))
        {
            $basename  = pathinfo($this->httpClient, PATHINFO_BASENAME);
            $namespace = '\RndOrg\HttpClient\\' . $basename;
            $filepath  = dirname(__FILE__) . '/../HttpClient/' . $basename . '.php';

            // check if file exists and readable
            if (!file_exists($filepath) || !is_readable($filepath))
            {
                throw new \RuntimeException("{$filepath} does not exist or is not readable");
            }

            // include & create client
            require_once dirname(__FILE__) . "/../HttpClient/{$this->httpClient}.php";
            $this->_httpClientInstance = new $namespace();
        }

        return $this->_httpClientInstance;
    }


    /**
     * @param \RndOrg\HttpClient\Port $client
     * @return void
     */
    public function setHttpClientInstance(\RndOrg\HttpClient\Port $client)
    {
        $this->_httpClientInstance = $client;
    }

}
