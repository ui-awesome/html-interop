<?php

declare(strict_types=1);

namespace UIAwesome\Html\Interop;

/**
 * Represents list-related HTML element tag names as a backed string enum.
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements#text_content
 *
 * @copyright Copyright (C) 2025 Terabytesoftw.
 * @license https://opensource.org/license/bsd-3-clause BSD 3-Clause License.
 */
enum Lists: string
{
    /**
     * Case for the `<dd>` HTML tag.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dd
     */
    case DD = 'dd';

    /**
     * Case for the `<dl>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dl
     */
    case DL = 'dl';

    /**
     * Case for the `<dt>` HTML tag.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dt
     */
    case DT = 'dt';

    /**
     * Case for the `<li>` HTML tag.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/li
     */
    case LI = 'li';

    /**
     * Case for the `<ol>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ol
     */
    case OL = 'ol';

    /**
     * Case for the `<ul>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ul
     */
    case UL = 'ul';
}
