<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPEwokEe\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPEwokEe/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPEwokEe.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPEwokEe\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerPEwokEe\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'PEwokEe',
    'container.build_id' => '531f20d5',
    'container.build_time' => 1563900703,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPEwokEe');