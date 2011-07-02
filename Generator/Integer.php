<?php

/**
 *
 * @author Pierre Klink <dev@klinks.info>
 * @license MIT
 */

namespace RndOrg\Generator;

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Base.php';

class Integer extends Base
{

    const BASE_BIN = 2;

    const BASE_OCT = 8;

    const BASE_DEC = 10;

    const BASE_HEX = 16;


    /**
     * 	The base that will be used to print the numbers.
     *
     * @var int BASE_BIN|BASE_OCT|BASE_DEC|BASE_HEX
     */
    public $base = 10;

    /**
     * The smallest value allowed for each integer.
     *
     * @var int
     */
    public $min = 0;

    /**
     * The largest value allowed for each integer.
     *
     * @var int
     */
    public $max = 9;

    /**
     * The number of integers requested.
     *
     * @var int
     */
    public $num = Integer::BASE_DEC;
    

    /**
     * @return array
     */
    public function get()
    {
        return $this->_request(array('base', 'min', 'max', 'num'));
    }
    

    /**
     * @return string
     */
    public function getGeneratorUrl()
    {
        return $this->baseUrl . 'integers/';
    }
    
}
