<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Entity\File;

/**
 * @ORM\Entity()
 * @ORM\Table(name="foo")
 */
class EntityThatReferencesThirdPartyEntities
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\ManyToOne(targetEntity="Vich\UploaderBundle\Entity\File")
     * @ORM\JoinColumn(name="viche_file_id")
     */
    private ?File $file = null;


    public function getId () : ?int
    {
        return $this->id;
    }


    public function getFile () : ?File
    {
        return $this->file;
    }


    public function setFile (?File $file) : void
    {
        $this->file = $file;
    }
}
