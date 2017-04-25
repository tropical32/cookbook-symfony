<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Ingredient
 *
 * @ORM\Table(name="ingredient")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IngredientRepository")
 */
class Ingredient
{
    function __toString() {
        return $this->getName();
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * Many Ingredients have Many Steps.
     * @ORM\ManyToMany(targetEntity="RecipeStep", mappedBy="ingredients")
     */
    private $recipe_steps;

    public function __construct() {
        $this->recipe_steps = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Ingredient
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add recipeStep
     *
     * @param \AppBundle\Entity\RecipeStep $recipeStep
     *
     * @return Ingredient
     */
    public function addRecipeStep(\AppBundle\Entity\RecipeStep $recipeStep)
    {
        $this->recipe_steps[] = $recipeStep;

        return $this;
    }

    /**
     * Remove recipeStep
     *
     * @param \AppBundle\Entity\RecipeStep $recipeStep
     */
    public function removeRecipeStep(\AppBundle\Entity\RecipeStep $recipeStep)
    {
        $this->recipe_steps->removeElement($recipeStep);
    }

    /**
     * Get recipeSteps
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecipeSteps()
    {
        return $this->recipe_steps;
    }
}