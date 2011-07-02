<?php

/**
 *
 * @author Pierre Klink <dev@klinks.info>
 * @license MIT
 */

namespace RndOrg\Generator;

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Base.php';

class Sequence extends Base
{

    /**
     * The lower bound of the interval (inclusive)
     *
     * @var int
     */
    public $min = 0;

    /**
     * The upper bound of the interval (inclusive).
     *
     * @var int
     */
    public $max = 9;

    
    /**
     * @return array
     */
    public function get()
    {
        return $this->_request(array('min', 'max'));
    }
    

    /**
     * @return string
     */
    public function getGeneratorUrl()
    {
        return $this->baseUrl . 'sequences/';
    }
    
}
