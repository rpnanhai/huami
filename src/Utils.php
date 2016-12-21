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

class Utils
{
    /**
     * [copyContent osx下复制内容]
     * @param  string $content [要复制的内容]
     * @return bool
     */
    public static function copyContent($content)
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) == 'DAR') {
            system("echo '$content' | pbcopy");
            return true;
        } else {
            return false;
        }
    }
}
