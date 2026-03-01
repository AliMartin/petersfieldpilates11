<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1771844781,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.39',
  'fnsr' => false,
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80327,
  'projectConfig' => '{conditionalTags: {mglaman\\PHPStanDrupal\\Reflection\\EntityFieldsViaMagicReflectionExtension: {phpstan.broker.propertiesClassReflectionExtension: %drupal.extensions.entityFieldsViaMagicReflection%}, mglaman\\PHPStanDrupal\\Reflection\\EntityFieldMethodsViaMagicReflectionExtension: {phpstan.broker.methodsClassReflectionExtension: %drupal.extensions.entityFieldMethodsViaMagicReflection%}, mglaman\\PHPStanDrupal\\Type\\EntityQuery\\EntityQueryDynamicReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %drupal.extensions.entityQuery%}, mglaman\\PHPStanDrupal\\Type\\EntityQuery\\EntityQueryAccessCheckDynamicReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %drupal.extensions.entityQuery%}, mglaman\\PHPStanDrupal\\Type\\EntityQuery\\AccessCheckTypeSpecifyingExtension: {phpstan.typeSpecifier.methodTypeSpecifyingExtension: %drupal.extensions.entityQuery%}, mglaman\\PHPStanDrupal\\Type\\EntityStorage\\GetQueryReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %drupal.extensions.entityQuery%}, mglaman\\PHPStanDrupal\\Type\\EntityRepositoryReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %drupal.extensions.entityRepository%}, mglaman\\PHPStanDrupal\\Drupal\\DrupalStubFilesExtension: {phpstan.stubFilesExtension: %drupal.extensions.stubFiles%}, PHPStan\\Rules\\Deprecations\\CallWithDeprecatedIniOptionRule: {phpstan.rules.rule: %featureToggles.bleedingEdge%}, mglaman\\PHPStanDrupal\\Rules\\Drupal\\HookFormAlterRule: {phpstan.rules.rule: %drupal.rules.hookRules%}, mglaman\\PHPStanDrupal\\Rules\\Drupal\\Tests\\TestClassSuffixNameRule: {phpstan.rules.rule: %drupal.rules.testClassSuffixNameRule%}, mglaman\\PHPStanDrupal\\Rules\\Drupal\\DependencySerializationTraitPropertyRule: {phpstan.rules.rule: %drupal.rules.dependencySerializationTraitPropertyRule%}, mglaman\\PHPStanDrupal\\Rules\\Drupal\\AccessResultConditionRule: {phpstan.rules.rule: %drupal.rules.accessResultConditionRule%}, mglaman\\PHPStanDrupal\\Rules\\Classes\\ClassExtendsInternalClassRule: {phpstan.rules.rule: %drupal.rules.classExtendsInternalClassRule%}, mglaman\\PHPStanDrupal\\Rules\\Classes\\PluginManagerInspectionRule: {phpstan.rules.rule: %drupal.rules.pluginManagerInspectionRule%}, mglaman\\PHPStanDrupal\\Rules\\Drupal\\CacheableDependencyRule: {phpstan.rules.rule: %drupal.rules.cacheableDependencyRule%}}, parameters: {bootstrapFiles: [drupal-autoloader.php], excludePaths: {analyseAndScan: [*.api.php, */tests/fixtures/*.php, */tests/Drupal/Tests/Listeners/Legacy/*, */tests/fixtures/*.php, */settings*.php, */bower_components/*, */node_modules/*], analyse: []}, fileExtensions: [module, theme, inc, install, profile, engine], dynamicConstantNames: [Drupal::VERSION], scanFiles: [stubs/Twig/functions.stub], drupal: {drupal_root: null, bleedingEdge: {checkDeprecatedHooksInApiFiles: false, checkCoreDeprecatedHooksInApiFiles: false, checkContribDeprecatedHooksInApiFiles: false}, extensions: {entityFieldsViaMagicReflection: true, entityFieldMethodsViaMagicReflection: true, entityQuery: true, entityRepository: true, stubFiles: true}, rules: {testClassSuffixNameRule: false, dependencySerializationTraitPropertyRule: false, accessResultConditionRule: false, classExtendsInternalClassRule: false, pluginManagerInspectionRule: false, cacheableDependencyRule: false, hookRules: false}, entityMapping: {aggregator_feed: {class: Drupal\\aggregator\\Entity\\Feed, storage: Drupal\\aggregator\\FeedStorage}, aggregator_item: {class: Drupal\\aggregator\\Entity\\Item, storage: Drupal\\aggregator\\ItemStorage}, block: {class: Drupal\\block\\Entity\\Block, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, block_content: {class: Drupal\\block_content\\Entity\\BlockContent, storage: Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage}, block_content_type: {class: Drupal\\block_content\\Entity\\BlockContentType, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, comment_type: {class: Drupal\\comment\\Entity\\CommentType, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, comment: {class: Drupal\\comment\\Entity\\Comment, storage: Drupal\\comment\\CommentStorage}, contact_form: {class: Drupal\\contact\\Entity\\ContactForm, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, contact_message: {class: Drupal\\contact\\Entity\\Message, storage: Drupal\\Core\\Entity\\ContentEntityNullStorage}, content_moderation_state: {class: Drupal\\content_moderation\\Entity\\ContentModerationState, storage: Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage}, editor: {class: Drupal\\editor\\Entity\\Editor, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, field_config: {class: Drupal\\field\\Entity\\FieldConfig, storage: Drupal\\field\\FieldConfigStorage}, field_storage_config: {class: Drupal\\field\\Entity\\FieldStorageConfig, storage: Drupal\\field\\FieldStorageConfigStorage}, file: {class: Drupal\\file\\Entity\\File, storage: Drupal\\file\\FileStorage}, filter_format: {class: Drupal\\filter\\Entity\\FilterFormat, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, image_style: {class: Drupal\\image\\Entity\\ImageStyle, storage: Drupal\\image\\ImageStyleStorage}, imce_profile: {class: Drupal\\imce\\Entity\\ImceProfile, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, configurable_language: {class: Drupal\\language\\Entity\\ConfigurableLanguage, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, language_content_settings: {class: Drupal\\language\\Entity\\ContentLanguageSettings, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, media_type: {class: Drupal\\media\\Entity\\MediaType, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, media: {class: Drupal\\media\\Entity\\Media, storage: Drupal\\media\\MediaStorage}, menu_link_content: {class: Drupal\\menu_link_content\\Entity\\MenuLinkContent, storage: \\Drupal\\menu_link_content\\MenuLinkContentStorage}, metatag_defaults: {class: Drupal\\metatag\\Entity\\MetatagDefaults, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, node_type: {class: Drupal\\node\\Entity\\NodeType, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, node: {class: Drupal\\node\\Entity\\Node, storage: Drupal\\node\\NodeStorage}, path_alias: {class: Drupal\\path_alias\\Entity\\PathAlias, storage: Drupal\\path_alias\\PathAliasStorage}, rdf_mapping: {class: Drupal\\rdf\\Entity\\RdfMapping, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, responsive_image_style: {class: Drupal\\responsive_image\\Entity\\ResponsiveImageStyle, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, search_page: {class: Drupal\\search\\Entity\\SearchPage, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, search_api_server: {class: Drupal\\search_api\\Entity\\Server, storage: Drupal\\search_api\\Entity\\SearchApiConfigEntityStorage}, search_api_index: {class: Drupal\\search_api\\Entity\\Index, storage: Drupal\\search_api\\Entity\\SearchApiConfigEntityStorage}, search_api_task: {class: Drupal\\search_api\\Entity\\Task, storage: Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage}, shortcut_set: {class: Drupal\\shortcut\\Entity\\ShortcutSet, storage: Drupal\\shortcut\\ShortcutSetStorage}, shortcut: {class: Drupal\\shortcut\\Entity\\Shortcut, storage: Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage}, action: {class: Drupal\\system\\Entity\\Action, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, menu: {class: Drupal\\system\\Entity\\Menu, storage: Drupal\\system\\MenuStorage}, taxonomy_term: {class: Drupal\\taxonomy\\Entity\\Term, storage: Drupal\\taxonomy\\TermStorage}, taxonomy_vocabulary: {class: Drupal\\taxonomy\\Entity\\Vocabulary, storage: Drupal\\taxonomy\\VocabularyStorage}, tour: {class: Drupal\\tour\\Entity\\Tour, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, user: {class: Drupal\\user\\Entity\\User, storage: Drupal\\user\\UserStorage}, user_role: {class: Drupal\\user\\Entity\\Role, storage: Drupal\\user\\RoleStorage}, webform: {class: Drupal\\webform\\Entity\\Webform, storage: \\Drupal\\webform\\WebformEntityStorage}, webform_submission: {class: Drupal\\webform\\Entity\\WebformSubmission, storage: Drupal\\webform\\WebformSubmissionStorage}, webform_options: {class: Drupal\\webform\\Entity\\WebformOptions, storage: \\Drupal\\webform\\WebformOptionsStorage}, workflow: {class: Drupal\\workflows\\Entity\\Workflow, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, pathauto_pattern: {class: Drupal\\pathauto\\Entity\\PathautoPattern, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, view: {class: Drupal\\views\\Entity\\View, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, date_format: {class: Drupal\\Core\\Datetime\\Entity\\DateFormat, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, entity_form_mode: {class: Drupal\\Core\\Entity\\Entity\\EntityFormMode, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, entity_view_display: {class: Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay, storage: Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplayStorage}, entity_form_display: {class: Drupal\\Core\\Entity\\Entity\\EntityFormDisplay, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, entity_view_mode: {class: Drupal\\Core\\Entity\\Entity\\EntityViewMode, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, base_field_override: {class: Drupal\\Core\\Field\\Entity\\BaseFieldOverride, storage: Drupal\\Core\\Field\\BaseFieldOverrideStorage}}}, deprecationRulesInstalled: true, tmpDir: /var/www/html/tmp/upgrade_status/phpstan, customRulesetUsed: true, level: 0}, rules: [PHPStan\\Rules\\Deprecations\\FetchingDeprecatedConstRule, mglaman\\PHPStanDrupal\\Rules\\Drupal\\Coder\\DiscouragedFunctionsRule, mglaman\\PHPStanDrupal\\Rules\\Drupal\\GlobalDrupalDependencyInjectionRule, mglaman\\PHPStanDrupal\\Rules\\Drupal\\PluginManager\\PluginManagerSetsCacheBackendRule, mglaman\\PHPStanDrupal\\Rules\\Drupal\\RenderCallbackRule, mglaman\\PHPStanDrupal\\Rules\\Deprecations\\StaticServiceDeprecatedServiceRule, mglaman\\PHPStanDrupal\\Rules\\Deprecations\\GetDeprecatedServiceRule, mglaman\\PHPStanDrupal\\Rules\\Drupal\\Tests\\BrowserTestBaseDefaultThemeRule, mglaman\\PHPStanDrupal\\Rules\\Deprecations\\ConfigEntityConfigExportRule, mglaman\\PHPStanDrupal\\Rules\\Deprecations\\PluginAnnotationContextDefinitionsRule, mglaman\\PHPStanDrupal\\Rules\\Drupal\\ModuleLoadInclude, mglaman\\PHPStanDrupal\\Rules\\Drupal\\LoadIncludes, mglaman\\PHPStanDrupal\\Rules\\Drupal\\EntityQuery\\EntityQueryHasAccessCheckRule, mglaman\\PHPStanDrupal\\Rules\\Drupal\\TestClassesProtectedPropertyModulesRule], services: [{class: mglaman\\PHPStanDrupal\\Drupal\\ServiceMap}, {class: mglaman\\PHPStanDrupal\\Drupal\\ExtensionMap}, {class: mglaman\\PHPStanDrupal\\Drupal\\EntityDataRepository, arguments: {entityMapping: %drupal.entityMapping%}}, {class: mglaman\\PHPStanDrupal\\Type\\EntityIdNarrowedByNew, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\EntityTypeKeyByExistence, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\EntityTypeLinkTemplateByExistence, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\EntityTypeManagerGetStorageDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\EntityStorage\\EntityStorageDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\EntityRepositoryReturnTypeExtension}, {class: mglaman\\PHPStanDrupal\\Type\\EntityStorage\\GetQueryReturnTypeExtension}, {class: mglaman\\PHPStanDrupal\\Type\\ContainerDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\DrupalClassResolverDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\EntityQuery\\EntityQueryDynamicReturnTypeExtension}, {class: mglaman\\PHPStanDrupal\\Type\\EntityQuery\\EntityQueryAccessCheckDynamicReturnTypeExtension}, {class: mglaman\\PHPStanDrupal\\Type\\EntityAccessControlHandlerReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\DrupalClassResolverDynamicStaticReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\DrupalServiceDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\DrupalStaticEntityQueryDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Reflection\\EntityFieldsViaMagicReflectionExtension}, {class: mglaman\\PHPStanDrupal\\Reflection\\EntityFieldMethodsViaMagicReflectionExtension}, {class: mglaman\\PHPStanDrupal\\Drupal\\DrupalStubFilesExtension}, {class: mglaman\\PHPStanDrupal\\Type\\EntityQuery\\AccessCheckTypeSpecifyingExtension}, {class: mglaman\\PHPStanDrupal\\DeprecatedScope\\GroupLegacyScope, tags: [phpstan.deprecations.deprecatedScopeResolver]}, {class: mglaman\\PHPStanDrupal\\DeprecatedScope\\IgnoreDeprecationsScope, tags: [phpstan.deprecations.deprecatedScopeResolver]}, {class: mglaman\\PHPStanDrupal\\DeprecatedScope\\DeprecationHelperScope, tags: [phpstan.deprecations.deprecatedScopeResolver]}, {class: mglaman\\PHPStanDrupal\\Type\\InspectorTypeExtension, tags: [phpstan.typeSpecifier.staticMethodTypeSpecifyingExtension]}, {class: PHPStan\\DependencyInjection\\LazyDeprecatedScopeResolverProvider}, {class: PHPStan\\Rules\\Deprecations\\DeprecatedScopeHelper, factory: @PHPStan\\DependencyInjection\\LazyDeprecatedScopeResolverProvider::get}, {class: PHPStan\\Rules\\Deprecations\\DefaultDeprecatedScopeResolver, tags: [phpstan.deprecations.deprecatedScopeResolver]}, {class: PHPStan\\Rules\\Deprecations\\CallWithDeprecatedIniOptionRule}, {class: PHPStan\\Rules\\Deprecations\\RestrictedDeprecatedClassConstantUsageExtension, tags: [phpstan.restrictedClassConstantUsageExtension]}, {class: PHPStan\\Rules\\Deprecations\\RestrictedDeprecatedFunctionUsageExtension, tags: [phpstan.restrictedFunctionUsageExtension]}, {class: PHPStan\\Rules\\Deprecations\\RestrictedDeprecatedMethodUsageExtension, tags: [phpstan.restrictedMethodUsageExtension]}, {class: PHPStan\\Rules\\Deprecations\\RestrictedDeprecatedPropertyUsageExtension, tags: [phpstan.restrictedPropertyUsageExtension]}, {class: PHPStan\\Rules\\Deprecations\\RestrictedDeprecatedClassNameUsageExtension, arguments: {bleedingEdge: %featureToggles.bleedingEdge%}, tags: [phpstan.restrictedClassNameUsageExtension]}, {class: mglaman\\PHPStanDrupal\\Rules\\Drupal\\HookFormAlterRule}, {class: mglaman\\PHPStanDrupal\\Rules\\Drupal\\Tests\\TestClassSuffixNameRule}, {class: mglaman\\PHPStanDrupal\\Rules\\Drupal\\DependencySerializationTraitPropertyRule}, {class: mglaman\\PHPStanDrupal\\Rules\\Drupal\\AccessResultConditionRule, arguments: {treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%}}, {class: mglaman\\PHPStanDrupal\\Rules\\Classes\\ClassExtendsInternalClassRule}, {class: mglaman\\PHPStanDrupal\\Rules\\Classes\\PluginManagerInspectionRule}, {class: mglaman\\PHPStanDrupal\\Rules\\Drupal\\CacheableDependencyRule}]}',
  'analysedPaths' => 
  array (
    0 => '/var/www/html/themes/custom/petersfieldpilates',
  ),
  'scannedFiles' => 
  array (
    '/var/www/html/vendor/mglaman/phpstan-drupal/stubs/Twig/functions.stub' => '17ed8a218b2b7583534a3857607663034d7c1fa72ceaf3deee12c11808c909d5',
  ),
  'composerLocks' => 
  array (
    '/var/www/html/composer.lock' => 'bc9fd418989adffbbce94300b96f50be7d8bd2a93142d7045ace4ad4902848c2',
  ),
  'composerInstalled' => 
  array (
    '/var/www/html/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'asm89/stack-cors' => 
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => 'acf3142e6c5eafa378dc8ef3c069ab4558993f70',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../asm89/stack-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'bower-asset/fitvids' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => 'd028a2287a633478005a49fe6d1f3fcbe9f2d955',
          'type' => 'bower-asset',
          'install_path' => '/var/www/html/vendor/composer/../../libraries/fitvids',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'bower-asset/jquery' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => 'cfd8e3a885dca7b406791c1eed472af9dd717e8e',
          'type' => 'bower-asset',
          'install_path' => '/var/www/html/vendor/composer/../../libraries/jquery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'bower-asset/mmenu' => 
        array (
          'pretty_version' => 'v8.5.24',
          'version' => '8.5.24.0',
          'reference' => 'cc566754025757a4f7dcf00f4b807311c15eba5d',
          'type' => 'bower-asset',
          'install_path' => '/var/www/html/vendor/composer/../../libraries/mmenu',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'chi-teck/drupal-code-generator' => 
        array (
          'pretty_version' => '3.6.1',
          'version' => '3.6.1.0',
          'reference' => '2dbd8d231945681a398862a3282ade3cf0ea23ab',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../chi-teck/drupal-code-generator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/installers' => 
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => '12fb2dfe5e16183de69e784a7b84046c43d97e8e',
          'type' => 'composer-plugin',
          'install_path' => '/var/www/html/vendor/composer/./installers',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/semver' => 
        array (
          'pretty_version' => '3.4.4',
          'version' => '3.4.4.0',
          'reference' => '198166618906cb2de69b95d7d47e5fa8aa1b2b95',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/./semver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'consolidation/annotated-command' => 
        array (
          'pretty_version' => '4.10.4',
          'version' => '4.10.4.0',
          'reference' => '69d29da4acac31a43caa4cea13b6b948f4e5c56d',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../consolidation/annotated-command',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'consolidation/config' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '797652cd5ac870f02eb3ca1a7169d3dbbe6e5f84',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../consolidation/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'consolidation/filter-via-dot-access-data' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'f9e84bc623d420120028a50dcb9b1d4609ae3b5f',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../consolidation/filter-via-dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'consolidation/log' => 
        array (
          'pretty_version' => '3.1.1',
          'version' => '3.1.1.0',
          'reference' => 'c1a87a94c01957697ec347fd67404d7f0030d1aa',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../consolidation/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'consolidation/output-formatters' => 
        array (
          'pretty_version' => '4.7.0',
          'version' => '4.7.0.0',
          'reference' => 'dfc464c4d4a47594cac5eac01ce265e04b70cb94',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../consolidation/output-formatters',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'consolidation/robo' => 
        array (
          'pretty_version' => '5.1.1',
          'version' => '5.1.1.0',
          'reference' => '6d02c7d800b5e1a3a8977ae74d23bce723486025',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../consolidation/robo',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'consolidation/site-alias' => 
        array (
          'pretty_version' => '4.1.2',
          'version' => '4.1.2.0',
          'reference' => 'd92058201fc8475a33fb9a2b80ffe5c89472f5af',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../consolidation/site-alias',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'consolidation/site-process' => 
        array (
          'pretty_version' => '5.4.2',
          'version' => '5.4.2.0',
          'reference' => 'e7fafc40ebfddc1a5ee99ee66e5d186fc1bed4da',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../consolidation/site-process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cweagans/composer-patches' => 
        array (
          'pretty_version' => '1.7.3',
          'version' => '1.7.3.0',
          'reference' => 'e190d4466fe2b103a55467dfa83fc2fecfcaf2db',
          'type' => 'composer-plugin',
          'install_path' => '/var/www/html/vendor/composer/../cweagans/composer-patches',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dekor/php-array-table' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => 'ca40b21ba84eee6a9658a33fc5f897d76baaf8e5',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../dekor/php-array-table',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.6',
          'version' => '1.1.6.0',
          'reference' => 'd4fe3e6fd9bb9e72557a19674f44d8ac7db4c6ca',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '861c870e8b75f7c8f69c146c7f89cc1c0f1b49b6',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/admin_toolbar' => 
        array (
          'pretty_version' => '3.6.3',
          'version' => '3.6.3.0',
          'reference' => '3.6.3',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/admin_toolbar',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/background_image_formatter' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '2.0.4',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/background_image_formatter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/backup_migrate' => 
        array (
          'pretty_version' => '5.1.4',
          'version' => '5.1.4.0',
          'reference' => '5.1.4',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/backup_migrate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/blazy' => 
        array (
          'pretty_version' => '3.0.17',
          'version' => '3.0.17.0',
          'reference' => '3.0.17',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/blazy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/bootstrap5' => 
        array (
          'pretty_version' => '4.0.8',
          'version' => '4.0.8.0',
          'reference' => '4.0.8',
          'type' => 'drupal-theme',
          'install_path' => '/var/www/html/vendor/composer/../../themes/contrib/bootstrap5',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/colorbox' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '2.2.0',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/colorbox',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/colorbox_media_video' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => '2.0.3',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/colorbox_media_video',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/core' => 
        array (
          'pretty_version' => '10.6.3',
          'version' => '10.6.3.0',
          'reference' => 'ae94f40fbf0f4bd59a5145654dc336e38dfe57a7',
          'type' => 'drupal-core',
          'install_path' => '/var/www/html/vendor/composer/../../core',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/core-annotation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-assertion' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-class-finder' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-composer-scaffold' => 
        array (
          'pretty_version' => '10.6.3',
          'version' => '10.6.3.0',
          'reference' => 'db17b59620ce1c142a34dc017d9e696ce4771e55',
          'type' => 'composer-plugin',
          'install_path' => '/var/www/html/vendor/composer/../drupal/core-composer-scaffold',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/core-datetime' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-dependency-injection' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-diff' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-discovery' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-event-dispatcher' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-file-cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-file-security' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-front-matter' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-gettext' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-graph' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-http-foundation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-php-storage' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-plugin' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-project-message' => 
        array (
          'pretty_version' => '10.6.3',
          'version' => '10.6.3.0',
          'reference' => 'd1da83722735cb0f7ccabf9fef7b5607b442c3a8',
          'type' => 'composer-plugin',
          'install_path' => '/var/www/html/vendor/composer/../drupal/core-project-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/core-proxy-builder' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-recommended' => 
        array (
          'pretty_version' => '10.6.3',
          'version' => '10.6.3.0',
          'reference' => '107b1f64e3ac03fea1abf0c0a23b7f5d83ec6b4f',
          'type' => 'metapackage',
          'install_path' => NULL,
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/core-render' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-serialization' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-transliteration' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-utility' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/core-vendor-hardening' => 
        array (
          'pretty_version' => '10.6.3',
          'version' => '10.6.3.0',
          'reference' => '0ded64f65ef468e19823ed1917852fed8b2f0895',
          'type' => 'composer-plugin',
          'install_path' => '/var/www/html/vendor/composer/../drupal/core-vendor-hardening',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/core-version' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '10.6.3',
          ),
        ),
        'drupal/crop' => 
        array (
          'pretty_version' => '2.5.0',
          'version' => '2.5.0.0',
          'reference' => '8.x-2.5',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/crop',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/ctools' => 
        array (
          'pretty_version' => '4.1.0',
          'version' => '4.1.0.0',
          'reference' => '4.1.0',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/ctools',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/draggableviews' => 
        array (
          'pretty_version' => '2.1.4',
          'version' => '2.1.4.0',
          'reference' => '2.1.4',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/draggableviews',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/entity_reference_revisions' => 
        array (
          'pretty_version' => '1.14.0',
          'version' => '1.14.0.0',
          'reference' => '8.x-1.14',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/entity_reference_revisions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/eu_cookie_compliance' => 
        array (
          'pretty_version' => '1.30.0-rc2',
          'version' => '1.30.0.0-RC2',
          'reference' => '8.x-1.30-rc2',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/eu_cookie_compliance',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/extlink' => 
        array (
          'pretty_version' => '1.7.0',
          'version' => '1.7.0.0',
          'reference' => '8.x-1.7',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/extlink',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/field_group' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => '4.0.0',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/field_group',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/fitvids' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '2.1.0',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/fitvids',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/honeypot' => 
        array (
          'pretty_version' => '2.2.2',
          'version' => '2.2.2.0',
          'reference' => '2.2.2',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/honeypot',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/image_hover_effects' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => '2.0.1',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/image_hover_effects',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/image_widget_crop' => 
        array (
          'pretty_version' => '2.4.0',
          'version' => '2.4.0.0',
          'reference' => '8.x-2.4',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/image_widget_crop',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/insert_view' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '2.1.0',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/insert_view',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/jquery_ui' => 
        array (
          'pretty_version' => '1.8.0',
          'version' => '1.8.0.0',
          'reference' => '8.x-1.8',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/jquery_ui',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/manage_display' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '3.0.1',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/manage_display',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/media_gallery' => 
        array (
          'pretty_version' => '3.2.3',
          'version' => '3.2.3.0',
          'reference' => '3.2.3',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/media_gallery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/metatag' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '2.2.0',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/metatag',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/paragraphs' => 
        array (
          'pretty_version' => '1.20.0',
          'version' => '1.20.0.0',
          'reference' => '8.x-1.20',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/paragraphs',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/pathauto' => 
        array (
          'pretty_version' => '1.14.0',
          'version' => '1.14.0.0',
          'reference' => '8.x-1.14',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/pathauto',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/pdf' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => '8.x-1.3',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/pdf',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/photoswipe' => 
        array (
          'pretty_version' => '5.0.6',
          'version' => '5.0.6.0',
          'reference' => '5.0.6',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/photoswipe',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/responsive_favicons' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => '4.0.0',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/responsive_favicons',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/responsive_menu' => 
        array (
          'pretty_version' => '5.0.0-alpha2',
          'version' => '5.0.0.0-alpha2',
          'reference' => '5.0.0-alpha2',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/responsive_menu',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/slick' => 
        array (
          'pretty_version' => '3.0.7',
          'version' => '3.0.7.0',
          'reference' => '3.0.7',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/slick',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/token' => 
        array (
          'pretty_version' => '1.17.0',
          'version' => '1.17.0.0',
          'reference' => '8.x-1.17',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/token',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/upgrade_status' => 
        array (
          'pretty_version' => '4.3.9',
          'version' => '4.3.9.0',
          'reference' => '4.3.9',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/upgrade_status',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/views_slideshow' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => '5.0.1',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/views_slideshow',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/webform' => 
        array (
          'pretty_version' => '6.3.0-beta7',
          'version' => '6.3.0.0-beta7',
          'reference' => '6.3.0-beta7',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/webform',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drush/drush' => 
        array (
          'pretty_version' => '13.7.1',
          'version' => '13.7.1.0',
          'reference' => '4049dd4332bfc47d19ce849cb50380bd0498e4cc',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../drush/drush',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'grasmash/expander' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => 'eea11b9afb0c32483b18b9009f4ca07b770e39f4',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../grasmash/expander',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'grasmash/yaml-cli' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '09a8860566958a1576cc54bbe910a03477e54971',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../grasmash/yaml-cli',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.10.0',
          'version' => '7.10.0.0',
          'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '21dc724a0583619cd1652f673303492272778051',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'jackmoore/colorbox' => 
        array (
          'pretty_version' => '1.6.4',
          'version' => '1.6.4.0',
          'reference' => NULL,
          'type' => 'drupal-library',
          'install_path' => '/var/www/html/vendor/composer/../../libraries/colorbox',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.13',
          'version' => '0.3.13.0',
          'reference' => 'ed8c466571b37e977532fb2fd3c272c784d7050d',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/container' => 
        array (
          'pretty_version' => '4.2.5',
          'version' => '4.2.5.0',
          'reference' => 'd3cebb0ff4685ff61c749e54b27db49319e2ec00',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../league/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'masterminds/html5' => 
        array (
          'pretty_version' => '2.10.0',
          'version' => '2.10.0.0',
          'reference' => 'fcf91eb64359852f00d921887b219479b4f21251',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../masterminds/html5',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mck89/peast' => 
        array (
          'pretty_version' => 'v1.17.4',
          'version' => '1.17.4.0',
          'reference' => 'c6a63f32410d2e4ee2cd20fe94b35af147fb852d',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../mck89/peast',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mglaman/phpstan-drupal' => 
        array (
          'pretty_version' => '2.0.10',
          'version' => '2.0.10.0',
          'reference' => '2574aacbacede545490017df4387361698b67fef',
          'type' => 'phpstan-extension',
          'install_path' => '/var/www/html/vendor/composer/../mglaman/phpstan-drupal',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mozilla/pdf.js' => 
        array (
          'pretty_version' => '3.11.174',
          'version' => '3.11.174.0',
          'reference' => NULL,
          'type' => 'drupal-library',
          'install_path' => '/var/www/html/vendor/composer/../../libraries/pdf.js',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.7.0',
          'version' => '5.7.0.0',
          'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'npm-asset/blazy' => 
        array (
          'pretty_version' => '1.8.2',
          'version' => '1.8.2.0',
          'reference' => NULL,
          'type' => 'npm-asset',
          'install_path' => '/var/www/html/vendor/composer/../../libraries/blazy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'npm-asset/cropper' => 
        array (
          'pretty_version' => '4.1.0',
          'version' => '4.1.0.0',
          'reference' => NULL,
          'type' => 'npm-asset',
          'install_path' => '/var/www/html/vendor/composer/../../libraries/cropper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'npm-asset/cropperjs' => 
        array (
          'pretty_version' => '1.6.2',
          'version' => '1.6.2.0',
          'reference' => NULL,
          'type' => 'npm-asset',
          'install_path' => '/var/www/html/vendor/composer/../../libraries/cropperjs',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'npm-asset/jquery' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => NULL,
          'type' => 'npm-asset',
          'install_path' => '/var/www/html/vendor/composer/../../libraries/jquery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'npm-asset/slick-carousel' => 
        array (
          'pretty_version' => '1.8.1',
          'version' => '1.8.1.0',
          'reference' => NULL,
          'type' => 'npm-asset',
          'install_path' => '/var/www/html/vendor/composer/../../libraries/slick-carousel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'npm-asset/superfish' => 
        array (
          'pretty_version' => '1.7.10',
          'version' => '1.7.10.0',
          'reference' => NULL,
          'type' => 'npm-asset',
          'install_path' => '/var/www/html/vendor/composer/../../libraries/superfish',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'oomphinc/composer-installers-extender' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => 'cbf4b6f9a24153b785d09eee755b995ba87bd5f9',
          'type' => 'composer-plugin',
          'install_path' => '/var/www/html/vendor/composer/../oomphinc/composer-installers-extender',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'orno/di' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '~2.0',
          ),
        ),
        'pear/archive_tar' => 
        array (
          'pretty_version' => '1.6.0',
          'version' => '1.6.0.0',
          'reference' => 'dc3285537f1832da8ddbbe45f5a007248b6cc00e',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../pear/archive_tar',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pear/console_getopt' => 
        array (
          'pretty_version' => 'v1.4.3',
          'version' => '1.4.3.0',
          'reference' => 'a41f8d3e668987609178c7c4a9fe48fecac53fa0',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../pear/console_getopt',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pear/pear-core-minimal' => 
        array (
          'pretty_version' => 'v1.10.18',
          'version' => '1.10.18.0',
          'reference' => 'c7b55789d01de0ce090d289b73f1bbd6a2f113b1',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../pear/pear-core-minimal',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pear/pear_exception' => 
        array (
          'pretty_version' => 'v1.0.2',
          'version' => '1.0.2.0',
          'reference' => 'b14fbe2ddb0b9f94f5b24cf08783d599f776fff0',
          'type' => 'class',
          'install_path' => '/var/www/html/vendor/composer/../pear/pear_exception',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phootwork/collection' => 
        array (
          'pretty_version' => 'v3.2.3',
          'version' => '3.2.3.0',
          'reference' => '46dde20420fba17766c89200bc3ff91d3e58eafa',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phootwork/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phootwork/lang' => 
        array (
          'pretty_version' => 'v3.2.3',
          'version' => '3.2.3.0',
          'reference' => '52ec8cce740ce1c424eef02f43b43d5ddfec7b5e',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phootwork/lang',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpowermove/docblock' => 
        array (
          'pretty_version' => 'v4.0',
          'version' => '4.0.0.0',
          'reference' => 'a73f6e17b7d4e1b92ca5378c248c952c9fae7826',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phpowermove/docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.39',
          'version' => '2.1.39.0',
          'reference' => 'c6f73a2af4cbcd99c931d0fb8f08548cc0fa8224',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan-deprecation-rules' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '6b5571001a7f04fa0422254c30a0017ec2f2cacc',
          'type' => 'phpstan-extension',
          'install_path' => '/var/www/html/vendor/composer/../phpstan/phpstan-deprecation-rules',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
            1 => '^1.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.20',
          'version' => '0.12.20.0',
          'reference' => '19678eb6b952a03b8a1d96ecee9edba518bb0373',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rsky/pear-core-min' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v1.10.18',
          ),
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '4.0.6',
          'version' => '4.0.6.0',
          'reference' => 'ba01945089c3a293b01ba9badc29ad55b106b0bc',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v6.4.32',
          'version' => '6.4.32.0',
          'reference' => '0bc2199c6c1f05276b05956f1ddc63f6d7eb5fc3',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/dependency-injection' => 
        array (
          'pretty_version' => 'v6.4.32',
          'version' => '6.4.32.0',
          'reference' => 'b17882e933c4c606620247b6708ab53aa3b88753',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/dependency-injection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v6.4.32',
          'version' => '6.4.32.0',
          'reference' => '8c18400784fcb014dc73c8d5601a9576af7f8ad4',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v6.4.32',
          'version' => '6.4.32.0',
          'reference' => '99d7e101826e6610606b9433248f80c1997cd20b',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/filesystem' => 
        array (
          'pretty_version' => 'v6.4.30',
          'version' => '6.4.30.0',
          'reference' => '441c6b69f7222aadae7cbf5df588496d5ee37789',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/filesystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v6.4.33',
          'version' => '6.4.33.0',
          'reference' => '24965ca011dac87431729640feef8bcf7b5523e0',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v6.4.33',
          'version' => '6.4.33.0',
          'reference' => 'f1a490cc9d595ba7ebe684220e625d1e472ad278',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v6.4.33',
          'version' => '6.4.33.0',
          'reference' => '73fa5c999d7f741ca544a97d3c791cc97890ae4d',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v6.4.31',
          'version' => '6.4.31.0',
          'reference' => '8835f93333474780fda1b987cae37e33c3e026ca',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v6.4.32',
          'version' => '6.4.32.0',
          'reference' => '7409686879ca36c09fc970a5fa8ff6e93504dba4',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-iconv' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '5f3b930437ae03ae5dff61269024d8ea1b3774aa',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-iconv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php81' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '4a4cfc2d253c21a5ad0e53071df248ed48c6ce5c',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-php81',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v6.4.33',
          'version' => '6.4.33.0',
          'reference' => 'c46e854e79b52d07666e43924a20cb6dc546644e',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/psr-http-message-bridge' => 
        array (
          'pretty_version' => 'v6.4.32',
          'version' => '6.4.32.0',
          'reference' => '740017f61ce31b4aca485a18a25c0310ebd0190f',
          'type' => 'symfony-bridge',
          'install_path' => '/var/www/html/vendor/composer/../symfony/psr-http-message-bridge',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v6.4.32',
          'version' => '6.4.32.0',
          'reference' => '0dc6253e864e71b486e8ba4970a56ab849106ebe',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/serializer' => 
        array (
          'pretty_version' => 'v6.4.33',
          'version' => '6.4.33.0',
          'reference' => 'b53a060656bd28060c9fa28e2cab151348fd49b5',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/serializer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '45112560a3ba2d715666a509a0bc9521d10b6c43',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0|3.0',
          ),
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v6.4.30',
          'version' => '6.4.30.0',
          'reference' => '50590a057841fa6bf69d12eceffce3465b9e32cb',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '65a8bc82080447fae78373aa10f8d13b38338977',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/validator' => 
        array (
          'pretty_version' => 'v6.4.33',
          'version' => '6.4.33.0',
          'reference' => 'da1a40418439c0483ca7e0d4ae4c4f744f6b8536',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v6.4.32',
          'version' => '6.4.32.0',
          'reference' => '131fc9915e0343052af5ed5040401b481ca192aa',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-exporter' => 
        array (
          'pretty_version' => 'v6.4.26',
          'version' => '6.4.26.0',
          'reference' => '466fcac5fa2e871f83d31173f80e9c2684743bfc',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/var-exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v6.4.30',
          'version' => '6.4.30.0',
          'reference' => '8207ae83da19ee3748d6d4f567b4d9a7c656e331',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'twig/twig' => 
        array (
          'pretty_version' => 'v3.22.2',
          'version' => '3.22.2.0',
          'reference' => '946ddeafa3c9f4ce279d1f34051af041db0e16f2',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../twig/twig',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webflo/drupal-finder' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'reference' => '73045060b0894c77962a10cff047f72872d8810c',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../webflo/drupal-finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/var/www/html/vendor/mglaman/phpstan-drupal/drupal-autoloader.php' => '00449b1f7dc12c5830d25220a9e7ff4c2ff0c9ed29c26a03a790f8025f913bf5',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'apcu',
    9 => 'bcmath',
    10 => 'bz2',
    11 => 'calendar',
    12 => 'ctype',
    13 => 'curl',
    14 => 'date',
    15 => 'dom',
    16 => 'exif',
    17 => 'fileinfo',
    18 => 'filter',
    19 => 'ftp',
    20 => 'gd',
    21 => 'gettext',
    22 => 'hash',
    23 => 'iconv',
    24 => 'igbinary',
    25 => 'imagick',
    26 => 'intl',
    27 => 'json',
    28 => 'ldap',
    29 => 'libxml',
    30 => 'mbstring',
    31 => 'memcached',
    32 => 'msgpack',
    33 => 'mysqli',
    34 => 'mysqlnd',
    35 => 'openssl',
    36 => 'pcntl',
    37 => 'pcre',
    38 => 'pdo_mysql',
    39 => 'pdo_pgsql',
    40 => 'pdo_sqlite',
    41 => 'pgsql',
    42 => 'posix',
    43 => 'random',
    44 => 'readline',
    45 => 'redis',
    46 => 'session',
    47 => 'shmop',
    48 => 'soap',
    49 => 'sockets',
    50 => 'sodium',
    51 => 'sqlite3',
    52 => 'standard',
    53 => 'sysvmsg',
    54 => 'sysvsem',
    55 => 'sysvshm',
    56 => 'tokenizer',
    57 => 'uploadprogress',
    58 => 'xml',
    59 => 'xmlreader',
    60 => 'xmlrpc',
    61 => 'xmlwriter',
    62 => 'xsl',
    63 => 'yaml',
    64 => 'zip',
    65 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '0',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
  '/var/www/html/themes/custom/petersfieldpilates/petersfieldpilates.theme' => 
  array (
  ),
),
	'unmatchedLineIgnores' => array (
  '/var/www/html/themes/custom/petersfieldpilates/petersfieldpilates.theme' => 
  array (
  ),
),
	'collectedDataCallback' => static function (): array { return array (
); },
	'dependencies' => array (
  '/var/www/html/themes/custom/petersfieldpilates/petersfieldpilates.theme' => 
  array (
    'fileHash' => 'b4aeb99db57f4a00f47a82ccb4d25daf6dc6612a45bc116f17934ddf0ba8b551',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
); },
];
