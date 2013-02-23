<?php

/**
 *
 * @author Pierre Klink <dev@klinks.info>
 * @license MIT
 */

namespace RndOrg\Generator;

class Integer extends AbstractImpl
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
        // check base
        if (!in_array($this->base, array(self::BASE_BIN, self::BASE_OCT, self::BASE_DEC, self::BASE_HEX)))
        {
            throw new \UnexpectedValueException(__CLASS__ . '::$base is invalid');
        }

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

        // check max > min
        if ($this->min >= $this->max)
        {
            throw new \UnexpectedValueException(__CLASS__ . '::$max has to be bigger than ' . __CLASS__ . '::$min');
        }

        // check numbers
        if ($this->num < 1 || $this->num > 1e4)
        {
            throw new \UnexpectedValueException(__CLASS__ . '::$num is invalid');
        }

        return $this->request(array('base', 'min', 'max', 'num'));
    }
    

    /**
     * @return string
     */
    public function getGeneratorUrl()
    {
        return $this->baseUrl . 'integers/';
    }
    
}
