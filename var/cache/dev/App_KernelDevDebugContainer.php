<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0sUSGDw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0sUSGDw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0sUSGDw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0sUSGDw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0sUSGDw\App_KernelDevDebugContainer([
    'container.build_hash' => '0sUSGDw',
    'container.build_id' => 'cc8f69f4',
    'container.build_time' => 1712664284,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container0sUSGDw');
