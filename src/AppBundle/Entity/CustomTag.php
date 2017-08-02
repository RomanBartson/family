<?php
/**
 * Created by PhpStorm.
 * User: roman2
 * Date: 31.07.17
 * Time: 15:48
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * CustomTag
 *
 * @ORM\Table(name="Article2Tag")
 * @ORM\Entity
 */
class CustomTag
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
     * @OneToMany
     * @var
     */
    private $article;

    /**
     * @var integer
     *
     * @ORM\Column(name="tag_id", type="integer")
     */
    private $tagId = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="tag_title", type="string", length=255)
     */
    private $title;

}