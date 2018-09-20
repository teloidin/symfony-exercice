<?php

namespace AppBundle\Models;


class ToDoClass
{
    private $id;
    private $name;
    private $description;
    private $state;
    private $criticity;

    /**
     * ToDoClass constructor.
     * @param $id
     * @param $name
     * @param $description
     * @param $state
     * @param $criticity
     */
    public function __construct($id, $name, $description, $state, $criticity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->state = $state;
        $this->criticity = $criticity;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getCriticity()
    {
        return $this->criticity;
    }

    /**
     * @param mixed $criticity
     */
    public function setCriticity($criticity)
    {
        $this->criticity = $criticity;
    }

}


