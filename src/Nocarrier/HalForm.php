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
 * The HalForm class
 *
 * @package Nocarrier
 * @author Ben Longden <ben@nocarrier.co.uk>
 */
class HalForm
{
    /**
     * The URI represented by this HalForm.
     *
     * @var string
     */
    protected $uri;

    /**
     * The form
     *
     * @var string
     */
    protected $form;

    /**
     * Any attributes on this link.
     *
     * array(
     *  'templated' => 0,
     *  'type' => 'application/hal+json',
     *  'deprecation' => 1,
     *  'name' => 'latest',
     *  'profile' => 'http://.../profile/order',
     *  'title' => 'The latest order',
     *  'hreflang' => 'en'
     * )
     *
     * @var array
     */
    protected $attributes;

    /**
     * The \Nocarrier\HalForm object.
     *
     * Supported attributes in Hal (specification section 5).
     *
     * @param string $uri
     *   The form represented by this link.
     * @param array $attributes
     *   Any additional attributes.
     */
    public function __construct($form, $attributes)
    {
        $this->form = $form;
        $this->attributes = $attributes;
    }

    /**
     * Return the form.
     *
     * @return string
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Return the URI from this link.
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Returns the attributes for this link.
     *
     * return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * The string representation of this link (the URI).
     *
     * return string
     */
    public function __toString()
    {
        return $this->form;
    }
}
