<?php 


namespace app\Entity;

use Doctrine\ORM\Mapping as ORM;

class Demo {
    /**
     * @ORM\id
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id ;

    /**@ORM\Column(type="string" length=255) */
    private $title;

    /**@ORM\Column(type="string" length=2048) */
    private $contenu;
        

    /**
     * Get the value of id
     */ 
    public function getId(){
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id){
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle(){
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title){
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of contenu
     */ 
    public function getContenu(){
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     *
     * @return  self
     */ 
    public function setContenu($contenu){
        $this->contenu = $contenu;

        return $this;
    }
}