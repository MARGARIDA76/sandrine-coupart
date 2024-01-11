<?php

namespace App\Entity;

use App\Repository\RecipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private ?string $Temps_de_Preparation = null;

    #[ORM\Column(length: 255)]
    private ?string $Temps_de_Repos = null;

    #[ORM\Column(length: 255)]
    private ?string $Temps_de_Cuisson = null;

    #[ORM\Column(length: 255)]
    private ?string $Ingredients = null;

    #[ORM\Column(length: 255)]
    private ?string $Etapes = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Allergenes = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Regime = null;

    #[ORM\ManyToOne(inversedBy: 'recipes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Recette $Recette = null;


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

    public function getTemptsDePreparation(): ?string
    {
        return $this->Temps_de_Preparation;
    }

    public function setTempsDePreparation(string $Temps_de_Preparation): static
    {
        $this->Temps_de_Preparation = $Temps_de_Preparation;

        return $this;
    }

    public function getTempsDeRepos(): ?string
    {
        return $this->Temps_de_Repos;
    }

    public function setTempsDeRepos(string $Temps_de_Repos): static
    {
        $this->Temps_de_Repos = $Temps_de_Repos;

        return $this;
    }

    public function getTempsDeCuisson(): ?string
    {
        return $this->Temps_de_Cuisson;
    }

    public function setTempsDeCuisson(string $Temps_de_Cuisson): static
    {
        $this->Temps_de_Cuisson = $Temps_de_Cuisson;

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

    public function getRegime(): ?string
    {
        return $this->Regime;
    }

    public function setRegime(string $Regime): static
    {
        $this->Regime = $Regime;

        return $this;
    }

    public function getRecette(): ?Recette
    {
        return $this->Recette;
    }

    public function setRecette(?Recette $Recette): static
    {
        $this->Recette = $Recette;

        return $this;
    }
}
