<?php 
namespace App\Entity;

class PropertySearch{

    /**
     * @var int|null
     */
    private $society; 

        /**
     * @var int|null
     */
    private $titleM; 

    /**
     * @return int|null
     */
    public function getSociety(): ?int{
        return $this->society;
    }
    /**
     * @param int|null $society
     * @return PropertySearch
     */
    public function setSociety(int $society): PropertySearch{
        $this->society = $society; 
        return $this; 
    }

    /**
     * @return int|null
     */
    public function getTitleM(): ?int{
        return $this->titleM;
    }
    /**
     * @param int|null $titleM
     * @return PropertySearch
     */
    public function setTitleM(int $titleM): PropertySearch{
        $this->titleM = $titleM; 
        return $this; 
    }
}