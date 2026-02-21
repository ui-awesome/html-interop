<?php

declare(strict_types=1);

namespace UIAwesome\Html\Interop;

/**
 * Represents metadata block HTML element tag names as a backed string enum implementing {@see BlockInterface}.
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Guides/Content_categories#metadata_content
 *
 * @copyright Copyright (C) 2026 Terabytesoftw.
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
