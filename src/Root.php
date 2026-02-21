<?php

declare(strict_types=1);

namespace UIAwesome\Html\Interop;

/**
 * Represents root-level HTML element tag names as a backed string enum implementing {@see BlockInterface}.
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements#main_root
 *
 * @copyright Copyright (C) 2025 Terabytesoftw.
 * @license https://opensource.org/license/bsd-3-clause BSD 3-Clause License.
 */
enum Root: string implements BlockInterface
{
    /**
     * Case for the `<body>` HTML tag.
     *
     * Represents the content of an HTML document.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/body
     */
    case BODY = 'body';

    /**
     * Case for the `<head>` HTML tag.
     *
     * Contains machine-readable information (metadata) about the document.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/head
     */
    case HEAD = 'head';

    /**
     * Case for the `<html>` HTML tag.
     *
     * Represents the root (top-level element) of an HTML document.
     *
     * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/html
     */
    case HTML = 'html';
}
