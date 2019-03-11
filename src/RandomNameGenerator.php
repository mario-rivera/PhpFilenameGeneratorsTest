<?php
namespace PlaceholderX;

use PlaceholderX\AbstractFileNameGenerator;

class RandomNameGenerator extends AbstractFileNameGenerator
{
    /**
     * @var \Nubs\RandomNameGenerator\All
     */
    private $generator;

    public function  __construct()
    {
        $this->generator = \Nubs\RandomNameGenerator\All::create();
    }

     /**
     * @return string
     */
    public function getName(): string
    {
        return "{$this->generator->getName()}.{$this->getExtension()}";
    }
}
