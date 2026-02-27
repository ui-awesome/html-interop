<?php

declare(strict_types=1);

namespace UIAwesome\Html\Interop;

/**
 * Represents table-related HTML element tag names as a backed string enum.
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements#table_content
 *
 * @copyright Copyright (C) 2025 Terabytesoftw.
 * @license https://opensource.org/license/bsd-3-clause BSD 3-Clause License.
 */
enum Table: string
{
    /**
     * Case for the `<caption>` HTML tag.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/caption
     */
    case CAPTION = 'caption';

    /**
     * Case for the `<colgroup>` HTML tag.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/colgroup
     */
    case COLGROUP = 'colgroup';
    /**
     * Case for the `<table>` HTML tag.
     *
     * Categorized as flow, and palpable content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/table
     */
    case TABLE = 'table';

    /**
     * Case for the `<tbody>` HTML tag.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/tbody
     */
    case TBODY = 'tbody';

    /**
     * Case for the `<td>` HTML tag.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/td
     */
    case TD = 'td';

    /**
     * Case for the `<tfoot>` HTML tag.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/tfoot
     */
    case TFOOT = 'tfoot';

    /**
     * Case for the `<th>` HTML tag.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/th
     */
    case TH = 'th';

    /**
     * Case for the `<thead>` HTML tag.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/thead
     */
    case THEAD = 'thead';

    /**
     * Case for the `<tr>` HTML tag.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/tr
     */
    case TR = 'tr';
}
