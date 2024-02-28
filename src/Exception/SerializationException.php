<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xabbuh\XApi\Serializer\Exception;

use DomainException;

/**
 * @author Jérôme Parmentier <jerome.parmentier@acensi.fr>
 */
abstract class SerializationException extends DomainException implements ExceptionInterface
{
}
