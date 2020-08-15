<?php

namespace Console\Command2;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SayHi2Command extends Command
{
    protected static $defaultName = 'sayhi2';

    protected function configure()
    {
        $this->setDescription("This command will say hi to user")
                ->setName("sayhi2")
                ->setHelp("Input Username is optional");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Say Hi to User");
        return Command::SUCCESS;

    }
}