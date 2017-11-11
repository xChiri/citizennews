<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;


/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentRepository")
 */
class Comment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="letBy", type="string", length=255)
     */
    private $letBy;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     * 
     * @Assert\NotBlank()
     * 
     * @Assert\Length(
     *          min = 2,
     *          max = 200,
     *          minMessage = "Your comment must be at least 2 characters long",
     *          maxMessage = "Your comment cannot be longer than 200 characters"
     * )
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="uploadedAt", type="datetimetz")
     */
    private $uploadedAt;

    /**
     * @var int
     *
     * @ORM\Column(name="newsId", type="integer")
     */
    private $newsId;


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
     * Set letBy
     *
     * @param string $letBy
     *
     * @return Comment
     */
    public function setLetBy($letBy)
    {
        $this->letBy = $letBy;

        return $this;
    }

    /**
     * Get letBy
     *
     * @return string
     */
    public function getLetBy()
    {
        return $this->letBy;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set uploadedAt
     *
     * @param \DateTime $uploadedAt
     *
     * @return Comment
     */
    public function setUploadedAt($uploadedAt)
    {
        $this->uploadedAt = $uploadedAt;

        return $this;
    }

    /**
     * Get uploadedAt
     *
     * @return \DateTime
     */
    public function getUploadedAt()
    {
        return $this->uploadedAt;
    }

    /**
     * Set newsId
     *
     * @param integer $newsId
     *
     * @return Comment
     */
    public function setNewsId($newsId)
    {
        $this->newsId = $newsId;

        return $this;
    }

    /**
     * Get newsId
     *
     * @return int
     */
    public function getNewsId()
    {
        return $this->newsId;
    }
}

