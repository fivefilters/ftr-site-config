<?php

namespace GrabySiteConfig\SiteConfig;

use Symfony\Component\Finder\Finder;

class Files
{
    public static function getFiles($dirs = array())
    {
        $dirs = array_merge('.', $dirs);

        $finder = new Finder();
        $finder->files()
            ->sortByName()
            ->ignoreDotFiles(false)
            ->name('/\.txt$/')
            ->in($dirs);

        $configFiles = array();
        foreach ($finder as $files) {
            $configFiles[$files->getRelativePathname()] = $files->getRealpath();
        }

        return $configFiles;
    }
}
