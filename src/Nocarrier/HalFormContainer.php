<?php
/**
 * This file is part of the Hal library
 *
 * (c) Ben Longden <ben@nocarrier.co.uk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Nocarrier
 */

namespace Nocarrier;

/**
 * The HalFormContainer class
 *
 * @package Nocarrier
 * @author Ben Longden <ben@nocarrier.co.uk>
 */
class HalFormContainer extends \ArrayObject
{
    /**
     * Retrieve a form from the container by name.
     *
     * @param string $name
     *   The form relation required.
     * @return array|bool
     *   Form if found. Otherwise false.
     */
    public function get($name)
    {
        if (array_key_exists($rel, $this)) {
            return $this[$rel];
        }

        return false;
    }
}
