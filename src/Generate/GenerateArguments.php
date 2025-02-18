<?php

namespace Zerotoprod\Psr4ClassnameCli\Generate;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/psr4-classname-cli
 */
class GenerateArguments
{
    use DataModel;

    /**
     * @link https://github.com/zero-to-prod/psr4-classname-cli
     */
    public const classname = 'classname';
    /**
     * @link https://github.com/zero-to-prod/psr4-classname-cli
     */
    public string $classname;
}