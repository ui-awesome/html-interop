<?php

declare(strict_types=1);

namespace UIAwesome\Html\Interop;

/**
 * Represents table-related HTML element tag names as a backed string enum.
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements#table_content
 */
enum Table: string
{
    /**
     * Case for the `<caption>` HTML tag.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/caption
     */
    case CAPTION = 'caption';

    /**
     * Case for the `<colgroup>` HTML tag.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/colgroup
     */
    case COLGROUP = 'colgroup';
    /**
     * Case for the `<table>` HTML tag.
     *
     * Categorized as flow, and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/table
     */
    case TABLE = 'table';

    /**
     * Case for the `<tbody>` HTML tag.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/tbody
     */
    case TBODY = 'tbody';

    /**
     * Case for the `<td>` HTML tag.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/td
     */
    case TD = 'td';

    /**
     * Case for the `<tfoot>` HTML tag.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/tfoot
     */
    case TFOOT = 'tfoot';

    /**
     * Case for the `<th>` HTML tag.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/th
     */
    case TH = 'th';

    /**
     * Case for the `<thead>` HTML tag.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/thead
     */
    case THEAD = 'thead';

    /**
     * Case for the `<tr>` HTML tag.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/tr
     */
    case TR = 'tr';
}
