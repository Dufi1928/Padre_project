<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerK2t7pYB\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerK2t7pYB/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerK2t7pYB.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerK2t7pYB\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerK2t7pYB\App_KernelProdContainer([
    'container.build_hash' => 'K2t7pYB',
    'container.build_id' => 'eb0f0435',
    'container.build_time' => 1711282838,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerK2t7pYB');
