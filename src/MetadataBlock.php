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
 * - Implementation of {@see BlockInterface} for contract adherence.
 * - Integration-ready for tag rendering and element generation APIs.
 * - Strict mapping of metadata HTML tags for semantic markup generation.
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Guides/Content_categories#metadata_content
 * {@see BlockInterface} for contract details.
 *
 * @copyright Copyright (C) 2025 Terabytesoftw.
 * @license https://opensource.org/license/bsd-3-clause BSD 3-Clause License.
 */
enum MetadataBlock: string implements BlockInterface
{
    /**
     * Case for the `<noscript>` HTML tag.
     *
     * Categorized as metadata, flow, and phrasing content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/noscript
     */
    case NOSCRIPT = 'noscript';

    /**
     * Case for the `<script>` HTML tag.
     *
     * Categorized as metadata, flow, and phrasing content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/script
     */
    case SCRIPT = 'script';

    /**
     * Case for the `<style>` HTML tag.
     *
     * Categorized as metadata content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/style
     */
    case STYLE = 'style';

    /**
     * Case for the `<template>` HTML tag.
     *
     * Categorized as metadata, flow, and phrasing content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/template
     */
    case TEMPLATE = 'template';

    /**
     * Case for the `<title>` HTML tag.
     *
     * Categorized as metadata content.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/title
     */
    case TITLE = 'title';
}
