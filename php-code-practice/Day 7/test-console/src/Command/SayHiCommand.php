<?php

namespace Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class SayHiCommand extends Command
{
    protected static $defaultName = 'sayhi';

    protected function configure()
    {
        $this->setDescription("This command will say hi to user")
                ->setName("say")
                ->addArgument("username", InputArgument::OPTIONAL, 'enter your username')
                ->addOption("password","p", InputOption::VALUE_REQUIRED, 'enter your password', 'oops')
                ->addOption("hobbies","hob", InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY, 'enter your hobbies', ["makan", "tidur"])
                ->setHelp("All about user");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $username = $input->getArgument("username");
        $password = $input->getOption("password");
        $hobbies = $input->getOption("hobbies");

        $output->writeln("Hello $username");
        $output->writeln("I read your password $password");
        $output->writeln("Cool hobbies ".implode(", ",$hobbies));

        $output->writeln("test");

        // $section1 = $output->section();
        // $section2 = $output->section();
        // $section3 = $output->section();
        // $section1->writeln("This is section 1");
        // $section2->writeln("This is section 2");
        // $section3->writeln("This is section 3");
        
        // $section1->overwrite("THIS IS NOT SECTION 1");
        // $section3->clear(1);

        return Command::SUCCESS;

    }
}