<?php
// calculator/config/calculator.php

// Prefer env var; fallback to hardcoded key
$key = getenv('ADVISORKHOJ_API_KEY') ?: '10e7d93b-484b-4756-80f7-350be64a60e5';

// Common defaults for all calculators
$defaults = [
    'method'  => 'POST',
    'auth'    => ['key' => $key],
    'timeout' => 8,
];

// Helper to build a config block
$cfg = function (string $url, array $fields) use ($defaults): array {
    return array_merge($defaults, [
        'url'    => $url,
        'fields' => $fields,
    ]);
};

// URLs
$URL = [
    'sip'            => 'https://mfapi.advisorkhoj.com/calc/getSIPCalcResult',
    'lumpsum'        => 'https://mfapi.advisorkhoj.com/calc/getLumpsumCalcResult',
    'target_sip'     => 'https://mfapi.advisorkhoj.com/calc/getTargetAmountSIPCalcResult',
    'lumpsum_target' => 'https://mfapi.advisorkhoj.com/calc/getLumpsumTargetCalcResult',
    'crorepati'      => 'https://mfapi.advisorkhoj.com/calc/getCrorepatiResult',
];

// Fields
$FIELDS = [
    'sip'            => ['sip_amount', 'interest_rate', 'period'],
    'lumpsum'        => ['lumpsum_amount', 'expected_return', 'years'],
    'target_sip'     => ['wealth_amount', 'inflation_rate', 'expected_return', 'period'],
    'lumpsum_target' => ['target_amount', 'expected_return', 'years'],
    'crorepati'      => ['current_age', 'retirement_age', 'wealth_amount', 'inflation_rate', 'expected_return', 'savings_amount'],
];

// Build final map
$config = [
    'sip'              => $cfg($URL['sip'],            $FIELDS['sip']),
    'lumpsum'          => $cfg($URL['lumpsum'],        $FIELDS['lumpsum']),
    'lumpsum-target'   => $cfg($URL['lumpsum_target'], $FIELDS['lumpsum_target']),
    // crorepati + retirement share the same API/fields
    'crorepati'        => $cfg($URL['crorepati'],      $FIELDS['crorepati']),
    'retirement'       => $cfg($URL['crorepati'],      $FIELDS['crorepati']),
];

// Target SIP family share same API/fields
foreach (['target-sip', 'vacation', 'car', 'house', 'marriage'] as $slug) {
    $config[$slug] = $cfg($URL['target_sip'], $FIELDS['target_sip']);
}

return $config;
