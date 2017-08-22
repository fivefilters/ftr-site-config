<?php

namespace GrabySiteConfig\SiteConfig;

use Symfony\Component\Finder\Finder;

class Files
{
    /**
     * Get txt files from many directories.
     * And load them in an array (filename => filepath).
     *
     * @param array $dirs List of directories
     *
     * @return array
     */
    public static function getFiles($dirs = array())
    {
        // add current directory
        $dirs = array_merge(array(__DIR__.'/..'), $dirs);

        $finder = new Finder();
        $finder->files()
            ->sortByName()
            ->ignoreDotFiles(false)
            ->name('/\.txt$/')
            ->in($dirs);

        $configFiles = array();
        foreach ($finder as $files) {
            $configFiles[$files->getFilename()] = $files->getRealpath();
        }

        return $configFiles;
    }
}
