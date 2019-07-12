<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;
	
	    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\BlogPost", inversedBy="categories")
     */
    private $blogpost_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
	
	    public function getBlogpostId(): ?BlogPost
    {
        return $this->blogpost_id;
    }
	
    public function setBlogpostId(?BlogPost $blogpost_id): self
    {
        $this->blogpost_id = $blogpost_id;
		
        return $this;
    }
}
