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

        $prettyName = $package->getPrettyName();
        $name = null;
        $vendor = null;
        if (strpos($prettyName, '/') !== false) {
            list($vendor, $name) = explode('/', $prettyName);
        } else {
            $vendor = '';
            $name = $prettyName;
        }

        $name = preg_replace('/-module$/', '', $name);
        $name = str_replace(array('-', '_'), ' ', $name);
        $name = str_replace(' ', '', ucwords($name));

        

        return 'Modules/'.$name;
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'qore-works-module' === $packageType;
    }
}