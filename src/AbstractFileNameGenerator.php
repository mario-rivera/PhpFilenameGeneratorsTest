<?php
namespace PlaceholderX;

use PlaceholderX\Exceptions\UnsupportedExtensionException;
use PlaceholderX\FileNameGeneratorInterface;

abstract class AbstractFileNameGenerator implements FileNameGeneratorInterface
{
    /**
     * @var array
     */
    protected static $allowedExtensions = ['txt', 'csv'];

    /**
     * @var string
     */
    protected $extension = self::DEFAULT_EXTENSION;

    /**
     * @param string $extension
     * @return FileNameGeneratorInterface
     * @throws UnsupportedExtensionException
     */
    public function setExtension(string $extension): FileNameGeneratorInterface
    {
        $extension = strtolower($extension);
        if( !in_array($extension, self::$allowedExtensions) ){
            throw new UnsupportedExtensionException("{$extension} is not a valid extension");
        }

        $this->extension = $extension;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }
}
