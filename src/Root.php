<?php

declare(strict_types=1);

namespace UIAwesome\Html\Interop;

/**
 * Represents root-level HTML element tag names as a backed string enum.
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements#main_root
 */
enum Root: string
{
    /**
     * Case for the `<body>` HTML tag.
     *
     * Represents the content of an HTML document.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/body
     */
    case BODY = 'body';

    /**
     * Case for the `<head>` HTML tag.
     *
     * Contains machine-readable information (metadata) about the document.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/head
     */
    case HEAD = 'head';

    /**
     * Case for the `<html>` HTML tag.
     *
     * Represents the root (top-level element) of an HTML document.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/html
     */
    case HTML = 'html';
}
