<?php
// src/CRM/UserBundle/Entity/User.php

namespace CRM\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;

/**
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="CRM\UserBundle\Entity\UserRepository")
 * @ExclusionPolicy("all") 
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose
     */
    protected $id;
    
    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     * @Expose
     * @Groups({"Me"})
     */
    protected $usernameCanonical;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     * @Expose
     * @Groups({"Me"})
     */
    protected $emailCanonical;

    /**
     * @var boolean
     * @Expose
     * @Groups({"Me"})
     */
    protected $enabled;

    /**
     * The salt to use for hashing
     *
     * @var string
     * @Expose
     * @Groups({"Me"})
     */
    protected $salt;

    /**
     * Encrypted password. Must be persisted.
     *
     * @var string
     * @Expose
     * @Groups({"Me"})
     */
    protected $password;

    /**
     * Plain password. Used for model validation. Must not be persisted.
     *
     * @var string
     * @Expose
     * @Groups({"Me"})
     */
    protected $plainPassword;

    /**
     * @var \DateTime
     */
    protected $lastLogin;

    /**
     * Random string sent to the user email address in order to verify it
     *
     * @var string
     */
    protected $confirmationToken;

    /**
     * @var \DateTime
     */
    protected $passwordRequestedAt;

    /**
     * @var Collection
     */
    protected $groups;

    /**
     * @var boolean
     * @Expose
     * @Groups({"Me"})
     */
    protected $locked;

    /**
     * @var boolean
     * @Expose
     * @Groups({"Me"})
     */
    protected $expired;

    /**
     * @var \DateTime
     */
    protected $expiresAt;

    /**
     * @var array
     * @Expose
     * @Groups({"Me"})
     */
    protected $roles;

    /**
     * @var boolean
     * @Expose
     * @Groups({"Me"})
     */
    protected $credentialsExpired;

    /**
     * @var \DateTime
     */
    protected $credentialsExpireAt;

    public function __construct()
    {
        parent::__construct();
    }
}
