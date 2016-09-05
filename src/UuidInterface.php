<?php

namespace SilexFriends\Uuid;

/**
 * Uuid Service Provider Interface
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
interface UuidInterface
{
    /**
     * @const string
     */
    const GENERATE = 'uuid.generate';
    const FACTORY = 'uuid.factory';

    /**
     * Generate UUID
     *
     * @return string
     */
    public function generate();

    public function getFactory();
}
