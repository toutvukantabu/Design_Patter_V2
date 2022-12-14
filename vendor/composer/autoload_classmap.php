<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'App\\StrategyPattern\\Context\\Serializer' => $baseDir . '/src/StrategyPattern/Context/Serializer.php',
    'App\\StrategyPattern\\Interface\\NormalizerInterface' => $baseDir . '/src/StrategyPattern/Interface/NormalizerInterface.php',
    'App\\StrategyPattern\\Interface\\StrategyInterface' => $baseDir . '/src/StrategyPattern/Interface/StrategyInterface.php',
    'App\\StrategyPattern\\Normalizer\\JsonNormalizer' => $baseDir . '/src/StrategyPattern/Normalizer/JsonNormalizer.php',
    'App\\StrategyPattern\\Normalizer\\ObjectNormalizer' => $baseDir . '/src/StrategyPattern/Normalizer/ObjectNormalizer.php',
    'App\\StrategyPattern\\Normalizer\\StringNormalizer' => $baseDir . '/src/StrategyPattern/Normalizer/StringNormalizer.php',
    'App\\StrategyPattern\\Normalizer\\XmlNormalizer' => $baseDir . '/src/StrategyPattern/Normalizer/XmlNormalizer.php',
    'App\\StrategyPattern\\Strategy\\PlainTextFormater' => $baseDir . '/src/StrategyPattern/Strategy/PlainTextFormater.php',
    'App\\StrategyPattern\\Strategy\\XmlFormater' => $baseDir . '/src/StrategyPattern/Strategy/XmlFormater.php',
    'App\\StrategyPattern\\Strategy\\jsonFormater' => $baseDir . '/src/StrategyPattern/Strategy/jsonFormater.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'DI\\Annotation\\Inject' => $vendorDir . '/php-di/php-di/src/Annotation/Inject.php',
    'DI\\Annotation\\Injectable' => $vendorDir . '/php-di/php-di/src/Annotation/Injectable.php',
    'DI\\CompiledContainer' => $vendorDir . '/php-di/php-di/src/CompiledContainer.php',
    'DI\\Compiler\\Compiler' => $vendorDir . '/php-di/php-di/src/Compiler/Compiler.php',
    'DI\\Compiler\\ObjectCreationCompiler' => $vendorDir . '/php-di/php-di/src/Compiler/ObjectCreationCompiler.php',
    'DI\\Compiler\\RequestedEntryHolder' => $vendorDir . '/php-di/php-di/src/Compiler/RequestedEntryHolder.php',
    'DI\\Container' => $vendorDir . '/php-di/php-di/src/Container.php',
    'DI\\ContainerBuilder' => $vendorDir . '/php-di/php-di/src/ContainerBuilder.php',
    'DI\\Definition\\ArrayDefinition' => $vendorDir . '/php-di/php-di/src/Definition/ArrayDefinition.php',
    'DI\\Definition\\ArrayDefinitionExtension' => $vendorDir . '/php-di/php-di/src/Definition/ArrayDefinitionExtension.php',
    'DI\\Definition\\AutowireDefinition' => $vendorDir . '/php-di/php-di/src/Definition/AutowireDefinition.php',
    'DI\\Definition\\DecoratorDefinition' => $vendorDir . '/php-di/php-di/src/Definition/DecoratorDefinition.php',
    'DI\\Definition\\Definition' => $vendorDir . '/php-di/php-di/src/Definition/Definition.php',
    'DI\\Definition\\Dumper\\ObjectDefinitionDumper' => $vendorDir . '/php-di/php-di/src/Definition/Dumper/ObjectDefinitionDumper.php',
    'DI\\Definition\\EnvironmentVariableDefinition' => $vendorDir . '/php-di/php-di/src/Definition/EnvironmentVariableDefinition.php',
    'DI\\Definition\\Exception\\InvalidAnnotation' => $vendorDir . '/php-di/php-di/src/Definition/Exception/InvalidAnnotation.php',
    'DI\\Definition\\Exception\\InvalidDefinition' => $vendorDir . '/php-di/php-di/src/Definition/Exception/InvalidDefinition.php',
    'DI\\Definition\\ExtendsPreviousDefinition' => $vendorDir . '/php-di/php-di/src/Definition/ExtendsPreviousDefinition.php',
    'DI\\Definition\\FactoryDefinition' => $vendorDir . '/php-di/php-di/src/Definition/FactoryDefinition.php',
    'DI\\Definition\\Helper\\AutowireDefinitionHelper' => $vendorDir . '/php-di/php-di/src/Definition/Helper/AutowireDefinitionHelper.php',
    'DI\\Definition\\Helper\\CreateDefinitionHelper' => $vendorDir . '/php-di/php-di/src/Definition/Helper/CreateDefinitionHelper.php',
    'DI\\Definition\\Helper\\DefinitionHelper' => $vendorDir . '/php-di/php-di/src/Definition/Helper/DefinitionHelper.php',
    'DI\\Definition\\Helper\\FactoryDefinitionHelper' => $vendorDir . '/php-di/php-di/src/Definition/Helper/FactoryDefinitionHelper.php',
    'DI\\Definition\\InstanceDefinition' => $vendorDir . '/php-di/php-di/src/Definition/InstanceDefinition.php',
    'DI\\Definition\\ObjectDefinition' => $vendorDir . '/php-di/php-di/src/Definition/ObjectDefinition.php',
    'DI\\Definition\\ObjectDefinition\\MethodInjection' => $vendorDir . '/php-di/php-di/src/Definition/ObjectDefinition/MethodInjection.php',
    'DI\\Definition\\ObjectDefinition\\PropertyInjection' => $vendorDir . '/php-di/php-di/src/Definition/ObjectDefinition/PropertyInjection.php',
    'DI\\Definition\\Reference' => $vendorDir . '/php-di/php-di/src/Definition/Reference.php',
    'DI\\Definition\\Resolver\\ArrayResolver' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/ArrayResolver.php',
    'DI\\Definition\\Resolver\\DecoratorResolver' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/DecoratorResolver.php',
    'DI\\Definition\\Resolver\\DefinitionResolver' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/DefinitionResolver.php',
    'DI\\Definition\\Resolver\\EnvironmentVariableResolver' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/EnvironmentVariableResolver.php',
    'DI\\Definition\\Resolver\\FactoryResolver' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/FactoryResolver.php',
    'DI\\Definition\\Resolver\\InstanceInjector' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/InstanceInjector.php',
    'DI\\Definition\\Resolver\\ObjectCreator' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/ObjectCreator.php',
    'DI\\Definition\\Resolver\\ParameterResolver' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/ParameterResolver.php',
    'DI\\Definition\\Resolver\\ResolverDispatcher' => $vendorDir . '/php-di/php-di/src/Definition/Resolver/ResolverDispatcher.php',
    'DI\\Definition\\SelfResolvingDefinition' => $vendorDir . '/php-di/php-di/src/Definition/SelfResolvingDefinition.php',
    'DI\\Definition\\Source\\AnnotationBasedAutowiring' => $vendorDir . '/php-di/php-di/src/Definition/Source/AnnotationBasedAutowiring.php',
    'DI\\Definition\\Source\\Autowiring' => $vendorDir . '/php-di/php-di/src/Definition/Source/Autowiring.php',
    'DI\\Definition\\Source\\DefinitionArray' => $vendorDir . '/php-di/php-di/src/Definition/Source/DefinitionArray.php',
    'DI\\Definition\\Source\\DefinitionFile' => $vendorDir . '/php-di/php-di/src/Definition/Source/DefinitionFile.php',
    'DI\\Definition\\Source\\DefinitionNormalizer' => $vendorDir . '/php-di/php-di/src/Definition/Source/DefinitionNormalizer.php',
    'DI\\Definition\\Source\\DefinitionSource' => $vendorDir . '/php-di/php-di/src/Definition/Source/DefinitionSource.php',
    'DI\\Definition\\Source\\MutableDefinitionSource' => $vendorDir . '/php-di/php-di/src/Definition/Source/MutableDefinitionSource.php',
    'DI\\Definition\\Source\\NoAutowiring' => $vendorDir . '/php-di/php-di/src/Definition/Source/NoAutowiring.php',
    'DI\\Definition\\Source\\ReflectionBasedAutowiring' => $vendorDir . '/php-di/php-di/src/Definition/Source/ReflectionBasedAutowiring.php',
    'DI\\Definition\\Source\\SourceCache' => $vendorDir . '/php-di/php-di/src/Definition/Source/SourceCache.php',
    'DI\\Definition\\Source\\SourceChain' => $vendorDir . '/php-di/php-di/src/Definition/Source/SourceChain.php',
    'DI\\Definition\\StringDefinition' => $vendorDir . '/php-di/php-di/src/Definition/StringDefinition.php',
    'DI\\Definition\\ValueDefinition' => $vendorDir . '/php-di/php-di/src/Definition/ValueDefinition.php',
    'DI\\DependencyException' => $vendorDir . '/php-di/php-di/src/DependencyException.php',
    'DI\\FactoryInterface' => $vendorDir . '/php-di/php-di/src/FactoryInterface.php',
    'DI\\Factory\\RequestedEntry' => $vendorDir . '/php-di/php-di/src/Factory/RequestedEntry.php',
    'DI\\Invoker\\DefinitionParameterResolver' => $vendorDir . '/php-di/php-di/src/Invoker/DefinitionParameterResolver.php',
    'DI\\Invoker\\FactoryParameterResolver' => $vendorDir . '/php-di/php-di/src/Invoker/FactoryParameterResolver.php',
    'DI\\NotFoundException' => $vendorDir . '/php-di/php-di/src/NotFoundException.php',
    'DI\\Proxy\\ProxyFactory' => $vendorDir . '/php-di/php-di/src/Proxy/ProxyFactory.php',
    'Invoker\\CallableResolver' => $vendorDir . '/php-di/invoker/src/CallableResolver.php',
    'Invoker\\Exception\\InvocationException' => $vendorDir . '/php-di/invoker/src/Exception/InvocationException.php',
    'Invoker\\Exception\\NotCallableException' => $vendorDir . '/php-di/invoker/src/Exception/NotCallableException.php',
    'Invoker\\Exception\\NotEnoughParametersException' => $vendorDir . '/php-di/invoker/src/Exception/NotEnoughParametersException.php',
    'Invoker\\Invoker' => $vendorDir . '/php-di/invoker/src/Invoker.php',
    'Invoker\\InvokerInterface' => $vendorDir . '/php-di/invoker/src/InvokerInterface.php',
    'Invoker\\ParameterResolver\\AssociativeArrayResolver' => $vendorDir . '/php-di/invoker/src/ParameterResolver/AssociativeArrayResolver.php',
    'Invoker\\ParameterResolver\\Container\\ParameterNameContainerResolver' => $vendorDir . '/php-di/invoker/src/ParameterResolver/Container/ParameterNameContainerResolver.php',
    'Invoker\\ParameterResolver\\Container\\TypeHintContainerResolver' => $vendorDir . '/php-di/invoker/src/ParameterResolver/Container/TypeHintContainerResolver.php',
    'Invoker\\ParameterResolver\\DefaultValueResolver' => $vendorDir . '/php-di/invoker/src/ParameterResolver/DefaultValueResolver.php',
    'Invoker\\ParameterResolver\\NumericArrayResolver' => $vendorDir . '/php-di/invoker/src/ParameterResolver/NumericArrayResolver.php',
    'Invoker\\ParameterResolver\\ParameterResolver' => $vendorDir . '/php-di/invoker/src/ParameterResolver/ParameterResolver.php',
    'Invoker\\ParameterResolver\\ResolverChain' => $vendorDir . '/php-di/invoker/src/ParameterResolver/ResolverChain.php',
    'Invoker\\ParameterResolver\\TypeHintResolver' => $vendorDir . '/php-di/invoker/src/ParameterResolver/TypeHintResolver.php',
    'Invoker\\Reflection\\CallableReflection' => $vendorDir . '/php-di/invoker/src/Reflection/CallableReflection.php',
    'Laravel\\SerializableClosure\\Contracts\\Serializable' => $vendorDir . '/laravel/serializable-closure/src/Contracts/Serializable.php',
    'Laravel\\SerializableClosure\\Contracts\\Signer' => $vendorDir . '/laravel/serializable-closure/src/Contracts/Signer.php',
    'Laravel\\SerializableClosure\\Exceptions\\InvalidSignatureException' => $vendorDir . '/laravel/serializable-closure/src/Exceptions/InvalidSignatureException.php',
    'Laravel\\SerializableClosure\\Exceptions\\MissingSecretKeyException' => $vendorDir . '/laravel/serializable-closure/src/Exceptions/MissingSecretKeyException.php',
    'Laravel\\SerializableClosure\\Exceptions\\PhpVersionNotSupportedException' => $vendorDir . '/laravel/serializable-closure/src/Exceptions/PhpVersionNotSupportedException.php',
    'Laravel\\SerializableClosure\\SerializableClosure' => $vendorDir . '/laravel/serializable-closure/src/SerializableClosure.php',
    'Laravel\\SerializableClosure\\Serializers\\Native' => $vendorDir . '/laravel/serializable-closure/src/Serializers/Native.php',
    'Laravel\\SerializableClosure\\Serializers\\Signed' => $vendorDir . '/laravel/serializable-closure/src/Serializers/Signed.php',
    'Laravel\\SerializableClosure\\Signers\\Hmac' => $vendorDir . '/laravel/serializable-closure/src/Signers/Hmac.php',
    'Laravel\\SerializableClosure\\Support\\ClosureScope' => $vendorDir . '/laravel/serializable-closure/src/Support/ClosureScope.php',
    'Laravel\\SerializableClosure\\Support\\ClosureStream' => $vendorDir . '/laravel/serializable-closure/src/Support/ClosureStream.php',
    'Laravel\\SerializableClosure\\Support\\ReflectionClosure' => $vendorDir . '/laravel/serializable-closure/src/Support/ReflectionClosure.php',
    'Laravel\\SerializableClosure\\Support\\SelfReference' => $vendorDir . '/laravel/serializable-closure/src/Support/SelfReference.php',
    'PhpDocReader\\AnnotationException' => $vendorDir . '/php-di/phpdoc-reader/src/PhpDocReader/AnnotationException.php',
    'PhpDocReader\\PhpDocReader' => $vendorDir . '/php-di/phpdoc-reader/src/PhpDocReader/PhpDocReader.php',
    'PhpDocReader\\PhpParser\\TokenParser' => $vendorDir . '/php-di/phpdoc-reader/src/PhpDocReader/PhpParser/TokenParser.php',
    'PhpDocReader\\PhpParser\\UseStatementParser' => $vendorDir . '/php-di/phpdoc-reader/src/PhpDocReader/PhpParser/UseStatementParser.php',
    'Psr\\Container\\ContainerExceptionInterface' => $vendorDir . '/psr/container/src/ContainerExceptionInterface.php',
    'Psr\\Container\\ContainerInterface' => $vendorDir . '/psr/container/src/ContainerInterface.php',
    'Psr\\Container\\NotFoundExceptionInterface' => $vendorDir . '/psr/container/src/NotFoundExceptionInterface.php',
    'Symfony\\Component\\VarDumper\\Caster\\AmqpCaster' => $vendorDir . '/symfony/var-dumper/Caster/AmqpCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\ArgsStub' => $vendorDir . '/symfony/var-dumper/Caster/ArgsStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\Caster' => $vendorDir . '/symfony/var-dumper/Caster/Caster.php',
    'Symfony\\Component\\VarDumper\\Caster\\ClassStub' => $vendorDir . '/symfony/var-dumper/Caster/ClassStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\ConstStub' => $vendorDir . '/symfony/var-dumper/Caster/ConstStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\CutArrayStub' => $vendorDir . '/symfony/var-dumper/Caster/CutArrayStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\CutStub' => $vendorDir . '/symfony/var-dumper/Caster/CutStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\DOMCaster' => $vendorDir . '/symfony/var-dumper/Caster/DOMCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\DateCaster' => $vendorDir . '/symfony/var-dumper/Caster/DateCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster' => $vendorDir . '/symfony/var-dumper/Caster/DoctrineCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\DsCaster' => $vendorDir . '/symfony/var-dumper/Caster/DsCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\DsPairStub' => $vendorDir . '/symfony/var-dumper/Caster/DsPairStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\EnumStub' => $vendorDir . '/symfony/var-dumper/Caster/EnumStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster' => $vendorDir . '/symfony/var-dumper/Caster/ExceptionCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\FiberCaster' => $vendorDir . '/symfony/var-dumper/Caster/FiberCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\FrameStub' => $vendorDir . '/symfony/var-dumper/Caster/FrameStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\GmpCaster' => $vendorDir . '/symfony/var-dumper/Caster/GmpCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\ImagineCaster' => $vendorDir . '/symfony/var-dumper/Caster/ImagineCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\ImgStub' => $vendorDir . '/symfony/var-dumper/Caster/ImgStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\IntlCaster' => $vendorDir . '/symfony/var-dumper/Caster/IntlCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\LinkStub' => $vendorDir . '/symfony/var-dumper/Caster/LinkStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\MemcachedCaster' => $vendorDir . '/symfony/var-dumper/Caster/MemcachedCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\MysqliCaster' => $vendorDir . '/symfony/var-dumper/Caster/MysqliCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\PdoCaster' => $vendorDir . '/symfony/var-dumper/Caster/PdoCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster' => $vendorDir . '/symfony/var-dumper/Caster/PgSqlCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\ProxyManagerCaster' => $vendorDir . '/symfony/var-dumper/Caster/ProxyManagerCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster' => $vendorDir . '/symfony/var-dumper/Caster/RdKafkaCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\RedisCaster' => $vendorDir . '/symfony/var-dumper/Caster/RedisCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster' => $vendorDir . '/symfony/var-dumper/Caster/ReflectionCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\ResourceCaster' => $vendorDir . '/symfony/var-dumper/Caster/ResourceCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\SplCaster' => $vendorDir . '/symfony/var-dumper/Caster/SplCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\StubCaster' => $vendorDir . '/symfony/var-dumper/Caster/StubCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster' => $vendorDir . '/symfony/var-dumper/Caster/SymfonyCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\TraceStub' => $vendorDir . '/symfony/var-dumper/Caster/TraceStub.php',
    'Symfony\\Component\\VarDumper\\Caster\\UuidCaster' => $vendorDir . '/symfony/var-dumper/Caster/UuidCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\XmlReaderCaster' => $vendorDir . '/symfony/var-dumper/Caster/XmlReaderCaster.php',
    'Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster' => $vendorDir . '/symfony/var-dumper/Caster/XmlResourceCaster.php',
    'Symfony\\Component\\VarDumper\\Cloner\\AbstractCloner' => $vendorDir . '/symfony/var-dumper/Cloner/AbstractCloner.php',
    'Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface' => $vendorDir . '/symfony/var-dumper/Cloner/ClonerInterface.php',
    'Symfony\\Component\\VarDumper\\Cloner\\Cursor' => $vendorDir . '/symfony/var-dumper/Cloner/Cursor.php',
    'Symfony\\Component\\VarDumper\\Cloner\\Data' => $vendorDir . '/symfony/var-dumper/Cloner/Data.php',
    'Symfony\\Component\\VarDumper\\Cloner\\DumperInterface' => $vendorDir . '/symfony/var-dumper/Cloner/DumperInterface.php',
    'Symfony\\Component\\VarDumper\\Cloner\\Stub' => $vendorDir . '/symfony/var-dumper/Cloner/Stub.php',
    'Symfony\\Component\\VarDumper\\Cloner\\VarCloner' => $vendorDir . '/symfony/var-dumper/Cloner/VarCloner.php',
    'Symfony\\Component\\VarDumper\\Command\\Descriptor\\CliDescriptor' => $vendorDir . '/symfony/var-dumper/Command/Descriptor/CliDescriptor.php',
    'Symfony\\Component\\VarDumper\\Command\\Descriptor\\DumpDescriptorInterface' => $vendorDir . '/symfony/var-dumper/Command/Descriptor/DumpDescriptorInterface.php',
    'Symfony\\Component\\VarDumper\\Command\\Descriptor\\HtmlDescriptor' => $vendorDir . '/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php',
    'Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand' => $vendorDir . '/symfony/var-dumper/Command/ServerDumpCommand.php',
    'Symfony\\Component\\VarDumper\\Dumper\\AbstractDumper' => $vendorDir . '/symfony/var-dumper/Dumper/AbstractDumper.php',
    'Symfony\\Component\\VarDumper\\Dumper\\CliDumper' => $vendorDir . '/symfony/var-dumper/Dumper/CliDumper.php',
    'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\CliContextProvider' => $vendorDir . '/symfony/var-dumper/Dumper/ContextProvider/CliContextProvider.php',
    'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface' => $vendorDir . '/symfony/var-dumper/Dumper/ContextProvider/ContextProviderInterface.php',
    'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\RequestContextProvider' => $vendorDir . '/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php',
    'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\SourceContextProvider' => $vendorDir . '/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php',
    'Symfony\\Component\\VarDumper\\Dumper\\ContextualizedDumper' => $vendorDir . '/symfony/var-dumper/Dumper/ContextualizedDumper.php',
    'Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface' => $vendorDir . '/symfony/var-dumper/Dumper/DataDumperInterface.php',
    'Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper' => $vendorDir . '/symfony/var-dumper/Dumper/HtmlDumper.php',
    'Symfony\\Component\\VarDumper\\Dumper\\ServerDumper' => $vendorDir . '/symfony/var-dumper/Dumper/ServerDumper.php',
    'Symfony\\Component\\VarDumper\\Exception\\ThrowingCasterException' => $vendorDir . '/symfony/var-dumper/Exception/ThrowingCasterException.php',
    'Symfony\\Component\\VarDumper\\Server\\Connection' => $vendorDir . '/symfony/var-dumper/Server/Connection.php',
    'Symfony\\Component\\VarDumper\\Server\\DumpServer' => $vendorDir . '/symfony/var-dumper/Server/DumpServer.php',
    'Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait' => $vendorDir . '/symfony/var-dumper/Test/VarDumperTestTrait.php',
    'Symfony\\Component\\VarDumper\\VarDumper' => $vendorDir . '/symfony/var-dumper/VarDumper.php',
    'Symfony\\Polyfill\\Mbstring\\Mbstring' => $vendorDir . '/symfony/polyfill-mbstring/Mbstring.php',
);
