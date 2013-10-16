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
 * HalHtmlRenderer
 *
 * @uses HalRenderer
 * @package Nocarrier
 * @author Ben Longden <ben@nocarrier.co.uk>
 */
class HalHtmlRenderer extends HalJsonRenderer
{
    /**
     * Render.
     *
     * @param \Nocarrier\Hal $resource
     * @param bool $pretty
     * @return string
     */
    public function render(Hal $resource, $pretty)
    {
        return '<pre>'.var_export($this->arrayForJson($resource), true).'</pre>';
    }

}
