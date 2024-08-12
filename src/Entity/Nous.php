<?php

namespace App\Entity;

use App\Repository\NousRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NousRepository::class)]
class Nous
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
