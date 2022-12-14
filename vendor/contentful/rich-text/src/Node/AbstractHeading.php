<?php

/**
 * This file is part of the contentful/rich-text package.
 *
 * @copyright 2015-2022 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\RichText\Node;

abstract class AbstractHeading extends BlockNode
{
    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array
    {
        return [
            'nodeType' => static::getType(),
            'content' => $this->content,
            'data' => new \stdClass(),
        ];
    }
}
