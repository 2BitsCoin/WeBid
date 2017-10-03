<?php

namespace WeBid;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accounts
 *
 * @ORM\Table(name="accounts")
 * @ORM\Entity
 */
class Accounts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="account_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $accountId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=15, nullable=false)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=6, scale=2, nullable=false)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="paid_at", type="datetime", nullable=true)
     */
    private $paidAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    protected $createdAt;

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return DateTime
     */
    public function getPaidAt()
    {
        return $this->paidAt;
    }

    /**
     * @param DateTime $paidAt
     */
    public function setPaidAt($paidAt)
    {
        $this->paidAt = $paidAt;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }


}

