<?php

declare(strict_types=1);

namespace UIAwesome\Html\Interop;

/**
 * Represents metadata void HTML element tag names as a backed string enum.
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Guides/Content_categories#metadata_content
 */
enum MetadataVoid: string
{
    /**
     * Case for the `<base>` HTML tag.
     *
     * Categorized as metadata content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/base
     */
    case BASE = 'base';

    /**
     * Case for the `<link>` HTML tag.
     *
     * Categorized as metadata content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/link
     */
    case LINK = 'link';

    /**
     * Case for the `<meta>` HTML tag.
     *
     * Categorized as metadata content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/meta
     */
    case META = 'meta';
}
