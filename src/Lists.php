<?php

declare(strict_types=1);

namespace UIAwesome\Html\Interop;

/**
 * Represents list-related HTML element tag names as a backed string enum.
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements#text_content
 */
enum Lists: string
{
    /**
     * Case for the `<dd>` HTML tag.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dd
     */
    case DD = 'dd';

    /**
     * Case for the `<dl>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dl
     */
    case DL = 'dl';

    /**
     * Case for the `<dt>` HTML tag.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dt
     */
    case DT = 'dt';

    /**
     * Case for the `<li>` HTML tag.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/li
     */
    case LI = 'li';

    /**
     * Case for the `<ol>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ol
     */
    case OL = 'ol';

    /**
     * Case for the `<ul>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ul
     */
    case UL = 'ul';
}
