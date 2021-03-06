<?php

namespace SilexFriends\Uuid;

use Ramsey\Uuid\Uuid as UuidGenerator;
use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * Universally Unique Identifier Service Provider
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Uuid implements UuidInterface, ServiceProviderInterface
{
    /**
     * (non-PHPdoc)
     * @see \Silex\ServiceProviderInterface::register()
     * @param Application $app
     */
    public function register(Application $app)
    {
        $service = $this;

        $app[static::GENERATE] = $app->protect(
            function () use ($service) {
                return $service->generate();
            }
        );

        $app[static::FACTORY] = $app->protect(
            function () use ($service) {
                return $service->getFactory();
            }
        );
    }

    /**
     * (non-PHPdoc)
     * @see \Silex\ServiceProviderInterface::boot()
     * @param Application $app
     */
    public function boot(Application $app)
    {
        // :)
    }

    /**
     * @inheritdoc
     */
    public function generate()
    {
        return UuidGenerator::uuid4()->toString();
    }

    public function getFactory()
    {
        return UuidGenerator::getFactory();
    }
}
