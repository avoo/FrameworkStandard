<?php

namespace AvooStandard;

use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Script\CommandEvent;
use Composer\Script\ScriptEvents;
use Avoo\Bundle\InstallerBundle\Composer\ScriptHandler;

/**
 * Class RootInstallSubscriber
 *
 * @author Jérémy Jégou <jejeavo@gmail.com>
 */
class RootInstallSubscriber implements EventSubscriberInterface
{
    /**
     * Install avoo demo bundle
     *
     * @param CommandEvent $event
     */
    public static function installAvooDemoBundle(CommandEvent $event)
    {
        ScriptHandler::installAvooDemoBundle($event);
    }

    /**
     * Install core bundle
     *
     * @param CommandEvent $event
     */
    public static function installCoreBundle(CommandEvent $event)
    {
        ScriptHandler::installCoreBundle($event);
    }

    /**
     * Install core bundle
     *
     * @param CommandEvent $event
     */
    public static function installBackendBundle(CommandEvent $event)
    {
        ScriptHandler::installBackendBundle($event);
    }

    /**
     * Configure application
     *
     * @param CommandEvent $event
     */
    public static function configureApplication(CommandEvent $event)
    {
        ScriptHandler::configureApp($event);
    }

    /**
     * Configure administrator user
     *
     * @param CommandEvent $event
     */
    public static function setupAdministrator(CommandEvent $event)
    {
        ScriptHandler::setupAdmin($event);
    }

    /**
     * Remove installer files
     *
     * @param CommandEvent $event
     */
    public static function removeFilesInstaller(CommandEvent $event)
    {
        ScriptHandler::removeFilesInstaller($event);
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            ScriptEvents::POST_INSTALL_CMD => array(
                array('installCoreBundle', 512),
                array('installBackendBundle', 256),
                array('configureApplication', 128),
                array('setupAdministrator', 64),
                array('removeFilesInstaller', 0),
            ),
        );
    }
}
