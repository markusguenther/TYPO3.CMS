<?php
return [
    // LocalConfiguration / AdditionalConfiguration settings
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SC_OPTIONS\'][\'GLOBAL\'][\'cliKeys\']' => [
        'restFiles' => [
            'Breaking-80700-DeprecatedFunctionalityRemoved.rst',
            'Deprecation-80468-CommandLineInterfaceCliKeysAndCli_dispatchphpsh.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'FE\'][\'noPHPscriptInclude\']' => [
        'restFiles' => [
            'Breaking-80700-DeprecatedFunctionalityRemoved.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'FE\'][\'maxSessionDataSize\']' => [
        'restFiles' => [
            'Breaking-80700-DeprecatedFunctionalityRemoved.rst',
            'Deprecation-70316-FrontendBasketWithRecs.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS_extensionAdded\']' => [
        'restFiles' => [
            'Breaking-80700-DeprecatedFunctionalityRemoved.rst',
            'Deprecation-80583-TYPO3_CONF_VARS_extensionAdded.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SYS\'][\'enable_errorDLOG\']' => [
        'restFiles' => [
            'Breaking-82162-GlobalErrorConstantsRemoved.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SYS\'][\'enable_exceptionDLOG\']' => [
        'restFiles' => [
            'Breaking-82162-GlobalErrorConstantsRemoved.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SYS\'][\'sqlDebug\']' => [
        'restFiles' => [
            'Breaking-82421-DroppedOldDBRelatedConfigurationOptions.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SYS\'][\'setDBinit\']' => [
        'restFiles' => [
            'Breaking-82421-DroppedOldDBRelatedConfigurationOptions.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SYS\'][\'no_pconnect\']' => [
        'restFiles' => [
            'Breaking-82421-DroppedOldDBRelatedConfigurationOptions.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SYS\'][\'dbClientCompress\']' => [
        'restFiles' => [
            'Breaking-82421-DroppedOldDBRelatedConfigurationOptions.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SYS\'][\'enable_DLOG\']' => [
        'restFiles' => [
            'Breaking-82639-LoggingActivatedForAuthenticationAndServiceClasses.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SC_OPTIONS\'][\'t3lib/class.t3lib_userauth.php\'][\'writeDevLog\']' => [
        'restFiles' => [
            'Breaking-82639-LoggingActivatedForAuthenticationAndServiceClasses.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SC_OPTIONS\'][\'t3lib/class.t3lib_userauth.php\'][\'writeDevLogFE\']' => [
        'restFiles' => [
            'Breaking-82639-LoggingActivatedForAuthenticationAndServiceClasses.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SC_OPTIONS\'][\'t3lib/class.t3lib_userauth.php\'][\'writeDevLogBE\']' => [
        'restFiles' => [
            'Breaking-82639-LoggingActivatedForAuthenticationAndServiceClasses.rst',
        ],
    ],

    // Hooks
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SC_OPTIONS\'][\'t3lib/class.t3lib_befunc.php\'][\'getFlexFormDSClass\']' => [
        'restFiles' => [
            'Breaking-80700-DeprecatedFunctionalityRemoved.rst',
            'Deprecation-78581-FlexFormRelatedParsing.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SC_OPTIONS\'][\'t3lib/div/class.t3lib_utility_client.php\'][\'getDeviceType\']' => [
        'restFiles' => [
            'Breaking-80700-DeprecatedFunctionalityRemoved.rst',
            'Deprecation-79560-DeprecateClientUtilitygetDeviceType.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SC_OPTIONS\'][\'typo3/class.db_list.inc\'][\'makeQueryArray\']' => [
        'restFiles' => [
            'Breaking-80700-DeprecatedFunctionalityRemoved.rst',
            'Deprecation-76259-DeprecateMethodMakeQueryArrayOfAbstractDatabaseRecordList.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SC_OPTIONS\'][\'ext/tstemplate_info/class.tx_tstemplateinfo.php\'][\'postTCEProcessingHook\']' => [
        'restFiles' => [
            'Breaking-81171-EditAbilityOfTypoScriptTemplateInEXTtstemplateRemoved.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SC_OPTIONS\'][\'ext/tstemplate_info/class.tx_tstemplateinfo.php\'][\'postOutputProcessingHook\']' => [
        'restFiles' => [
            'Breaking-81171-EditAbilityOfTypoScriptTemplateInEXTtstemplateRemoved.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'EXT\'][\'extConf\']' => [
        'restFiles' => [
            'Deprecation-82254-DeprecateGLOBALSTYPO3_CONF_VARSEXTextConf.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'EXT\'][\'allowSystemInstall\']' => [
        'restFiles' => [
            'Breaking-82377-OptionToAllowUploadingSystemExtensionsRemoved.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SC_OPTIONS\'][\'t3lib/class.t3lib_div.php\'][\'devLog\']' => [
        'restFiles' => [
            'Deprecation-52694-DeprecatedGeneralUtilitydevLog.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_CONF_VARS\'][\'SYS\'][\'enableDeprecationLog\']' => [
        'restFiles' => [
            'Deprecation-82438-DeprecationMethods.rst',
        ],
    ],
];
