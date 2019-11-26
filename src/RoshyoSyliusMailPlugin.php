<?php

declare(strict_types=1);

namespace Roshyo\SyliusMailPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class RoshyoSyliusMailPlugin extends Bundle
{
    use SyliusPluginTrait;
}
