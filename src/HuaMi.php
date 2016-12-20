<?php

/*
 * The file is part of the rpnanhai/HuaMi
 *
 * (c) 2016 rpnanhai <rpnanhai@gamil.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace HuaMi;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HuaMi extends Command
{
    public function __construct($msg)
    {
        $this->msg = $msg;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('test');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<comment>' . $this->msg . '</comment>');
    }
}
