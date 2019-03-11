<?php
namespace PlaceholderX;

use PlaceholderX\AbstractFileNameGenerator;

class SequenceBasedFileNameGenerator extends AbstractFileNameGenerator
{
    /**
     * @var int
     */
    private $index = 0;

    /**
     * @return string
     */
    public function getName(): string
    {
        return ++$this->index . "." . $this->getExtension();
    }
}
