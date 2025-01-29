<?php

namespace Zerotoprod\Psr4ClassnameCli\Generate;

use Zerotoprod\DataModel\DataModel;

class GenerateArguments
{
    use DataModel;

    public const classname = 'classname';
    public string $classname;
}