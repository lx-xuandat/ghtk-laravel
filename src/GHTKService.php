<?php

namespace Datlx\Ghtk;
use Illuminate\Support\Facades\Http;

class GHTKService
{
    protected ?string $token;
    protected ?string $openApi;
    protected ?array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->token = $config['token'];
        $this->openApi = $config['open_api'];
    }

    protected function client()
    {
        return Http::withToken($this->token)->baseUrl($this->openApi);
    }

    public function createOrder(array $data)
    {
        return $this->client()->post('/services/shipment/order', $data)->json();
    }

    public function getOrder(string $label)
    {
        return $this->client()->get("/services/shipment/v2/$label")->json();
    }

    public function cancelOrder(string $label)
    {
        return $this->client()->post("/services/shipment/cancel/$label")->json();
    }

    public function checkFee(array $params)
    {
        return $this->client()->get('/services/shipment/fee', $params)->json();
    }

    public function getPickupAddresses()
    {
        return $this->client()->get('/services/pickup-address')->json();
    }

    public function setToken(string $token)
    {
        $this->token = $token;
    }
}
