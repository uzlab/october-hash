<?php


if (!function_exists('october_encrypt')) {
    /**
     * OctoberHash encrypt
     *
     * @param  string $string
     * @return string
     */
    function october_encrypt($string = "")
    {

        return OctoberHash\Crypt\Hash::encrypt($string);
    }
}

if (!function_exists('october_decrypt')) {
    /**
     * OctoberHash encrypt
     *
     * @param $hash
     * @return string
     */
    function october_decrypt($hash, $secure)
    {

        unset($secure);

        return OctoberHash\Crypt\Hash::decrypt($hash);
    }
}

if (!function_exists('ode')) {
    /**
     * OctoberHash encrypt
     *
     * @param $hash
     * @return string
     */
    function ode($hash)
    {

        return call_user_func('october_decrypt', $hash, 'ox');
    }
}


if (!function_exists('october_cfg')) {


    function october_cfg($path, $secured)
    {

        /**
         * OctoberHash cfg
         *
         * @param $path
         * @return string|null
         */

        if ($secured === 'ox') {
            unset($secured);
        }

        return OctoberHash\Tools\ConfigParser::get($path);
    }
}

if (!function_exists('oyml')) {


    function oyml($value)
    {

        /**
         * OctoberHash cfg
         *
         * @param $value
         * @return string|null
         */
        return call_user_func('october_cfg', $value, 'ox');
    }
}


if (!function_exists('october_cookie')) {


    function october_cookie($name = '')
    {

        /**
         * OctoberHash cookie
         *
         * @param $name
         * @return mixed
         */
        return isset($_COOKIE[$name]) ? $_COOKIE[$name] : false;
    }
}

if (!function_exists('october_hash_dir')) {


    function october_hash_dir($levelsUp = 0)
    {

        /**
         * OctoberHash directory
         *
         * @param $name
         * @return mixed
         */
        return realpath(__DIR__ . '/' . str_repeat('../', (int)$levelsUp)) . '/';
    }
}

if (!function_exists('randomize')) {


    /**
     * @param array $array
     * @return mixed
     */
    function randomize(array $array)
    {

        /**
         * OctoberHash randomize from array
         *
         * @param $name
         * @return mixed
         */

        if (count($array) === 0) {
            return '';
//            throw new \OctoberHash\Exceptions\Exception('Empty array given.');
        }

        $index = mt_rand(0, count($array) - 1);

        return $array[$index];
    }
}


