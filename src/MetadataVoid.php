<?php

declare(strict_types=1);

namespace UIAwesome\Html\Interop;

/**
 * Represents metadata HTML elements according to the HTML standard specification.
 *
 * Provides a type-safe, standards-compliant set of metadata element tag names for use in element rendering, tags and
 * view helpers.
 *
 * Each case corresponds to a valid metadata HTML tag as defined by the W3C and MDN documentation.
 *
 * Key features.
 * - Designed for use in view, tags and components requiring metadata element structure.
 * - Ensures technical consistency with the HTML specification and modern web standards.
 * - Implementation of {@see VoidInterface} for contract adherence.
 * - Integration-ready for tag rendering and element generation APIs.
 * - Strict mapping of metadata HTML tags for semantic markup generation.
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Guides/Content_categories#metadata_content
 * {@see VoidInterface} for contract details.
 *
 * @copyright Copyright (C) 2025 Terabytesoftw.
 * @license https://opensource.org/license/bsd-3-clause BSD 3-Clause License.
 */
enum MetadataVoid: string implements VoidInterface
{
    /**
     * Case for the `<base>` HTML tag.
     *
     * Categorized as metadata content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/base
     */
    case BASE = 'base';

    /**
     * Case for the `<link>` HTML tag.
     *
     * Categorized as metadata content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/link
     */
    case LINK = 'link';

    /**
     * Case for the `<meta>` HTML tag.
     *
     * Categorized as metadata content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/meta
     */
    case META = 'meta';
}
