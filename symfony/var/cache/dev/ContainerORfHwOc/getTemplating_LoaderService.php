<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'templating.loader' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/templating/Loader/LoaderInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Templating/Loader/FilesystemLoader.php';

return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->load(__DIR__.'/getTemplating_LocatorService.php')));
