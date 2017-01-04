<?php

/**
 * Class ReferenceField
 */
class ReferenceField extends DatalessField
{
    /** @var string $hint */
    protected $hint;

    /** @var string $imageFilename */
    protected $imageFilename;

    /** @var string $imagePath */
    protected $imagePath;

    /** @var string $base_image_path */
    private static $base_image_path = 'mysite/dist/images/cms/reference';

    /** @var string $border_color */
    private static $border_color = '#0073aa';

    public function __construct($name, $title = null, $hint = '', $imageFilename = '')
    {
        $this->setHint($hint);
        $this->setImageFilename($imageFilename);
        $this->setImagePath();

        parent::__construct($name, $title);
    }

    /**
     * @param string $hint
     * @return ReferenceField $this
     */
    public function setHint($hint)
    {
        $this->hint = $hint;

        return $this;
    }

    /**
     * @return string
     */
    public function getHint()
    {
        return $this->hint;
    }

    /**
     * @return ReferenceField $this
     */
    protected function setImagePath()
    {
        $this->imagePath = Controller::join_links(self::config()->get('base_image_path'), $this->getImageFilename());
        return $this;
    }

    /**
     * @return string
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }

    public function getBorderColor()
    {
        return self::config()->get('border_color');
    }

    /**
     * @param string $imageFilename
     * @return ReferenceField $this
     */
    public function setImageFilename($imageFilename)
    {
        $this->imageFilename = $imageFilename;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageFilename()
    {
        return $this->imageFilename;
    }
}
