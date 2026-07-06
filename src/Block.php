<?php

declare(strict_types=1);

namespace UIAwesome\Html\Interop;

/**
 * Represents block-level HTML element tag names as a backed string enum.
 *
 * @see https://developer.mozilla.org/en-US/docs/Glossary/Block-level_content
 */
enum Block: string
{
    /**
     * Case for the `<address>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/address
     */
    case ADDRESS = 'address';

    /**
     * Case for the `<article>` HTML tag.
     *
     * Categorized as flow, palpable, and sectioning content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/article
     */
    case ARTICLE = 'article';

    /**
     * Case for the `<aside>` HTML tag.
     *
     * Categorized as flow, palpable, and sectioning content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/aside
     */
    case ASIDE = 'aside';

    /**
     * Case for the `<audio>` HTML tag.
     *
     * Categorized as embedded, flow, palpable, and phrasing content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/audio
     */
    case AUDIO = 'audio';

    /**
     * Case for the `<blockquote>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/blockquote
     */
    case BLOCKQUOTE = 'blockquote';

    /**
     * Case for the `<canvas>` HTML tag.
     *
     * Categorized as embedded, flow, and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/canvas
     */
    case CANVAS = 'canvas';

    /**
     * Case for the `<del>` HTML tag.
     *
     * Categorized as flow content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/del
     */
    case DEL = 'del';

    /**
     * Case for the `<details>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/details
     */
    case DETAILS = 'details';

    /**
     * Case for the `<dialog>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/dialog
     */
    case DIALOG = 'dialog';

    /**
     * Case for the `<div>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/div
     */
    case DIV = 'div';

    /**
     * Case for the `<fieldset>` HTML tag.
     *
     * Categorized as flow, and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/fieldset
     */
    case FIELDSET = 'fieldset';

    /**
     * Case for the `<figcaption>` HTML tag.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/figcaption
     */
    case FIGCAPTION = 'figcaption';

    /**
     * Case for the `<figure>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/figure
     */
    case FIGURE = 'figure';

    /**
     * Case for the `<footer>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/footer
     */
    case FOOTER = 'footer';

    /**
     * Case for the `<form>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/form
     */
    case FORM = 'form';

    /**
     * Case for the `<h1>` HTML tag.
     *
     * Categorized as flow, heading, and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/Heading_Elements
     */
    case H1 = 'h1';

    /**
     * Case for the `<h2>` HTML tag.
     *
     * Categorized as flow, heading, and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/Heading_Elements
     */
    case H2 = 'h2';

    /**
     * Case for the `<h3>` HTML tag.
     *
     * Categorized as flow, heading, and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/Heading_Elements
     */
    case H3 = 'h3';

    /**
     * Case for the `<h4>` HTML tag.
     *
     * Categorized as flow, heading, and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/Heading_Elements
     */
    case H4 = 'h4';

    /**
     * Case for the `<h5>` HTML tag.
     *
     * Categorized as flow, heading, and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/Heading_Elements
     */
    case H5 = 'h5';

    /**
     * Case for the `<h6>` HTML tag.
     *
     * Categorized as flow, heading, and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/Heading_Elements
     */
    case H6 = 'h6';

    /**
     * Case for the `<header>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/header
     */
    case HEADER = 'header';

    /**
     * Case for the `<hgroup>` HTML tag.
     *
     * Categorized as flow, heading, and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/hgroup
     */
    case HGROUP = 'hgroup';

    /**
     * Case for the `<iframe>` HTML tag.
     *
     * Categorized as embedded, flow, interactive, palpable, and phrasing content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/iframe
     */
    case IFRAME = 'iframe';

    /**
     * Case for the `<ins>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/ins
     */
    case INS = 'ins';

    /**
     * Case for the `<legend>` HTML tag.
     *
     * Permitted as the first child of a {@see self::FIELDSET} element.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/legend
     */
    case LEGEND = 'legend';

    /**
     * Case for the `<main>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/main
     */
    case MAIN = 'main';

    /**
     * Case for the `<menu>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/menu
     */
    case MENU = 'menu';

    /**
     * Case for the `<nav>` HTML tag.
     *
     * Categorized as flow, palpable, and sectioning content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/nav
     */
    case NAV = 'nav';

    /**
     * Case for the `<object>` HTML tag.
     *
     * Categorized as embedded, flow, form-associated, palpable, and phrasing content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/object
     */
    case OBJECT = 'object';

    /**
     * Case for the `<p>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/p
     */
    case P = 'p';

    /**
     * Case for the `<pre>` HTML tag.
     *
     * Categorized as flow and palpable content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/pre
     */
    case PRE = 'pre';

    /**
     * Case for the `<search>` HTML tag.
     *
     * Categorized as flow content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/search
     */
    case SEARCH = 'search';

    /**
     * Case for the `<section>` HTML tag.
     *
     * Categorized as flow, palpable, and sectioning content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/section
     */
    case SECTION = 'section';

    /**
     * Case for the `<select>` HTML tag.
     *
     * Categorized as flow, form-associated, palpable, and phrasing content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/select
     */
    case SELECT = 'select';

    /**
     * Case for the `<summary>` HTML tag.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/summary
     */
    case SUMMARY = 'summary';

    /**
     * Case for the `<textarea>` HTML tag.
     *
     * Categorized as flow, form-associated, palpable, and phrasing content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/textarea
     */
    case TEXT_AREA = 'textarea';

    /**
     * Case for the `<video>` HTML tag.
     *
     * Categorized as embedded, flow, interactive, palpable, and phrasing content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/video
     */
    case VIDEO = 'video';
}
