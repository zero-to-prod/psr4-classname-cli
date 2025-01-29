<?php

namespace Zerotoprod\Psr4ClassnameCli\Generate;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\Psr4Classname\Classname;

#[AsCommand(
    name: GenerateCommand::signature,
    description: 'Generates a valid PSR-4 Compliant Classname from a string.'
)]
class GenerateCommand extends Command
{
    public const signature = 'psr4-classname-cli:generate';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(
            Classname::generate(
                GenerateArguments::from($input->getArguments())->classname
            )
        );

        return Command::SUCCESS;
    }

    public function configure(): void
    {
        $this->addArgument(GenerateArguments::classname, InputArgument::REQUIRED);
    }
}