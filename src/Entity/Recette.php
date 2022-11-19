<?php

namespace App\Entity;

use App\Repository\RecetteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecetteRepository::class)]
class Recette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $tempsPreparation = null;

    #[ORM\Column(length: 255)]
    private ?string $tempsRepos = null;

    #[ORM\Column(length: 255)]
    private ?string $tempsCuisson = null;

    #[ORM\Column(length: 255)]
    private ?string $ingredients = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $etape = null;

    #[ORM\Column(length: 255)]
    private ?string $allergenes = null;

    #[ORM\Column]
    private ?bool $vegetarien = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTempsPreparation(): ?string
    {
        return $this->tempsPreparation;
    }

    public function setTempsPreparation(string $tempsPreparation): self
    {
        $this->tempsPreparation = $tempsPreparation;

        return $this;
    }

    public function getTempsRepos(): ?string
    {
        return $this->tempsRepos;
    }

    public function setTempsRepos(string $tempsRepos): self
    {
        $this->tempsRepos = $tempsRepos;

        return $this;
    }

    public function getTempsCuisson(): ?string
    {
        return $this->tempsCuisson;
    }

    public function setTempsCuisson(string $tempsCuisson): self
    {
        $this->tempsCuisson = $tempsCuisson;

        return $this;
    }

    public function getIngredients(): ?string
    {
        return $this->ingredients;
    }

    public function setIngredients(string $ingredients): self
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    public function getEtape(): ?string
    {
        return $this->etape;
    }

    public function setEtape(string $etape): self
    {
        $this->etape = $etape;

        return $this;
    }

    public function getAllergenes(): ?string
    {
        return $this->allergenes;
    }

    public function setAllergenes(string $allergenes): self
    {
        $this->allergenes = $allergenes;

        return $this;
    }

    public function isVegetarien(): ?bool
    {
        return $this->vegetarien;
    }

    public function setVegetarien(bool $vegetarien): self
    {
        $this->vegetarien = $vegetarien;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
