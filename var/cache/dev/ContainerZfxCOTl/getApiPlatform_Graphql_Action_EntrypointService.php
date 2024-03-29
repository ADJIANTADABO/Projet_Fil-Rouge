<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'api_platform.graphql.action.entrypoint' shared service.

include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Action/EntrypointAction.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Type/SchemaBuilderInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Type/SchemaBuilder.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Resolver/Factory/ResolverFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Resolver/FieldsToAttributesTrait.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Resolver/ResourceAccessCheckerTrait.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Resolver/Factory/CollectionResolverFactory.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Resolver/Factory/ItemMutationResolverFactory.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Resolver/ItemResolver.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Resolver/ResourceFieldResolver.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/ExecutorInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/GraphQl/Executor.php';

$a = ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService());
$b = ($this->services['serializer'] ?? $this->getSerializerService());
$c = ($this->privates['api_platform.security.resource_access_checker'] ?? $this->getApiPlatform_Security_ResourceAccessCheckerService());
$d = ($this->privates['api_platform.iri_converter'] ?? $this->getApiPlatform_IriConverterService());

return $this->services['api_platform.graphql.action.entrypoint'] = new \ApiPlatform\Core\GraphQl\Action\EntrypointAction(new \ApiPlatform\Core\GraphQl\Type\SchemaBuilder(($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), $a, new \ApiPlatform\Core\GraphQl\Resolver\Factory\CollectionResolverFactory(($this->privates['debug.api_platform.collection_data_provider'] ?? $this->getDebug_ApiPlatform_CollectionDataProviderService()), ($this->privates['debug.api_platform.subresource_data_provider'] ?? $this->getDebug_ApiPlatform_SubresourceDataProviderService()), $b, ($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService()), $a, $c, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true), new \ApiPlatform\Core\GraphQl\Resolver\Factory\ItemMutationResolverFactory($d, ($this->privates['debug.api_platform.data_persister'] ?? $this->load('getDebug_ApiPlatform_DataPersisterService.php')), $b, $a, $c, ($this->privates['api_platform.validator'] ?? $this->load('getApiPlatform_ValidatorService.php'))), new \ApiPlatform\Core\GraphQl\Resolver\ItemResolver($d, $b, $a, $c), new \ApiPlatform\Core\GraphQl\Resolver\ResourceFieldResolver($d, ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService())), ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), true), new \ApiPlatform\Core\GraphQl\Executor(), ($this->services['twig'] ?? $this->getTwigService()), true, true, '');
