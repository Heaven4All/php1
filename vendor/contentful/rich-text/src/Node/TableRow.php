<?php

/**
 * This file is part of the contentful/rich-text package.
 *
 * @copyright 2015-2022 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\RichText\Node;

class TableRow extends BlockNode
{
    /**
     * {@inheritdoc}
     */
    public static function getType(): string
    {
        return 'table-row';
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array
    {
        return [
            'nodeType' => self::getType(),
            'content' => $this->content,
            'data' => new \stdClass(),
        ];
    }
}
