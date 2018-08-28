<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.resource_controller.resources_collection_provider' shared service.

return $this->privates['sylius.resource_controller.resources_collection_provider'] = new \Sylius\Bundle\ResourceBundle\Controller\ResourcesCollectionProvider(($this->services['sylius.resource_controller.resources_resolver.grid_aware'] ?? $this->load('getSylius_ResourceController_ResourcesResolver_GridAwareService.php')), ($this->privates['sylius.resource_controller.pagerfanta_representation_factory'] ?? $this->privates['sylius.resource_controller.pagerfanta_representation_factory'] = new \Hateoas\Representation\Factory\PagerfantaFactory()));