<?php

namespace WakeOnWeb\EventBusPublisher\Infra\Audit\DoctrineORM\Entity;

use WakeOnWeb\EventBusPublisher\Domain\Gateway\GatewayResponse;

interface ResponseAwareEventInterface
{
    public function setGatewayResponse(GatewayResponse $response);

    public function getGatewayResponse(): ?GatewayResponse;
}
