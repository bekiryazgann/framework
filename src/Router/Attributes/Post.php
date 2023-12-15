<?php

namespace src\Router\Attributes;

use Attribute;

#[Attribute]
class Post
{
    /**
     * @param string $path
     * @param array $options
     */
    public function __construct(
        private string $path,
        private array $options = []
    ) {
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getHttpMethod(): string
    {
        return 'POST';
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }
}