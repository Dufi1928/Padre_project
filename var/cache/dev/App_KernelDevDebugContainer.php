<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKTLHfP9\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKTLHfP9/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKTLHfP9.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKTLHfP9\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKTLHfP9\App_KernelDevDebugContainer([
    'container.build_hash' => 'KTLHfP9',
    'container.build_id' => '7e656383',
    'container.build_time' => 1711209854,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKTLHfP9');
