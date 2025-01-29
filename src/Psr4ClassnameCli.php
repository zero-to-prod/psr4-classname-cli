<?php

namespace Zerotoprod\Psr4ClassnameCli;

use Symfony\Component\Console\Application;
use Zerotoprod\Psr4ClassnameCli\Generate\GenerateCommand;
use Zerotoprod\Psr4ClassnameCli\Src\SrcCommand;

class Psr4ClassnameCli
{
    public static function register(Application $Application): void
    {
        $Application->add(new SrcCommand());
        $Application->add(new GenerateCommand());
    }
}