<?php


/**
 *
 * @author Pierre Klink <dev@klinks.info>
 * @license MIT
 */

namespace RndOrg;
 
interface Generator
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
