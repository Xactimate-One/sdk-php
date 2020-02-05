<?php
/**
 * ProjectRolesApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Xactimate One Customer Api
 *
 * The client claims API provides an integration point for Xactimate clients to create and manage insurance claims within the Xactimate One system.
 *
 * OpenAPI spec version: 0.1.1
 * Contact: contact@xactware.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * ProjectRolesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectRolesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation projectsOpenProjectIdRolesRoleIdRoleUserEmailDelete
     *
     * Remove a project role
     *
     * @param  string $claim_id The id of the project to remove the user from (required)
     * @param  string $role_id The id of the role on the project from which the user should be removed (required)
     * @param  string $role_user_email The email of the user to remove from the role (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function projectsOpenProjectIdRolesRoleIdRoleUserEmailDelete($claim_id, $role_id, $role_user_email)
    {
        $this->projectsOpenProjectIdRolesRoleIdRoleUserEmailDeleteWithHttpInfo($claim_id, $role_id, $role_user_email);
    }

    /**
     * Operation projectsOpenProjectIdRolesRoleIdRoleUserEmailDeleteWithHttpInfo
     *
     * Remove a project role
     *
     * @param  string $claim_id The id of the project to remove the user from (required)
     * @param  string $role_id The id of the role on the project from which the user should be removed (required)
     * @param  string $role_user_email The email of the user to remove from the role (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectsOpenProjectIdRolesRoleIdRoleUserEmailDeleteWithHttpInfo($claim_id, $role_id, $role_user_email)
    {
        $returnType = '';
        $request = $this->projectsOpenProjectIdRolesRoleIdRoleUserEmailDeleteRequest($claim_id, $role_id, $role_user_email);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation projectsOpenProjectIdRolesRoleIdRoleUserEmailDeleteAsync
     *
     * Remove a project role
     *
     * @param  string $claim_id The id of the project to remove the user from (required)
     * @param  string $role_id The id of the role on the project from which the user should be removed (required)
     * @param  string $role_user_email The email of the user to remove from the role (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function projectsOpenProjectIdRolesRoleIdRoleUserEmailDeleteAsync($claim_id, $role_id, $role_user_email)
    {
        return $this->projectsOpenProjectIdRolesRoleIdRoleUserEmailDeleteAsyncWithHttpInfo($claim_id, $role_id, $role_user_email)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation projectsOpenProjectIdRolesRoleIdRoleUserEmailDeleteAsyncWithHttpInfo
     *
     * Remove a project role
     *
     * @param  string $claim_id The id of the project to remove the user from (required)
     * @param  string $role_id The id of the role on the project from which the user should be removed (required)
     * @param  string $role_user_email The email of the user to remove from the role (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function projectsOpenProjectIdRolesRoleIdRoleUserEmailDeleteAsyncWithHttpInfo($claim_id, $role_id, $role_user_email)
    {
        $returnType = '';
        $request = $this->projectsOpenProjectIdRolesRoleIdRoleUserEmailDeleteRequest($claim_id, $role_id, $role_user_email);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'projectsOpenProjectIdRolesRoleIdRoleUserEmailDelete'
     *
     * @param  string $claim_id The id of the project to remove the user from (required)
     * @param  string $role_id The id of the role on the project from which the user should be removed (required)
     * @param  string $role_user_email The email of the user to remove from the role (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function projectsOpenProjectIdRolesRoleIdRoleUserEmailDeleteRequest($claim_id, $role_id, $role_user_email)
    {
        // verify the required parameter 'claim_id' is set
        if ($claim_id === null || (is_array($claim_id) && count($claim_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $claim_id when calling projectsOpenProjectIdRolesRoleIdRoleUserEmailDelete'
            );
        }
        // verify the required parameter 'role_id' is set
        if ($role_id === null || (is_array($role_id) && count($role_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $role_id when calling projectsOpenProjectIdRolesRoleIdRoleUserEmailDelete'
            );
        }
        // verify the required parameter 'role_user_email' is set
        if ($role_user_email === null || (is_array($role_user_email) && count($role_user_email) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $role_user_email when calling projectsOpenProjectIdRolesRoleIdRoleUserEmailDelete'
            );
        }

        $resourcePath = '/projects/open/{project-id}/roles/{role-id}/{role-user-email}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($claim_id !== null) {
            $resourcePath = str_replace(
                '{' . 'claim-id' . '}',
                ObjectSerializer::toPathValue($claim_id),
                $resourcePath
            );
        }
        // path params
        if ($role_id !== null) {
            $resourcePath = str_replace(
                '{' . 'role-id' . '}',
                ObjectSerializer::toPathValue($role_id),
                $resourcePath
            );
        }
        // path params
        if ($role_user_email !== null) {
            $resourcePath = str_replace(
                '{' . 'role-user-email' . '}',
                ObjectSerializer::toPathValue($role_user_email),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation projectsOpenProjectIdRolesRoleIdRoleUserEmailPut
     *
     * Assign a project role
     *
     * @param  string $project_id The id of the project to add the user to (required)
     * @param  string $role_id The id of the role on the project to which the user should be added (required)
     * @param  string $role_user_email The email of the user to assign to the role (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function projectsOpenProjectIdRolesRoleIdRoleUserEmailPut($project_id, $role_id, $role_user_email)
    {
        $this->projectsOpenProjectIdRolesRoleIdRoleUserEmailPutWithHttpInfo($project_id, $role_id, $role_user_email);
    }

    /**
     * Operation projectsOpenProjectIdRolesRoleIdRoleUserEmailPutWithHttpInfo
     *
     * Assign a project role
     *
     * @param  string $project_id The id of the project to add the user to (required)
     * @param  string $role_id The id of the role on the project to which the user should be added (required)
     * @param  string $role_user_email The email of the user to assign to the role (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectsOpenProjectIdRolesRoleIdRoleUserEmailPutWithHttpInfo($project_id, $role_id, $role_user_email)
    {
        $returnType = '';
        $request = $this->projectsOpenProjectIdRolesRoleIdRoleUserEmailPutRequest($project_id, $role_id, $role_user_email);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation projectsOpenProjectIdRolesRoleIdRoleUserEmailPutAsync
     *
     * Assign a project role
     *
     * @param  string $project_id The id of the project to add the user to (required)
     * @param  string $role_id The id of the role on the project to which the user should be added (required)
     * @param  string $role_user_email The email of the user to assign to the role (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function projectsOpenProjectIdRolesRoleIdRoleUserEmailPutAsync($project_id, $role_id, $role_user_email)
    {
        return $this->projectsOpenProjectIdRolesRoleIdRoleUserEmailPutAsyncWithHttpInfo($project_id, $role_id, $role_user_email)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation projectsOpenProjectIdRolesRoleIdRoleUserEmailPutAsyncWithHttpInfo
     *
     * Assign a project role
     *
     * @param  string $project_id The id of the project to add the user to (required)
     * @param  string $role_id The id of the role on the project to which the user should be added (required)
     * @param  string $role_user_email The email of the user to assign to the role (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function projectsOpenProjectIdRolesRoleIdRoleUserEmailPutAsyncWithHttpInfo($project_id, $role_id, $role_user_email)
    {
        $returnType = '';
        $request = $this->projectsOpenProjectIdRolesRoleIdRoleUserEmailPutRequest($project_id, $role_id, $role_user_email);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'projectsOpenProjectIdRolesRoleIdRoleUserEmailPut'
     *
     * @param  string $project_id The id of the project to add the user to (required)
     * @param  string $role_id The id of the role on the project to which the user should be added (required)
     * @param  string $role_user_email The email of the user to assign to the role (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function projectsOpenProjectIdRolesRoleIdRoleUserEmailPutRequest($project_id, $role_id, $role_user_email)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null || (is_array($project_id) && count($project_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $project_id when calling projectsOpenProjectIdRolesRoleIdRoleUserEmailPut'
            );
        }
        // verify the required parameter 'role_id' is set
        if ($role_id === null || (is_array($role_id) && count($role_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $role_id when calling projectsOpenProjectIdRolesRoleIdRoleUserEmailPut'
            );
        }
        // verify the required parameter 'role_user_email' is set
        if ($role_user_email === null || (is_array($role_user_email) && count($role_user_email) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $role_user_email when calling projectsOpenProjectIdRolesRoleIdRoleUserEmailPut'
            );
        }

        $resourcePath = '/projects/open/{project-id}/roles/{role-id}/{role-user-email}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                '{' . 'project-id' . '}',
                ObjectSerializer::toPathValue($project_id),
                $resourcePath
            );
        }
        // path params
        if ($role_id !== null) {
            $resourcePath = str_replace(
                '{' . 'role-id' . '}',
                ObjectSerializer::toPathValue($role_id),
                $resourcePath
            );
        }
        // path params
        if ($role_user_email !== null) {
            $resourcePath = str_replace(
                '{' . 'role-user-email' . '}',
                ObjectSerializer::toPathValue($role_user_email),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation projectsRolesGet
     *
     * Project roles
     *
     * @param  string $accept_language The culture to request resources for (optional)
     * @param  string $project_type Filter roles by project type (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\Roles
     */
    public function projectsRolesGet($accept_language = null, $project_type = null)
    {
        list($response) = $this->projectsRolesGetWithHttpInfo($accept_language, $project_type);
        return $response;
    }

    /**
     * Operation projectsRolesGetWithHttpInfo
     *
     * Project roles
     *
     * @param  string $accept_language The culture to request resources for (optional)
     * @param  string $project_type Filter roles by project type (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\Roles, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectsRolesGetWithHttpInfo($accept_language = null, $project_type = null)
    {
        $returnType = '\Swagger\Client\Model\Roles';
        $request = $this->projectsRolesGetRequest($accept_language, $project_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Roles',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation projectsRolesGetAsync
     *
     * Project roles
     *
     * @param  string $accept_language The culture to request resources for (optional)
     * @param  string $project_type Filter roles by project type (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function projectsRolesGetAsync($accept_language = null, $project_type = null)
    {
        return $this->projectsRolesGetAsyncWithHttpInfo($accept_language, $project_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation projectsRolesGetAsyncWithHttpInfo
     *
     * Project roles
     *
     * @param  string $accept_language The culture to request resources for (optional)
     * @param  string $project_type Filter roles by project type (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function projectsRolesGetAsyncWithHttpInfo($accept_language = null, $project_type = null)
    {
        $returnType = '\Swagger\Client\Model\Roles';
        $request = $this->projectsRolesGetRequest($accept_language, $project_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'projectsRolesGet'
     *
     * @param  string $accept_language The culture to request resources for (optional)
     * @param  string $project_type Filter roles by project type (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function projectsRolesGetRequest($accept_language = null, $project_type = null)
    {

        $resourcePath = '/projects/roles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($project_type !== null) {
            $queryParams['projectType'] = ObjectSerializer::toQueryValue($project_type);
        }
        // header params
        if ($accept_language !== null) {
            $headerParams['accept-language'] = ObjectSerializer::toHeaderValue($accept_language);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
