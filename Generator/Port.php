<?php


/**
 *
 * @author Pierre Klink <dev@klinks.info>
 * @license MIT
 */

namespace RndOrg\Generator;
 
interface Port
{

    /**
     * @abstract
     * @return mixed
     */
    public function get();


    /**
     * @abstract
     * @return string
     */
    public function getGeneratorUrl();

}
