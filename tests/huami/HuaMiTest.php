<?php

/*
 * The file is part of the rpnanhai/HuaMi
 *
 * (c) 2016 rpnanhai <rpnanhai@gamil.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace HuaMi\Tests;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use HuaMi\HuaMi;

class HuaMiTests extends \PHPUnit_Framework_TestCase
{
    public function testExecute()
    {
        $application = new Application();
        $application->add(new HuaMi('aaa'));
        $command       = $application->find('test');
        $commandTester = new CommandTester($command);
        $commandTester->execute(['command' => 'aaa']);
        $this->assertRegExp('//', $commandTester->getDisplay());
    }
}
