<?php
namespace CRM\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;

/**
 * Account
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CRM\CustomerBundle\Entity\AccountRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ExclusionPolicy("all")
 */
class Account
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255)
     * @Expose
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=255, nullable=true)
     * @Expose
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Contact", type="string", length=255, nullable=true)
     * @Expose
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="TVA", type="string", length=255, nullable=true)
     * @Expose
     */
    private $tVA;

    /**
     * @var string
     *
     * @ORM\Column(name="SiteWeb", type="string", length=255, nullable=true)
     * @Expose
     */
    private $siteWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="Phone", type="string", length=255, nullable=true)
     * @Expose
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="FAX", type="string", length=255, nullable=true)
     * @Expose
     */
    private $fAX;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="_LastWriteTime", type="datetime", nullable=true)
     * @Expose
     */
    private $lastWriteTime;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="_CreationTime", type="datetime")
     * @Expose
     */
    private $CreationTime;
    
    /**
     * @ORM\ManyToOne(targetEntity="CRM\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="_LastWriteUser", nullable=true)
     * @Expose
     */
    private $lastWriteUser;
    
    /**
     * @ORM\ManyToOne(targetEntity="CRM\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="_CreationUser",nullable=false)
     * @Expose
     */
    private $creationUser;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="_RowVersion", type="integer")
     * @Expose
     */
    private $rowVersion;
    
    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(length=128, unique=true)
     * @Expose
     */
    private $slug;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Account
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
     * Set adresse
     *
     * @param string $adresse
     * @return Account
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return Account
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    
        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set tVA
     *
     * @param string $tVA
     * @return Account
     */
    public function setTVA($tVA)
    {
        $this->tVA = $tVA;
    
        return $this;
    }

    /**
     * Get tVA
     *
     * @return string 
     */
    public function getTVA()
    {
        return $this->tVA;
    }

    /**
     * Set siteWeb
     *
     * @param string $siteWeb
     * @return Account
     */
    public function setSiteWeb($siteWeb)
    {
        $this->siteWeb = $siteWeb;
    
        return $this;
    }

    /**
     * Get siteWeb
     *
     * @return string 
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Account
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set fAX
     *
     * @param string $fAX
     * @return Account
     */
    public function setFAX($fAX)
    {
        $this->fAX = $fAX;
    
        return $this;
    }

    /**
     * Get fAX
     *
     * @return string 
     */
    public function getFAX()
    {
        return $this->fAX;
    }

    /**
     * Set lastWriteTime
     *
     * @param \DateTime $lastWriteTime
     * @return Account
     */
    public function setLastWriteTime($lastWriteTime)
    {
        $this->lastWriteTime = $lastWriteTime;
    
        return $this;
    }

    /**
     * Get lastWriteTime
     *
     * @return \DateTime 
     */
    public function getLastWriteTime()
    {
        return $this->lastWriteTime;
    }

    /**
     * Set CreationTime
     *
     * @param \DateTime $creationTime
     * @return Account
     */
    public function setCreationTime($creationTime)
    {
        $this->CreationTime = $creationTime;
    
        return $this;
    }

    /**
     * Get CreationTime
     *
     * @return \DateTime 
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }

    /**
     * Set lastWriteUser
     *
     * @param \CRM\UserBundle\Entity\User $lastWriteUser
     * @return Account
     */
    public function setLastWriteUser(\CRM\UserBundle\Entity\User $lastWriteUser)
    {
        $this->lastWriteUser = $lastWriteUser;
    
        return $this;
    }

    /**
     * Get lastWriteUser
     *
     * @return integer 
     */
    public function getLastWriteUser()
    {
        return $this->lastWriteUser;
    }

    /**
     * Set rowVersion
     *
     * @param integer $rowVersion
     * @return Account
     */
    public function setRowVersion($rowVersion)
    {
        $this->rowVersion = $rowVersion;
    
        return $this;
    }

    /**
     * Get rowVersion
     *
     * @return integer 
     */
    public function getRowVersion()
    {
        return $this->rowVersion;
    }

    /**
     * Set creationUser
     *
     * @param \CRM\UserBundle\Entity\User $creationUser
     * @return Account
     */
    public function setCreationUser(\CRM\UserBundle\Entity\User $creationUser)
    {
        $this->creationUser = $creationUser;
    
        return $this;
    }

    /**
     * Get creationUser
     *
     * @return \CRM\UserBundle\Entity\User 
     */
    public function getCreationUser()
    {
        return $this->creationUser;
    }
    
    /**
     * @ORM\PreUpdate
     */
    public function lastWriteTime()
    {
        $this->setLastCreationTime(new \Datetime());
    }
    
    /**
     * @ORM\PrePersist
     */
    public function CreationTime()
    {
        $this->setCreationTime(new \Datetime());
    }
    
    /**
     * @ORM\PrePersist
     */
    public function creationRowVersion()
    {
        $this->setRowVersion(1);
    } 
    
    /**
     * @ORM\PreUpdate
     */
    public function updateRowVersion()
    {
        $this->setRowVersion($this->getRowVersion() + 1);
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Account
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    } 
}
