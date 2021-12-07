<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
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
    private $content;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $created_art;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Slug;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Author_IP;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nb_view;

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
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

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

    public function getSlug(): ?string
    {
        return $this->Slug;
    }

    public function setSlug(?string $Slug): self
    {
        $this->Slug = $Slug;

        return $this;
    }

    public function getAuthorIP(): ?string
    {
        return $this->Author_IP;
    }

    public function setAuthorIP(?string $Author_IP): self
    {
        $this->Author_IP = $Author_IP;

        return $this;
    }

    public function getNbView(): ?string
    {
        return $this->nb_view;
    }

    public function setNbView(?string $nb_view): self
    {
        $this->nb_view = $nb_view;

        return $this;
    }
}
