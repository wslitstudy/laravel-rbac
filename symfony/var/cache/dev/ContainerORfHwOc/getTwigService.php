<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'twig' shared service.

require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/LoaderInterface.php';
require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExistsLoaderInterface.php';
require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/SourceContextLoaderInterface.php';
require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Loader/Filesystem.php';
require_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/Loader/FilesystemLoader.php';
require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Profiler/Profile.php';
require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExtensionInterface.php';
require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension.php';
require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/Profiler.php';
require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php';
require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/Debug.php';
require_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/AppVariable.php';
require_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ServiceLocator.php';
require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/RuntimeLoaderInterface.php';
require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ContainerRuntimeLoader.php';
require_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
require_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Environment.php';
require_once $this->targetDirs[3].'/vendor/symfony/templating/TemplateNameParserInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/templating/TemplateNameParser.php';
require_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Templating/TemplateNameParser.php';

$a = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->load(__DIR__.'/getTemplating_LocatorService.php')), ($this->privates['templating.name_parser'] ?? $this->privates['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(($this->services['kernel'] ?? $this->get('kernel')))), $this->targetDirs[3]);
$a->addPath(($this->targetDirs[3].'/templates'));
$a->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
$a->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
$a->addPath(($this->targetDirs[3].'/src/AdminBundle/Resources/views'), 'Admin');
$a->addPath(($this->targetDirs[3].'/src/AdminBundle/Resources/views'), '!Admin');
$a->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
$a->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), '!Twig');
$a->addPath(($this->targetDirs[3].'/src/Resources/views'));
$a->addPath(($this->targetDirs[3].'/templates'));

$this->services['twig'] = $instance = new \Twig\Environment($a, array('paths' => array(($this->targetDirs[3].'/templates') => NULL), 'debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => $this->parameters['twig.form.resources'], 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'default_path' => ($this->targetDirs[3].'/templates'), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

$b = ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack());

$c = new \Symfony\Bridge\Twig\AppVariable();
$c->setEnvironment('dev');
$c->setDebug(true);
if ($this->has('request_stack')) {
    $c->setRequestStack($b);
}

$instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(new \Twig\Profiler\Profile(), NULL));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(NULL));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL)), ($this->targetDirs[3].'/src'), 'UTF-8'));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
$instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($b, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService())));
$instance->addExtension(new \Twig\Extension\DebugExtension());
$instance->addGlobal('app', $c);
$instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
    return ($this->privates['twig.runtime.httpkernel'] ?? $this->load(__DIR__.'/getTwig_Runtime_HttpkernelService.php'));
}))));
(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

return $instance;
