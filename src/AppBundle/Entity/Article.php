<?php
/**
 * Created by PhpStorm.
 * User: roman2
 * Date: 31.07.17
 * Time: 13:47
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Article
 *
 * @ORM\Table(name="Articles")
 * @ORM\Entity
 */
class Article
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="article_title", type="string", length=255)
     */
    private $articleTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="article", type="text")
     */
    private $article;

    /**
     * @var integer
     *
     * @ORM\Column(name="visit", type="integer")
     */
    private $visit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="added", type="datetime")
     * @ORM\GeneratedValue
     */
    private $added;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="changed", type="datetime")
     * @ORM\GeneratedValue
     */
    private $changed;

    /**
     * @ManyToOne
     * @var
     */
    private $customTag;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return string
     */
    public function getArticleTitle()
    {
        return $this->articleTitle;
    }

    /**
     * @param string $articleTitle
     */
    public function setArticleTitle($articleTitle)
    {
        $this->articleTitle = $articleTitle;
    }

    /**
     * @return string
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param string $article
     */
    public function setArticle($article)
    {
        $this->article = $article;
    }

    /**
     * @return int
     */
    public function getVisit()
    {
        return $this->visit;
    }

    /**
     * @param int $visit
     */
    public function setVisit($visit)
    {
        $this->visit = $visit;
    }

    /**
     * @return \DateTime
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * @param \DateTime $added
     */
    public function setAdded($added)
    {
        $this->added = $added;
    }

    /**
     * @return \DateTime
     */
    public function getChanged()
    {
        return $this->changed;
    }

    /**
     * @param \DateTime $changed
     */
    public function setChanged($changed)
    {
        $this->changed = $changed;
    }

}