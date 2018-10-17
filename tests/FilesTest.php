<?php

use GrabySiteConfig\SiteConfig\Files;

class FilesTest extends \PHPUnit\Framework\TestCase
{
    public function testGettingFilesLoaded()
    {
        $configFiles = Files::getFiles();

        $this->assertNotEmpty(count($configFiles));
        $this->assertGreaterThan(0, count($configFiles));

        foreach ($configFiles as $file) {
            $this->assertContains('.txt', $file);
        }
    }
}
