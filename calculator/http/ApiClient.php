<?php
class ApiClient
{
    public function request(string $method, string $url, array $params = [], array $headers = [], int $timeout = 8): array
    {
        $ch = curl_init();
        $method = strtoupper($method);

        if ($method === 'GET') {
            $url .= $params ? ('?' . http_build_query($params)) : '';
            $body = null;
        } else {
            $body = http_build_query($params);
        }

        curl_setopt_array($ch, [
            CURLOPT_URL            => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => $timeout,
            CURLOPT_CUSTOMREQUEST  => $method,
            CURLOPT_POSTFIELDS     => $body,
            CURLOPT_HTTPHEADER     => array_merge(['Content-Type: application/x-www-form-urlencoded'], $headers),
        ]);

        $raw    = curl_exec($ch);
        $err    = curl_error($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($err)   throw new RuntimeException("HTTP error: {$err}");
        if ($status < 200 || $status >= 300) throw new RuntimeException("HTTP {$status}: {$raw}");

        $json = json_decode($raw, true);
        return (json_last_error() === JSON_ERROR_NONE) ? $json : ['raw' => $raw];
    }
}
