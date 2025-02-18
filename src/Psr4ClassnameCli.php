<?php

namespace Zerotoprod\Psr4ClassnameCli;

use Symfony\Component\Console\Application;
use Zerotoprod\Psr4ClassnameCli\Generate\GenerateCommand;
use Zerotoprod\Psr4ClassnameCli\Src\SrcCommand;

/**
 * A CLI to generate a PSR-4 compliant classname
 *
 * @link https://github.com/zero-to-prod/psr4-classname-cli
 */
class Psr4ClassnameCli
{
    /**
     * @link https://github.com/zero-to-prod/psr4-classname-cli
     */
    public static function register(Application $Application): void
    {
        $Application->add(new SrcCommand());
        $Application->add(new GenerateCommand());
    }
}