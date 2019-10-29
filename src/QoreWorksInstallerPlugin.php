<?php 

namespace Dolphiq\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class TemplateInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new QoreWorksInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}