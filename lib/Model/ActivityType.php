<?php
/**
 * ActivityType
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xactimate One API
 *
 * The Xactimate One API allows you to integrate your current services and applications directly with Xactimate One. It creates a seamless experience for your company as it manages claims with your internal software by sending and receiving data from the Xactimate One platform.
 *
 * The version of the OpenAPI document: null
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ActivityType Class Doc Comment
 *
 * @category Class
 * @description The activity required for an estimate line item
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ActivityType
{
    /**
     * Possible values of this enum
     */
    const DETACH_AND_RESET = 'DetachAndReset';
    const INSTALL_ONLY = 'InstallOnly';
    const MATERIAL_ONLY = 'MaterialOnly';
    const REMOVE = 'Remove';
    const REMOVE_AND_REPLACE = 'RemoveAndReplace';
    const REPLACE = 'Replace';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DETACH_AND_RESET,
            self::INSTALL_ONLY,
            self::MATERIAL_ONLY,
            self::REMOVE,
            self::REMOVE_AND_REPLACE,
            self::REPLACE,
        ];
    }
}


