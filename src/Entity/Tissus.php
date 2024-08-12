<?php

namespace App\Entity;

use App\Repository\TissusRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TissusRepository::class)]
class Tissus
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
