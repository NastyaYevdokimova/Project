<?php
namespace Evdokymova\Blog\Api\Data;

/**
 * Interface PostInterface
 * @package Evdokymova\Api\Data
 * @api
 */
interface PostInterface
{
    /**#@+
     * Constants
     * @var string
     */
    const ID = 'id';
    const NAME = 'name';
    const COUNTRY = 'country';
    const STAGES = 'stages';
    /**#@-*/

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param int $name
     * @return $this
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country);

    /**
     * @return string
     */
    public function getStages();

    /**
     * @param string $stages
     * @return $this
     */
    public function setStages(string $stages);
}
