<?php
/**
 * Event
 *
 * @Table(name="Event", indexes={@Index(name="fk_Event_User1", columns={"id_administrator_User"})})
 * @Entity
 */
class Event
{
    /**
     * @var string
     *
     * @Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @Column(name="start_time", type="datetime", nullable=false)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @Column(name="and_time", type="datetime", nullable=true)
     */
    private $andTime;

    /**
     * @var integer
     *
     * @Column(name="female_price", type="integer", nullable=true)
     */
    private $femalePrice;

    /**
     * @var integer
     *
     * @Column(name="male_price", type="integer", nullable=true)
     */
    private $malePrice;

    /**
     * @var integer
     *
     * @Column(name="age_restriction", type="integer", nullable=true)
     */
    private $ageRestriction;

    /**
     * @var string
     *
     * @Column(name="page_link", type="string", length=255, nullable=true)
     */
    private $pageLink;

    /**
     * @var string
     *
     * @Column(name="facebook_id", type="string", length=255, nullable=true)
     */
    private $facebookId;

    /**
     * @var integer
     *
     * @Column(name="id_event", type="integer")
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $idEvent;

    /**
     * @var User
     *
     * @ManyToOne(targetEntity="User")
     * @JoinColumns({
     *   @JoinColumn(name="id_administrator_User", referencedColumnName="id_user")
     * })
     */
    private $idAdministratorUser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ManyToMany(targetEntity="User", inversedBy="idEvent")
     * @JoinTable(name="Event_has_User",
     *   joinColumns={@JoinColumn(name="id_event", referencedColumnName="id_event")},
     *   inverseJoinColumns={@JoinColumn(name="id_user", referencedColumnName="id_user")}
     * )
     */
    private $idUser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idUser = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     * @return Event
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
     * Set description
     *
     * @param string $description
     * @return Event
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     * @return Event
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime 
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set andTime
     *
     * @param \DateTime $andTime
     * @return Event
     */
    public function setAndTime($andTime)
    {
        $this->andTime = $andTime;

        return $this;
    }

    /**
     * Get andTime
     *
     * @return \DateTime 
     */
    public function getAndTime()
    {
        return $this->andTime;
    }

    /**
     * Set femalePrice
     *
     * @param integer $femalePrice
     * @return Event
     */
    public function setFemalePrice($femalePrice)
    {
        $this->femalePrice = $femalePrice;

        return $this;
    }

    /**
     * Get femalePrice
     *
     * @return integer 
     */
    public function getFemalePrice()
    {
        return $this->femalePrice;
    }

    /**
     * Set malePrice
     *
     * @param integer $malePrice
     * @return Event
     */
    public function setMalePrice($malePrice)
    {
        $this->malePrice = $malePrice;

        return $this;
    }

    /**
     * Get malePrice
     *
     * @return integer 
     */
    public function getMalePrice()
    {
        return $this->malePrice;
    }

    /**
     * Set ageRestriction
     *
     * @param integer $ageRestriction
     * @return Event
     */
    public function setAgeRestriction($ageRestriction)
    {
        $this->ageRestriction = $ageRestriction;

        return $this;
    }

    /**
     * Get ageRestriction
     *
     * @return integer 
     */
    public function getAgeRestriction()
    {
        return $this->ageRestriction;
    }

    /**
     * Set pageLink
     *
     * @param string $pageLink
     * @return Event
     */
    public function setPageLink($pageLink)
    {
        $this->pageLink = $pageLink;

        return $this;
    }

    /**
     * Get pageLink
     *
     * @return string 
     */
    public function getPageLink()
    {
        return $this->pageLink;
    }

    /**
     * Set facebookId
     *
     * @param string $facebookId
     * @return Event
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;

        return $this;
    }

    /**
     * Get facebookId
     *
     * @return string 
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * Get idEvent
     *
     * @return integer 
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * Set idAdministratorUser
     *
     * @param User $idAdministratorUser
     * @return Event
     */
    public function setIdAdministratorUser(User $idAdministratorUser = null)
    {
        $this->idAdministratorUser = $idAdministratorUser;

        return $this;
    }

    /**
     * Get idAdministratorUser
     *
     * @return User 
     */
    public function getIdAdministratorUser()
    {
        return $this->idAdministratorUser;
    }

    /**
     * Add idUser
     *
     * @param User $idUser
     * @return Event
     */
    public function addIdUser(User $idUser)
    {
        $this->idUser[] = $idUser;

        return $this;
    }

    /**
     * Remove idUser
     *
     * @param User $idUser
     */
    public function removeIdUser(User $idUser)
    {
        $this->idUser->removeElement($idUser);
    }

    /**
     * Get idUser
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
