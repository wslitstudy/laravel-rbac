<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.locator' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/config/FileLocatorInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Templating/Loader/TemplateLocator.php';
require_once $this->targetDirs[3].'/vendor/symfony/config/FileLocator.php';
require_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Config/FileLocator.php';

return $this->privates['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(($this->privates['file_locator'] ?? $this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel')), ($this->targetDirs[3].'/src/Resources'), array(0 => ($this->targetDirs[3].'/src')))), $this->targetDirs[0]);