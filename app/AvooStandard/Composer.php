<?php

namespace AvooStandard;

use Composer\Script\CommandEvent;

/**
 * Class Composer
 *
 * @author Jérémy Jégou <jejeavo@gmail.com>
 */
class Composer
{
    public static function hookRootInstall(CommandEvent $event)
    {
        $event->getComposer()->getEventDispatcher()->addSubscriber(new RootInstallSubscriber());
    }
}
