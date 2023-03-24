<?php
/**
 * FolderType
 *
 * PHP version 7.3
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
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * FolderType Class Doc Comment
 *
 * @category Class
 * @description The type of the folder within the estimate.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FolderType
{
    /**
     * Possible values of this enum
     */
    const FOLDER = 'Folder';
    const ROOM = 'Room';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FOLDER,
            self::ROOM,
        ];
    }
}


