<?php
class CalculatorService
{
    private array $config;
    private ApiClient $http;

    public function __construct(array $config, ?ApiClient $http = null)
    {
        $this->config = $config;
        $this->http   = $http ?? new ApiClient();
    }

    public function call(string $calculator, array $input): array
    {
        if (!isset($this->config[$calculator])) {
            throw new InvalidArgumentException("Unknown calculator: {$calculator}");
        }
        $cfg = $this->config[$calculator];

        // keep only allowed fields
        $payload = array_intersect_key($input, array_flip($cfg['fields'] ?? []));
        // add static params (API key, etc.)
        $payload = array_merge($payload, $cfg['auth'] ?? []);

        return $this->http->request(
            $cfg['method'] ?? 'POST',
            $cfg['url'],
            $payload,
            $cfg['headers'] ?? [],
            (int)($cfg['timeout'] ?? 8)
        );
    }
}
