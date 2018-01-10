<?php

namespace WakeOnWeb\EventBusPublisher\Infra\Router\DoctrineORM\Entity;

use WakeOnWeb\EventBusPublisher\Domain\Gateway\Definition\GatewayDefinitionFactory;
use WakeOnWeb\EventBusPublisher\Domain\Gateway\Definition\GatewayDefinitionInterface;
use WakeOnWeb\EventBusPublisher\Domain\Target\Target as DomainTarget;

/**
 * Target.
 *
 * @author Stephane PY <s.py@wakeonweb.com>
 */
class Target extends DomainTarget
{
    public function getGatewayDefinition(): GatewayDefinitionInterface
    {
        if ($this->gatewayDefinition instanceof GatewayDefinitionInterface) {
            // in case you just created the object or set a new definition.
            return parent::getGatewayDefinition();
        }

        //it comes from ORM.
        return GatewayDefinitionFactory::createFromArray($this->gatewayDefinition);
    }

    public function setGatewayDefinition(GatewayDefinitionInterface $gatewayDefinition): void
    {
        $this->gatewayDefinition = $gatewayDefinition;
    }

    public function setNormalizer(string $normalizer): void
    {
        $this->normalizer = $normalizer;
    }
}
