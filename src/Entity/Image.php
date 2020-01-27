<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 */
class Image
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $title;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)

     */

    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Emlak", inversedBy="images")
     */
    private $emlak;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

     
    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getEmlak(): ?Emlak
    {
        return $this->emlak;
    }

    public function setEmlak(?Emlak $emlak): self
    {
        $this->emlak = $emlak;

        return $this;
    }
}
