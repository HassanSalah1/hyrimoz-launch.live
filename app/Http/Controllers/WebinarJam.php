<?php
namespace App\Http\Controllers;

/**
 *
 * Implements the WebinarJam API
 *
 */
class WebinarJam
{
    protected const API_URL = 'https://api.webinarjam.com/webinarjam/';

    protected const CURL_OPTIONS = [
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 60,
    ];

    /**
     * WebinarJam API Key
     * @var string
     */
    protected $apiKey;

    /**
     * WebinarJam Class Constructor
     *
     * @param  string $apiKey WebinarJam API Key
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Call to API URL through curl extension
     *
     * @param  string $endpoint WebinarJam API EndPoint
     * @return array $jsonResults
     */
    protected function authenticatedCall(string $endpoint, array $params = []): array
    {
        $ch = curl_init(self::API_URL . $endpoint);

        if (empty($this->apiKey)) {
            throw new \Exception('You must specify a valid WebinarJam API Key');
        }

        if (is_resource($ch)) {
            $params['api_key'] = $this->apiKey;
            curl_setopt_array($ch, self::CURL_OPTIONS);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
            $result = curl_exec($ch);

            if (false === $result) {
                $error = curl_error($ch);
                curl_close($ch);
                throw new \Exception($error);
            }

            curl_close($ch);

            $jsonResults = is_string($result) ? json_decode($result, true) : null;

            if (!is_array($jsonResults)) {
                throw new \Exception($result);
            }

            return $jsonResults;
        }

        return false;
    }

    /**
     * Retrieve a full list of all webinars published in your account
     * @return array Webinar List
     */
    public function getWebinars(): ?array
    {
        return $this->authenticatedCall('webinars');
    }

    /**
     * Get details about one particular webinar from your account
     *
     * @param  string $webinarId Webinar ID
     * @return array $webinar Webinar Details
     */
    public function getWebinar(string $webinarId): ?array
    {
        return $this->authenticatedCall('webinar', ['webinar_id' => $webinarId]);
    }

    /**
     * Register a person to a specific webinar
     *
     * @param string      $webinarId   Webinar ID (required)
     * @param string      $first_name  First Name (required)
     * @param string      $email       E-mail (required)
     * @param int         $schedule    Schedule (required)
     * @param string|null $last_name   Last Name (optional)
     * @param string|null $ipAddress   IP Address (optional)
     * @param string|null $countryCode Country Code (optional)
     * @param  $phone       Phone (optional)
     * @return array $webinar Webinar Details
     */
    public function addToWebinar(
        int $webinarId,
        string $first_name,
        string $email,
        int $schedule = 0,
        string $last_name = null,
        string $ipAddress = null,
        string $countryCode = null,
         $phone = null
    ): array
    {
        $params = [
            'webinar_id' => $webinarId,
            'first_name' => $first_name,
            'email' => $email,
            'schedule' => $schedule
        ];

        $params['last_name'] = $last_name ?? null;
        $params['ip_address'] = $ipAddress ?? null;
        $params['phone_country_code'] = $countryCode ?? null;
        $params['phone'] = $phone ?? null;

        return $this->authenticatedCall('register', $params);
    }
}
