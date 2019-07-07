<?php
/**
 * Alxarafe. Development of PHP applications in a flash!
 * Copyright (C) 2018 Alxarafe <info@alxarafe.com>
 */

namespace Alxarafe\Base;

/**
 * Class Controller
 *
 * @package Alxarafe\Base
 */
abstract class Controller
{
    public $protectedClose;

    /**
     * Main is invoked if method is not specified.
     * Check if you have to save changes or just exit
     *
     * @return void
     */
    abstract public function main();

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->protectedClose = false;
        /*
          try {
          $this->className = (new \ReflectionClass($this))->getShortName();
          } catch (\ReflectionException $e) {
          //echo $e->getCode() . ': ' . $e->getMessage();
          $this->className = 'Class name not available';
          }
         */
    }
}
