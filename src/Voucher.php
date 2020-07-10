<?php

namespace Sidvanvliet\LaravelGiftyVouchers;

use Illuminate\Support\Facades\Http;

class Voucher
{
    /** @var string Gifty balance checker API */
    private string $endpoint = 'https://api.gifty.nl/v1/balance/';

    /** @var object Response of the request */
    private object $response;

    /**
     * Voucher constructor.
     * @param string $code
     */
    public function __construct(string $code)
    {
        $this->response = Http::get($this->endpoint . $this->parseCode($code));
    }

    /**
     * Ensure that the given code matches the required format
     * @param string $code
     * @return string
     */
    private function parseCode(string $code): string
    {
        $code = strtolower($code);
        $code = preg_replace('/[^a-z0-9_\s-]/', '', $code);
        $code = preg_replace('/[\s-]+/', '', $code);

        return $code;
    }

    /**
     * Return the value of the voucher
     * @return float
     */
    public function balance(): float
    {
        return (float) $this->isValid() ? $this->response->object()->data->balance / 100
                                        : 0;
    }

    /**
     * Returns the currency of the voucher
     * @param string $fallback
     * @return string|null
     */
    public function currency($fallback = 'N/A'): ?string
    {
        return (string) $this->isValid() ? $this->response->object()->data->currency
                                         : $fallback;
    }

    /**
     * Returns if the voucher is valid or not
     * @return bool
     */
    public function isValid(): bool
    {
        return $this->response->status() === 200;
    }
}
