<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVzy9gmv\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVzy9gmv/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerVzy9gmv.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerVzy9gmv\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerVzy9gmv\appProdProjectContainer([
    'container.build_hash' => 'Vzy9gmv',
    'container.build_id' => '46935475',
    'container.build_time' => 1674086799,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVzy9gmv');