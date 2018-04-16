<?php

namespace Triggerfish\DoctrineEncryptBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Triggerfish\DoctrineEncryptBundle\DependencyInjection\DoctrineEncryptExtension;
use Triggerfish\DoctrineEncryptBundle\DependencyInjection\Compiler\RegisterServiceCompilerPass;

class TriggerfishDoctrineEncryptBundle extends Bundle {
    
    public function build(ContainerBuilder $container) {
        parent::build($container);
        $container->addCompilerPass(new RegisterServiceCompilerPass(), PassConfig::TYPE_AFTER_REMOVING);
    }
    
    public function getContainerExtension()
    {
        return new DoctrineEncryptExtension();
    }
}
