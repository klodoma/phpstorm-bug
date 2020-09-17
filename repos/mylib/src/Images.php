<?php

namespace MyLib;

trait Images
{

    /**
     * @var string|null
     *
     * @ORM\Column(name="images", type="string", length=5000, nullable=true, options={"comment":"Images"})
     */
    private ?string $images;

    /**
     * @return string|null
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param string|null $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }
}
