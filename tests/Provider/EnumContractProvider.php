<?php

declare(strict_types=1);

namespace UIAwesome\Html\Interop\Tests\Provider;

use UIAwesome\Html\Interop\{Block, Inline, Lists, MetadataBlock, MetadataVoid, Root, Table, Voids};

/**
 * Data provider for {@see \UIAwesome\Html\Interop\Tests\EnumContractTest} test cases.
 */
final class EnumContractProvider
{
    /**
     * @return array<string, array{class-string, array<string, string>}>
     */
    public static function contracts(): array
    {
        return [
            'block' => [
                Block::class,
                [
                    'ADDRESS' => 'address',
                    'ARTICLE' => 'article',
                    'ASIDE' => 'aside',
                    'AUDIO' => 'audio',
                    'BLOCKQUOTE' => 'blockquote',
                    'CANVAS' => 'canvas',
                    'DEL' => 'del',
                    'DETAILS' => 'details',
                    'DIALOG' => 'dialog',
                    'DIV' => 'div',
                    'FIELDSET' => 'fieldset',
                    'FIGCAPTION' => 'figcaption',
                    'FIGURE' => 'figure',
                    'FOOTER' => 'footer',
                    'FORM' => 'form',
                    'H1' => 'h1',
                    'H2' => 'h2',
                    'H3' => 'h3',
                    'H4' => 'h4',
                    'H5' => 'h5',
                    'H6' => 'h6',
                    'HEADER' => 'header',
                    'HGROUP' => 'hgroup',
                    'IFRAME' => 'iframe',
                    'INS' => 'ins',
                    'LEGEND' => 'legend',
                    'MAIN' => 'main',
                    'MENU' => 'menu',
                    'NAV' => 'nav',
                    'OBJECT' => 'object',
                    'P' => 'p',
                    'PRE' => 'pre',
                    'SEARCH' => 'search',
                    'SECTION' => 'section',
                    'SELECT' => 'select',
                    'SUMMARY' => 'summary',
                    'TEXT_AREA' => 'textarea',
                    'VIDEO' => 'video',
                ],
            ],
            'inline' => [
                Inline::class,
                [
                    'A' => 'a',
                    'ABBR' => 'abbr',
                    'B' => 'b',
                    'BDI' => 'bdi',
                    'BDO' => 'bdo',
                    'BUTTON' => 'button',
                    'CITE' => 'cite',
                    'CODE' => 'code',
                    'DATA' => 'data',
                    'DFN' => 'dfn',
                    'EM' => 'em',
                    'I' => 'i',
                    'KBD' => 'kbd',
                    'LABEL' => 'label',
                    'MAP' => 'map',
                    'MARK' => 'mark',
                    'METER' => 'meter',
                    'OUTPUT' => 'output',
                    'PICTURE' => 'picture',
                    'PROGRESS' => 'progress',
                    'Q' => 'q',
                    'RP' => 'rp',
                    'RT' => 'rt',
                    'RUBY' => 'ruby',
                    'S' => 's',
                    'SAMP' => 'samp',
                    'SMALL' => 'small',
                    'SPAN' => 'span',
                    'STRONG' => 'strong',
                    'SUB' => 'sub',
                    'SUP' => 'sup',
                    'TIME' => 'time',
                    'U' => 'u',
                    'VAR' => 'var',
                ],
            ],
            'lists' => [
                Lists::class,
                [
                    'DD' => 'dd',
                    'DL' => 'dl',
                    'DT' => 'dt',
                    'LI' => 'li',
                    'OL' => 'ol',
                    'UL' => 'ul',
                ],
            ],
            'metadata block' => [
                MetadataBlock::class,
                [
                    'NOSCRIPT' => 'noscript',
                    'SCRIPT' => 'script',
                    'STYLE' => 'style',
                    'TEMPLATE' => 'template',
                    'TITLE' => 'title',
                ],
            ],
            'metadata void' => [
                MetadataVoid::class,
                [
                    'BASE' => 'base',
                    'LINK' => 'link',
                    'META' => 'meta',
                ],
            ],
            'root' => [
                Root::class,
                [
                    'BODY' => 'body',
                    'HEAD' => 'head',
                    'HTML' => 'html',
                ],
            ],
            'table' => [
                Table::class,
                [
                    'CAPTION' => 'caption',
                    'COLGROUP' => 'colgroup',
                    'TABLE' => 'table',
                    'TBODY' => 'tbody',
                    'TD' => 'td',
                    'TFOOT' => 'tfoot',
                    'TH' => 'th',
                    'THEAD' => 'thead',
                    'TR' => 'tr',
                ],
            ],
            'voids' => [
                Voids::class,
                [
                    'AREA' => 'area',
                    'BR' => 'br',
                    'COL' => 'col',
                    'EMBED' => 'embed',
                    'HR' => 'hr',
                    'IMG' => 'img',
                    'INPUT' => 'input',
                    'PARAM' => 'param',
                    'SOURCE' => 'source',
                    'TRACK' => 'track',
                    'WBR' => 'wbr',
                ],
            ],
        ];
    }

    /**
     * @return array<string, array{class-string, string}>
     */
    public static function invalidValues(): array
    {
        return array_map(
            static fn(array $contract): array => [$contract[0], 'not-an-html-element'],
            self::contracts(),
        );
    }

    /**
     * @return array<string, array{class-string, string, string}>
     */
    public static function validValues(): array
    {
        $values = [];

        foreach (self::contracts() as [$enum, $cases]) {
            foreach ($cases as $name => $value) {
                $values["{$enum}::{$name}"] = [$enum, $name, $value];
            }
        }

        return $values;
    }
}
