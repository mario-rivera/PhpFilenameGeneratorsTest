<?php
namespace PlaceholderX;

use PlaceholderX\AbstractFileNameGenerator;
use PlaceholderX\Exceptions\InvalidFormatException;

use DateTime;

class DateBasedFileNameGenerator extends AbstractFileNameGenerator
{
    /**
     * @var string
     */
    private $format;

    public function __construct(string $format)
    {
        $this->format = $format;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        $format = (new DateTime())->format($this->format);
        if(!$format){
            throw new InvalidFormatException();
        }
        
        return "{$format}.{$this->getExtension()}";
    }
}
