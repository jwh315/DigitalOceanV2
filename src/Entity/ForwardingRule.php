<?php

/*
 * This file is part of the DigitalOceanV2 library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DigitalOceanV2\Entity;

/**
 * @author Jacob Holmes <jwh315@cox.net>
 */
class ForwardingRule extends AbstractEntity
{
    /**
     * @var string
     */
    public $entryProtocol;

    /**
     * @var int
     */
    public $entryPort;

    /**
     * @var string
     */
    public $targetProtocol;

    /**
     * @var int
     */
    public $targetPort;

    /**
     * @var string
     */
    public $certificateId;

    /**
     * @var string
     */
    public $tlsPassthrough;
}
