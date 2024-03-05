<?php

declare(strict_types=1);

namespace UIAwesome\Html\Interop;

/**
 * Provide methods for handling HTML input-related attributes.
 */
interface InputInterface extends RenderInterface
{
    /**
     * Set the `HTML` attributes.
     *
     * @param array $values Attribute values indexed by attribute names.
     *
     * @return static A new instance of the current class with the specified attributes.
     */
    public function attributes(array $values): static;

    /**
     * Set the `CSS` `HTML` class attribute.
     *
     * @param string $value The `CSS` attribute of the widget.
     * @param bool $override If `true` the value will be overridden.
     *
     * @return static A new instance of the current class with the specified class value.
     *
     * @link https://html.spec.whatwg.org/#classes
     */
    public function class(string $value, bool $override = false): static;

    /**
     * Generate the id and name attributes for the input field.
     *
     * @param string $formModel The form model name.
     * @param string $property The property name.
     *
     * @return static A new instance or clone of the current object with the id and name attributes set.
     */
    public function fieldAttributes(string $formModel, string $property): static;

    /**
     * Set the ID of the widget.
     *
     * @param string|null $value The ID of the widget.
     *
     * @return static A new instance of the current class with the specified ID value.
     *
     * @link https://html.spec.whatwg.org/multipage/dom.html#the-id-attribute
     */
    public function id(string|null $value): static;
}
