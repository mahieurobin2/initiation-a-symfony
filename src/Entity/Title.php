<?php

namespace App\Entity;

use App\Repository\TitleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TitleRepository::class)
 */
class Title
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Content;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $created_art;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nb_views;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $create_ip;

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

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(?string $Content): self
    {
        $this->Content = $Content;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getCreatedArt(): ?\DateTimeInterface
    {
        return $this->created_art;
    }

    public function setCreatedArt(?\DateTimeInterface $created_art): self
    {
        $this->created_art = $created_art;

        return $this;
    }

    public function getNbViews(): ?string
    {
        return $this->nb_views;
    }

    public function setNbViews(?string $nb_views): self
    {
        $this->nb_views = $nb_views;

        return $this;
    }

    public function getCreateIp(): ?string
    {
        return $this->create_ip;
    }

    public function setCreateIp(?string $create_ip): self
    {
        $this->create_ip = $create_ip;

        return $this;
    }
}
