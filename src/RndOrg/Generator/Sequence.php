<?php

/**
 *
 * @author Pierre Klink <dev@klinks.info>
 * @license MIT
 */

namespace RndOrg\Generator;

class Sequence extends AbstractImpl
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
        // check min
        if ($this->min < -1e9 || $this->min > 1e9)
        {
            throw new \UnexpectedValueException(__CLASS__ . '::$min is invalid');
        }

        // check max
        if ($this->max < -1e9 || $this->max > 1e9)
        {
            throw new \UnexpectedValueException(__CLASS__ . '::$max is invalid');
        }

        return $this->request(array('min', 'max'));
    }
    

    /**
     * @return string
     */
    public function getGeneratorUrl()
    {
        return $this->baseUrl . 'sequences/';
    }
    
}
