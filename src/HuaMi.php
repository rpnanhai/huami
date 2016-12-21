<?php

/*
 * The file is part of the rpnanhai/huami
 *
 * (c) 2016 rpnanhai <rpnanhai@gamil.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */


namespace HuaMi;

class HuaMi
{
    /**
     * [$strOne 加密参数一]
     * @var string
     */
    private $strOne = 'snow';

    private $strTwo = 'kise';

    private $strThree = 'sunlovesnow1990090127xykab';

    public function __construct($config = [])
    {
        $this->strOne   = isset($config['strOne']) ? $config['strOne'] : $this->strOne;
        $this->strTwo   = isset($config['strTwo']) ? $config['strTwo'] : $this->strTwo;
        $this->strThree = isset($config['strThree']) ? $config['strThree'] : $this->strThree;
    }


    public function encode($password, $key)
    {
        $md5one     = hash_hmac('md5', $password, $key);
        $md5two     = hash_hmac('md5', $md5one, $this->strOne);
        $md5three   = hash_hmac('md5', $md5one, $this->strTwo);

        //计算大小写
        $rule       = str_split($md5three);
        $source     = str_split($md5two);

        for ($i=0; $i < 32; $i++) {
            if (strstr($this->strThree, $rule[$i])) {
                $source[$i] = strtoupper($source[$i]);
            }
        }
        //转成16位
        $code32 = implode('', $source);
        if (is_numeric($source['0'])) {
            $code16 = 'K' . substr($code32, 1, 15);
        } else {
            $code16 = substr($code32, 0, 16);
        }
        if ($code16) {
            return $code16;
        } else {
            return false;
        }
    }
}
