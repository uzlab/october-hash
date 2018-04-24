<?php namespace OctoberHash\Crypt;


class Hash
{

    const ENCRYPT_METHOD = "AES-256-CBC";
    const SECRET_KEY = 's$dvvLud}P8q*mYkA=NqkXat][+fL6oW';
    const SECRET_IV = 'oakum lunatic stickler alveolar bygone';


    public static function encrypt($string)
    {

        if (!is_scalar($string)) {
            throw new \UnexpectedValueException();
        }

        return base64_encode(openssl_encrypt($string, self::ENCRYPT_METHOD, self::getKey(), 0, self::getIV()));
    }


    public static function decrypt($hash)
    {

        return openssl_decrypt(base64_decode($hash), self::ENCRYPT_METHOD, self::getKey(), 0, self::getIV());
    }


    private static function getKey()
    {

        return hash('sha256', self::SECRET_KEY);
    }


    private static function getIV()
    {

        return substr(hash('sha256', self::SECRET_IV), 0, 16);
    }

}