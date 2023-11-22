<?php

namespace App\Entity;

use App\Repository\RecipeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecipeRepository::class)]
class Recipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    private ?string $Preparation = null;

    #[ORM\Column(length: 255)]
    private ?string $Repos = null;

    #[ORM\Column(length: 255)]
    private ?string $Cuisson = null;

    #[ORM\Column(length: 255)]
    private ?string $Ingredients = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Etapes = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Allergenes = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Regimes = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): static
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPreparation(): ?string
    {
        return $this->Preparation;
    }

    public function setPreparation(string $Preparation): static
    {
        $this->Preparation = $Preparation;

        return $this;
    }

    public function getRepos(): ?string
    {
        return $this->Repos;
    }

    public function setRepos(string $Repos): static
    {
        $this->Repos = $Repos;

        return $this;
    }

    public function getCuisson(): ?string
    {
        return $this->Cuisson;
    }

    public function setCuisson(string $Cuisson): static
    {
        $this->Cuisson = $Cuisson;

        return $this;
    }

    public function getIngredients(): ?string
    {
        return $this->Ingredients;
    }

    public function setIngredients(string $Ingredients): static
    {
        $this->Ingredients = $Ingredients;

        return $this;
    }

    public function getEtapes(): ?string
    {
        return $this->Etapes;
    }

    public function setEtapes(string $Etapes): static
    {
        $this->Etapes = $Etapes;

        return $this;
    }

    public function getAllergenes(): ?string
    {
        return $this->Allergenes;
    }

    public function setAllergenes(string $Allergenes): static
    {
        $this->Allergenes = $Allergenes;

        return $this;
    }

    public function getRegimes(): ?string
    {
        return $this->Regimes;
    }

    public function setRegimes(string $Regimes): static
    {
        $this->Regimes = $Regimes;

        return $this;
    }
}
