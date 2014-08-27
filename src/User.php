<?php
/**
 * Teste de versao do GIT
 * User
 * @Table(name="User", uniqueConstraints={@UniqueConstraint(name="email_UNIQUE", columns={"email"})})
 * @Entity
 */
class User
{
    /**
     * @var string
     *
     * @Column(name="pass", type="string", length=45, nullable=false)
     */
    private $pass;

    /**
     * @var string
     *
     * @Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @Column(name="first_name", type="string", length=45, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @Column(name="last_name", type="string", length=45, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @Column(name="profile_message", type="string", length=60, nullable=true)
     */
    private $profileMessage;

    /**
     * @var string
     *
     * @Column(name="picture_message", type="string", length=255, nullable=true)
     */
    private $pictureMessage;

    /**
     * @var integer
     *
     * @Column(name="id_user", type="integer")
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ManyToMany(targetEntity="Event", mappedBy="idUser")
     * @JoinTable(name="Event_has_User",
     *   joinColumns={@JoinColumn(name="id_user", referencedColumnName="id_user")},
     *   inverseJoinColumns={@JoinColumn(name="id_event", referencedColumnName="id_event")}
     * )
     */
    private $idEvent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEvent = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set pass
     *
     * @param string $pass
     * @return User
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string 
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set profileMessage
     *
     * @param string $profileMessage
     * @return User
     */
    public function setProfileMessage($profileMessage)
    {
        $this->profileMessage = $profileMessage;

        return $this;
    }

    /**
     * Get profileMessage
     *
     * @return string 
     */
    public function getProfileMessage()
    {
        return $this->profileMessage;
    }

    /**
     * Set pictureMessage
     *
     * @param string $pictureMessage
     * @return User
     */
    public function setPictureMessage($pictureMessage)
    {
        $this->pictureMessage = $pictureMessage;

        return $this;
    }

    /**
     * Get pictureMessage
     *
     * @return string 
     */
    public function getPictureMessage()
    {
        return $this->pictureMessage;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Add idEvent
     *
     * @param Event $idEvent
     * @return User
     */
    public function addIdEvent(Event $idEvent)
    {
        $this->idEvent[] = $idEvent;

        return $this;
    }

    /**
     * Remove idEvent
     *
     * @param Event $idEvent
     */
    public function removeIdEvent(Event $idEvent)
    {
        $this->idEvent->removeElement($idEvent);
    }

    /**
     * Get idEvent
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    public function toArray()
    {
        return array(
            'id_user' => $this->getIdUser(),
            'email' => $this->getEmail(),
            'first_name' => $this->getFirstName(),
            'last_name' => $this->getLastName()
        );
    }
}
