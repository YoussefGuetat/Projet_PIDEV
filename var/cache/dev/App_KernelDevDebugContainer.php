<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerF9KxxnV\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerF9KxxnV/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerF9KxxnV.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerF9KxxnV\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerF9KxxnV\App_KernelDevDebugContainer([
    'container.build_hash' => 'F9KxxnV',
    'container.build_id' => '375c3569',
    'container.build_time' => 1677808754,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerF9KxxnV');
