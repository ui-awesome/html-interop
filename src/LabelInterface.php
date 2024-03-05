<?php

declare(strict_types=1);

namespace UIAwesome\Html\Interop;

/**
 * Provide methods for handling HTML choice input-related attributes and properties.
 */
interface LabelInterface
{
    /**
     * Disable the label.
     *
     * @return static A new instance or clone of the current object with the label disabled.
     */
    public function disableLabel(): static;

    /**
     * Set the current instance as being enclosed by a label.
     *
     * @param bool $value The value to set.
     *
     * @return static A new instance of the current class with the specified enclosed by label property.
     */
    public function enclosedByLabel(bool $value): static;

    /**
     * Set the `HTML` label content.
     *
     * @param RenderInterface|string ...$values The `HTML` label content value.
     *
     * @return static A new instance of the current class with the specified `HTML` label content.
     */
    public function label(string|RenderInterface ...$values): static;

    /**
     * Set the `HTML` attributes for the label.
     *
     * @param array $values Attribute values indexed by attribute names.
     *
     * @return static A new instance of the current class with the specified label attributes.
     */
    public function labelAttributes(array $values): static;

    /**
     * Set the `CSS` class for the label.
     *
     * @param string $value The value of the class attribute.
     * @param bool $override If `true` the value will be overridden.
     *
     * @return static A new instance of the current class with the specified label class.
     */
    public function labelClass(string $value, bool $override = false): static;

    /**
     * Set the `for` attribute for the label.
     *
     * @param string|null $value The value for the `for` attribute.
     *
     * @return static A new instance of the current class with the specified label `for` attribute.
     */
    public function labelFor(string|null $value): static;
}
