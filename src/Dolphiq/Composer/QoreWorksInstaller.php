<?php

namespace Dolphiq\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class QoreWorksInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $prefix = substr($package->getPrettyName(), 0, 23);
        

        return 'Modules/'.substr($package->getPrettyName(), 23);
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'qore-works-module' === $packageType;
    }
}