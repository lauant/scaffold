<?php

/**
 * Mailchimp Marketing API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.0.25
 * Contact: apihelp@mailchimp.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */
namespace Lauant\MCD\MailchimpMarketing;

use Lauant\MCD\MailchimpMarketing\Api\ActivityFeedApi;
use Lauant\MCD\MailchimpMarketing\Api\AuthorizedAppsApi;
use Lauant\MCD\MailchimpMarketing\Api\AutomationsApi;
use Lauant\MCD\MailchimpMarketing\Api\BatchWebhooksApi;
use Lauant\MCD\MailchimpMarketing\Api\BatchesApi;
use Lauant\MCD\MailchimpMarketing\Api\CampaignFoldersApi;
use Lauant\MCD\MailchimpMarketing\Api\CampaignsApi;
use Lauant\MCD\MailchimpMarketing\Api\ConnectedSitesApi;
use Lauant\MCD\MailchimpMarketing\Api\ConversationsApi;
use Lauant\MCD\MailchimpMarketing\Api\EcommerceApi;
use Lauant\MCD\MailchimpMarketing\Api\FacebookAdsApi;
use Lauant\MCD\MailchimpMarketing\Api\FileManagerApi;
use Lauant\MCD\MailchimpMarketing\Api\LandingPagesApi;
use Lauant\MCD\MailchimpMarketing\Api\ListsApi;
use Lauant\MCD\MailchimpMarketing\Api\PingApi;
use Lauant\MCD\MailchimpMarketing\Api\ReportingApi;
use Lauant\MCD\MailchimpMarketing\Api\ReportsApi;
use Lauant\MCD\MailchimpMarketing\Api\RootApi;
use Lauant\MCD\MailchimpMarketing\Api\SearchCampaignsApi;
use Lauant\MCD\MailchimpMarketing\Api\SearchMembersApi;
use Lauant\MCD\MailchimpMarketing\Api\TemplateFoldersApi;
use Lauant\MCD\MailchimpMarketing\Api\TemplatesApi;
use Lauant\MCD\MailchimpMarketing\Api\VerifiedDomainsApi;
class Configuration
{
    private static $defaultConfiguration;
    protected $apiKeys = [];
    protected $apiKeyPrefixes = [];
    protected $accessToken = '';
    protected $username = '';
    protected $password = '';
    protected $host = 'https://server.api.mailchimp.com/3.0';
    protected $userAgent = 'Swagger-Codegen/3.0.25/php';
    protected $debug = \false;
    protected $debugFile = 'php://output';
    protected $tempFolderPath;
    public function __construct()
    {
        $this->tempFolderPath = \sys_get_temp_dir();
        $this->activityFeed = new \Lauant\MCD\MailchimpMarketing\Api\ActivityFeedApi($this);
        $this->authorizedApps = new \Lauant\MCD\MailchimpMarketing\Api\AuthorizedAppsApi($this);
        $this->automations = new \Lauant\MCD\MailchimpMarketing\Api\AutomationsApi($this);
        $this->batchWebhooks = new \Lauant\MCD\MailchimpMarketing\Api\BatchWebhooksApi($this);
        $this->batches = new \Lauant\MCD\MailchimpMarketing\Api\BatchesApi($this);
        $this->campaignFolders = new \Lauant\MCD\MailchimpMarketing\Api\CampaignFoldersApi($this);
        $this->campaigns = new \Lauant\MCD\MailchimpMarketing\Api\CampaignsApi($this);
        $this->connectedSites = new \Lauant\MCD\MailchimpMarketing\Api\ConnectedSitesApi($this);
        $this->conversations = new \Lauant\MCD\MailchimpMarketing\Api\ConversationsApi($this);
        $this->ecommerce = new \Lauant\MCD\MailchimpMarketing\Api\EcommerceApi($this);
        $this->facebookAds = new \Lauant\MCD\MailchimpMarketing\Api\FacebookAdsApi($this);
        $this->fileManager = new \Lauant\MCD\MailchimpMarketing\Api\FileManagerApi($this);
        $this->landingPages = new \Lauant\MCD\MailchimpMarketing\Api\LandingPagesApi($this);
        $this->lists = new \Lauant\MCD\MailchimpMarketing\Api\ListsApi($this);
        $this->ping = new \Lauant\MCD\MailchimpMarketing\Api\PingApi($this);
        $this->reporting = new \Lauant\MCD\MailchimpMarketing\Api\ReportingApi($this);
        $this->reports = new \Lauant\MCD\MailchimpMarketing\Api\ReportsApi($this);
        $this->root = new \Lauant\MCD\MailchimpMarketing\Api\RootApi($this);
        $this->searchCampaigns = new \Lauant\MCD\MailchimpMarketing\Api\SearchCampaignsApi($this);
        $this->searchMembers = new \Lauant\MCD\MailchimpMarketing\Api\SearchMembersApi($this);
        $this->templateFolders = new \Lauant\MCD\MailchimpMarketing\Api\TemplateFoldersApi($this);
        $this->templates = new \Lauant\MCD\MailchimpMarketing\Api\TemplatesApi($this);
        $this->verifiedDomains = new \Lauant\MCD\MailchimpMarketing\Api\VerifiedDomainsApi($this);
    }
    public function setConfig($config = array())
    {
        $apiKey = isset($config['apiKey']) ? $config['apiKey'] : '';
        $accessToken = isset($config['accessToken']) ? $config['accessToken'] : '';
        $server = isset($config['server']) ? $config['server'] : 'invalid-server';
        $host = \str_replace('server', $server, $this->getHost());
        // Basic Authentication
        if (!empty($apiKey)) {
            $this->setUsername('user');
            $this->setPassword($apiKey);
        } elseif (!empty($accessToken)) {
            $this->accessToken = $accessToken;
        }
        $this->setHost($host);
        return $this;
    }
    public function setApiKey($apiKeyIdentifier, $key)
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;
        return $this;
    }
    public function getApiKey($apiKeyIdentifier)
    {
        return isset($this->apiKeys[$apiKeyIdentifier]) ? $this->apiKeys[$apiKeyIdentifier] : null;
    }
    public function setApiKeyPrefix($apiKeyIdentifier, $prefix)
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;
        return $this;
    }
    public function getApiKeyPrefix($apiKeyIdentifier)
    {
        return isset($this->apiKeyPrefixes[$apiKeyIdentifier]) ? $this->apiKeyPrefixes[$apiKeyIdentifier] : null;
    }
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }
    public function getAccessToken()
    {
        return $this->accessToken;
    }
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }
    public function getHost()
    {
        return $this->host;
    }
    public function setUserAgent($userAgent)
    {
        if (!\is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }
        $this->userAgent = $userAgent;
        return $this;
    }
    public function getUserAgent()
    {
        return $this->userAgent;
    }
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }
    public function getDebug()
    {
        return $this->debug;
    }
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }
    public function getDebugFile()
    {
        return $this->debugFile;
    }
    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }
    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }
    public static function getDefaultConfiguration()
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new \Lauant\MCD\MailchimpMarketing\Configuration();
        }
        return self::$defaultConfiguration;
    }
    public static function setDefaultConfiguration(\Lauant\MCD\MailchimpMarketing\Configuration $config)
    {
        self::$defaultConfiguration = $config;
    }
    public static function toDebugReport()
    {
        $report = 'PHP SDK (MailchimpMarketing) Debug Report:' . \PHP_EOL;
        $report .= '    OS: ' . \php_uname() . \PHP_EOL;
        $report .= '    PHP Version: ' . \PHP_VERSION . \PHP_EOL;
        $report .= '    OpenAPI Spec Version: 3.0.25' . \PHP_EOL;
        $report .= '    SDK Package Version: 3.0.25' . \PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . \PHP_EOL;
        return $report;
    }
    public function getApiKeyWithPrefix($apiKeyIdentifier)
    {
        $prefix = $this->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->getApiKey($apiKeyIdentifier);
        if ($apiKey === null) {
            return null;
        }
        if ($prefix === null) {
            $keyWithPrefix = $apiKey;
        } else {
            $keyWithPrefix = $prefix . ' ' . $apiKey;
        }
        return $keyWithPrefix;
    }
}
