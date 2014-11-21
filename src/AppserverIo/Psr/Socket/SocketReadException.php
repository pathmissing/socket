<?php

/**
 * \AppserverIo\Psr\Socket\SocketReadException
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    Psr
 * @subpackage Socket
 * @author     Johann Zelger <jz@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-psr/socket
 */

namespace AppserverIo\Psr\Socket;

/**
 * Class SocketReadException
 *
 * @category   Appserver
 * @package    Psr
 * @subpackage Socket
 * @author     Johann Zelger <jz@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-psr/socket
 */
class SocketReadException extends \Exception
{

    /**
     * Defines message for exception
     *
     * @var string The message
     */
    protected $message = 'Read error occured';
}
