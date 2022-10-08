<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4b69a2c5ee15cf30397a8dab329b71d
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'b33e3d135e5d9e47d845c576147bda89' => __DIR__ . '/..' . '/php-di/php-di/src/functions.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
            'PhpDocReader\\' => 13,
        ),
        'L' => 
        array (
            'Laravel\\SerializableClosure\\' => 28,
        ),
        'I' => 
        array (
            'Invoker\\' => 8,
        ),
        'D' => 
        array (
            'DI\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PhpDocReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader',
        ),
        'Laravel\\SerializableClosure\\' => 
        array (
            0 => __DIR__ . '/..' . '/laravel/serializable-closure/src',
        ),
        'Invoker\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/invoker/src',
        ),
        'DI\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/php-di/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\StrategyPattern\\Context\\Serializer' => __DIR__ . '/../..' . '/src/StrategyPattern/Context/Serializer.php',
        'App\\StrategyPattern\\Interface\\NormalizerInterface' => __DIR__ . '/../..' . '/src/StrategyPattern/Interface/NormalizerInterface.php',
        'App\\StrategyPattern\\Interface\\StrategyInterface' => __DIR__ . '/../..' . '/src/StrategyPattern/Interface/StrategyInterface.php',
        'App\\StrategyPattern\\Normalizer\\JsonNormalizer' => __DIR__ . '/../..' . '/src/StrategyPattern/Normalizer/JsonNormalizer.php',
        'App\\StrategyPattern\\Normalizer\\ObjectNormalizer' => __DIR__ . '/../..' . '/src/StrategyPattern/Normalizer/ObjectNormalizer.php',
        'App\\StrategyPattern\\Normalizer\\StringNormalizer' => __DIR__ . '/../..' . '/src/StrategyPattern/Normalizer/StringNormalizer.php',
        'App\\StrategyPattern\\Normalizer\\XmlNormalizer' => __DIR__ . '/../..' . '/src/StrategyPattern/Normalizer/XmlNormalizer.php',
        'App\\StrategyPattern\\Strategy\\PlainTextFormater' => __DIR__ . '/../..' . '/src/StrategyPattern/Strategy/PlainTextFormater.php',
        'App\\StrategyPattern\\Strategy\\XmlFormater' => __DIR__ . '/../..' . '/src/StrategyPattern/Strategy/XmlFormater.php',
        'App\\StrategyPattern\\Strategy\\jsonFormater' => __DIR__ . '/../..' . '/src/StrategyPattern/Strategy/jsonFormater.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DI\\Annotation\\Inject' => __DIR__ . '/..' . '/php-di/php-di/src/Annotation/Inject.php',
        'DI\\Annotation\\Injectable' => __DIR__ . '/..' . '/php-di/php-di/src/Annotation/Injectable.php',
        'DI\\CompiledContainer' => __DIR__ . '/..' . '/php-di/php-di/src/CompiledContainer.php',
        'DI\\Compiler\\Compiler' => __DIR__ . '/..' . '/php-di/php-di/src/Compiler/Compiler.php',
        'DI\\Compiler\\ObjectCreationCompiler' => __DIR__ . '/..' . '/php-di/php-di/src/Compiler/ObjectCreationCompiler.php',
        'DI\\Compiler\\RequestedEntryHolder' => __DIR__ . '/..' . '/php-di/php-di/src/Compiler/RequestedEntryHolder.php',
        'DI\\Container' => __DIR__ . '/..' . '/php-di/php-di/src/Container.php',
        'DI\\ContainerBuilder' => __DIR__ . '/..' . '/php-di/php-di/src/ContainerBuilder.php',
        'DI\\Definition\\ArrayDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ArrayDefinition.php',
        'DI\\Definition\\ArrayDefinitionExtension' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ArrayDefinitionExtension.php',
        'DI\\Definition\\AutowireDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/AutowireDefinition.php',
        'DI\\Definition\\DecoratorDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/DecoratorDefinition.php',
        'DI\\Definition\\Definition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Definition.php',
        'DI\\Definition\\Dumper\\ObjectDefinitionDumper' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Dumper/ObjectDefinitionDumper.php',
        'DI\\Definition\\EnvironmentVariableDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/EnvironmentVariableDefinition.php',
        'DI\\Definition\\Exception\\InvalidAnnotation' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Exception/InvalidAnnotation.php',
        'DI\\Definition\\Exception\\InvalidDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Exception/InvalidDefinition.php',
        'DI\\Definition\\ExtendsPreviousDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ExtendsPreviousDefinition.php',
        'DI\\Definition\\FactoryDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/FactoryDefinition.php',
        'DI\\Definition\\Helper\\AutowireDefinitionHelper' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Helper/AutowireDefinitionHelper.php',
        'DI\\Definition\\Helper\\CreateDefinitionHelper' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Helper/CreateDefinitionHelper.php',
        'DI\\Definition\\Helper\\DefinitionHelper' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Helper/DefinitionHelper.php',
        'DI\\Definition\\Helper\\FactoryDefinitionHelper' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Helper/FactoryDefinitionHelper.php',
        'DI\\Definition\\InstanceDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/InstanceDefinition.php',
        'DI\\Definition\\ObjectDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ObjectDefinition.php',
        'DI\\Definition\\ObjectDefinition\\MethodInjection' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ObjectDefinition/MethodInjection.php',
        'DI\\Definition\\ObjectDefinition\\PropertyInjection' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ObjectDefinition/PropertyInjection.php',
        'DI\\Definition\\Reference' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Reference.php',
        'DI\\Definition\\Resolver\\ArrayResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/ArrayResolver.php',
        'DI\\Definition\\Resolver\\DecoratorResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/DecoratorResolver.php',
        'DI\\Definition\\Resolver\\DefinitionResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/DefinitionResolver.php',
        'DI\\Definition\\Resolver\\EnvironmentVariableResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/EnvironmentVariableResolver.php',
        'DI\\Definition\\Resolver\\FactoryResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/FactoryResolver.php',
        'DI\\Definition\\Resolver\\InstanceInjector' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/InstanceInjector.php',
        'DI\\Definition\\Resolver\\ObjectCreator' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/ObjectCreator.php',
        'DI\\Definition\\Resolver\\ParameterResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/ParameterResolver.php',
        'DI\\Definition\\Resolver\\ResolverDispatcher' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/ResolverDispatcher.php',
        'DI\\Definition\\SelfResolvingDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/SelfResolvingDefinition.php',
        'DI\\Definition\\Source\\AnnotationBasedAutowiring' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/AnnotationBasedAutowiring.php',
        'DI\\Definition\\Source\\Autowiring' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/Autowiring.php',
        'DI\\Definition\\Source\\DefinitionArray' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/DefinitionArray.php',
        'DI\\Definition\\Source\\DefinitionFile' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/DefinitionFile.php',
        'DI\\Definition\\Source\\DefinitionNormalizer' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/DefinitionNormalizer.php',
        'DI\\Definition\\Source\\DefinitionSource' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/DefinitionSource.php',
        'DI\\Definition\\Source\\MutableDefinitionSource' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/MutableDefinitionSource.php',
        'DI\\Definition\\Source\\NoAutowiring' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/NoAutowiring.php',
        'DI\\Definition\\Source\\ReflectionBasedAutowiring' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/ReflectionBasedAutowiring.php',
        'DI\\Definition\\Source\\SourceCache' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/SourceCache.php',
        'DI\\Definition\\Source\\SourceChain' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/SourceChain.php',
        'DI\\Definition\\StringDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/StringDefinition.php',
        'DI\\Definition\\ValueDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ValueDefinition.php',
        'DI\\DependencyException' => __DIR__ . '/..' . '/php-di/php-di/src/DependencyException.php',
        'DI\\FactoryInterface' => __DIR__ . '/..' . '/php-di/php-di/src/FactoryInterface.php',
        'DI\\Factory\\RequestedEntry' => __DIR__ . '/..' . '/php-di/php-di/src/Factory/RequestedEntry.php',
        'DI\\Invoker\\DefinitionParameterResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Invoker/DefinitionParameterResolver.php',
        'DI\\Invoker\\FactoryParameterResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Invoker/FactoryParameterResolver.php',
        'DI\\NotFoundException' => __DIR__ . '/..' . '/php-di/php-di/src/NotFoundException.php',
        'DI\\Proxy\\ProxyFactory' => __DIR__ . '/..' . '/php-di/php-di/src/Proxy/ProxyFactory.php',
        'Invoker\\CallableResolver' => __DIR__ . '/..' . '/php-di/invoker/src/CallableResolver.php',
        'Invoker\\Exception\\InvocationException' => __DIR__ . '/..' . '/php-di/invoker/src/Exception/InvocationException.php',
        'Invoker\\Exception\\NotCallableException' => __DIR__ . '/..' . '/php-di/invoker/src/Exception/NotCallableException.php',
        'Invoker\\Exception\\NotEnoughParametersException' => __DIR__ . '/..' . '/php-di/invoker/src/Exception/NotEnoughParametersException.php',
        'Invoker\\Invoker' => __DIR__ . '/..' . '/php-di/invoker/src/Invoker.php',
        'Invoker\\InvokerInterface' => __DIR__ . '/..' . '/php-di/invoker/src/InvokerInterface.php',
        'Invoker\\ParameterResolver\\AssociativeArrayResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/AssociativeArrayResolver.php',
        'Invoker\\ParameterResolver\\Container\\ParameterNameContainerResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/Container/ParameterNameContainerResolver.php',
        'Invoker\\ParameterResolver\\Container\\TypeHintContainerResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/Container/TypeHintContainerResolver.php',
        'Invoker\\ParameterResolver\\DefaultValueResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/DefaultValueResolver.php',
        'Invoker\\ParameterResolver\\NumericArrayResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/NumericArrayResolver.php',
        'Invoker\\ParameterResolver\\ParameterResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/ParameterResolver.php',
        'Invoker\\ParameterResolver\\ResolverChain' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/ResolverChain.php',
        'Invoker\\ParameterResolver\\TypeHintResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/TypeHintResolver.php',
        'Invoker\\Reflection\\CallableReflection' => __DIR__ . '/..' . '/php-di/invoker/src/Reflection/CallableReflection.php',
        'Laravel\\SerializableClosure\\Contracts\\Serializable' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Contracts/Serializable.php',
        'Laravel\\SerializableClosure\\Contracts\\Signer' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Contracts/Signer.php',
        'Laravel\\SerializableClosure\\Exceptions\\InvalidSignatureException' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Exceptions/InvalidSignatureException.php',
        'Laravel\\SerializableClosure\\Exceptions\\MissingSecretKeyException' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Exceptions/MissingSecretKeyException.php',
        'Laravel\\SerializableClosure\\Exceptions\\PhpVersionNotSupportedException' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Exceptions/PhpVersionNotSupportedException.php',
        'Laravel\\SerializableClosure\\SerializableClosure' => __DIR__ . '/..' . '/laravel/serializable-closure/src/SerializableClosure.php',
        'Laravel\\SerializableClosure\\Serializers\\Native' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Serializers/Native.php',
        'Laravel\\SerializableClosure\\Serializers\\Signed' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Serializers/Signed.php',
        'Laravel\\SerializableClosure\\Signers\\Hmac' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Signers/Hmac.php',
        'Laravel\\SerializableClosure\\Support\\ClosureScope' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Support/ClosureScope.php',
        'Laravel\\SerializableClosure\\Support\\ClosureStream' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Support/ClosureStream.php',
        'Laravel\\SerializableClosure\\Support\\ReflectionClosure' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Support/ReflectionClosure.php',
        'Laravel\\SerializableClosure\\Support\\SelfReference' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Support/SelfReference.php',
        'PhpDocReader\\AnnotationException' => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader/AnnotationException.php',
        'PhpDocReader\\PhpDocReader' => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader/PhpDocReader.php',
        'PhpDocReader\\PhpParser\\TokenParser' => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader/PhpParser/TokenParser.php',
        'PhpDocReader\\PhpParser\\UseStatementParser' => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader/PhpParser/UseStatementParser.php',
        'Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'Symfony\\Component\\VarDumper\\Caster\\AmqpCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/AmqpCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ArgsStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ArgsStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\Caster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/Caster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ClassStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ClassStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\ConstStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ConstStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\CutArrayStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/CutArrayStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\CutStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/CutStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\DOMCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DOMCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DateCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DateCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DoctrineCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DoctrineCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DsCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DsCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\DsPairStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/DsPairStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\EnumStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/EnumStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\ExceptionCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ExceptionCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\FiberCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/FiberCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\FrameStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/FrameStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\GmpCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/GmpCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ImagineCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ImagineCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ImgStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ImgStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\IntlCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/IntlCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\LinkStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/LinkStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\MemcachedCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/MemcachedCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\MysqliCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/MysqliCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\PdoCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/PdoCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\PgSqlCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/PgSqlCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ProxyManagerCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ProxyManagerCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\RdKafkaCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/RdKafkaCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\RedisCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/RedisCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ReflectionCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\ResourceCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/ResourceCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\SplCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/SplCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\StubCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/StubCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\SymfonyCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/SymfonyCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\TraceStub' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/TraceStub.php',
        'Symfony\\Component\\VarDumper\\Caster\\UuidCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/UuidCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\XmlReaderCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/XmlReaderCaster.php',
        'Symfony\\Component\\VarDumper\\Caster\\XmlResourceCaster' => __DIR__ . '/..' . '/symfony/var-dumper/Caster/XmlResourceCaster.php',
        'Symfony\\Component\\VarDumper\\Cloner\\AbstractCloner' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/AbstractCloner.php',
        'Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/ClonerInterface.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Cursor' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Cursor.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Data' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Data.php',
        'Symfony\\Component\\VarDumper\\Cloner\\DumperInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/DumperInterface.php',
        'Symfony\\Component\\VarDumper\\Cloner\\Stub' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/Stub.php',
        'Symfony\\Component\\VarDumper\\Cloner\\VarCloner' => __DIR__ . '/..' . '/symfony/var-dumper/Cloner/VarCloner.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\CliDescriptor' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/CliDescriptor.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\DumpDescriptorInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/DumpDescriptorInterface.php',
        'Symfony\\Component\\VarDumper\\Command\\Descriptor\\HtmlDescriptor' => __DIR__ . '/..' . '/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php',
        'Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand' => __DIR__ . '/..' . '/symfony/var-dumper/Command/ServerDumpCommand.php',
        'Symfony\\Component\\VarDumper\\Dumper\\AbstractDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/AbstractDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\CliDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/CliDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\CliContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/CliContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/ContextProviderInterface.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\RequestContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\SourceContextProvider' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ContextualizedDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ContextualizedDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/DataDumperInterface.php',
        'Symfony\\Component\\VarDumper\\Dumper\\HtmlDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/HtmlDumper.php',
        'Symfony\\Component\\VarDumper\\Dumper\\ServerDumper' => __DIR__ . '/..' . '/symfony/var-dumper/Dumper/ServerDumper.php',
        'Symfony\\Component\\VarDumper\\Exception\\ThrowingCasterException' => __DIR__ . '/..' . '/symfony/var-dumper/Exception/ThrowingCasterException.php',
        'Symfony\\Component\\VarDumper\\Server\\Connection' => __DIR__ . '/..' . '/symfony/var-dumper/Server/Connection.php',
        'Symfony\\Component\\VarDumper\\Server\\DumpServer' => __DIR__ . '/..' . '/symfony/var-dumper/Server/DumpServer.php',
        'Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait' => __DIR__ . '/..' . '/symfony/var-dumper/Test/VarDumperTestTrait.php',
        'Symfony\\Component\\VarDumper\\VarDumper' => __DIR__ . '/..' . '/symfony/var-dumper/VarDumper.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita4b69a2c5ee15cf30397a8dab329b71d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita4b69a2c5ee15cf30397a8dab329b71d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita4b69a2c5ee15cf30397a8dab329b71d::$classMap;

        }, null, ClassLoader::class);
    }
}
