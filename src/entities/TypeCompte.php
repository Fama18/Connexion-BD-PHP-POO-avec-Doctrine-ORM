<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="TypeCompte")
 **/
class TypeCompte {
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idTypeCompte;
    /** @Column(type="string") **/
    private $libelle;
    /**
     * Many TypeCompte have Many Comptes.
     * @ManyToMany(targetEntity="Compte", inversedBy="TypeComptes")
     * @JoinTable(name="TypeCompte_Compte")
     */
    private $Comptes;

    public function __construct() {
        $this->Comptes = new ArrayCollection();
    }
    //getteurs
    public function getIdTypeCompte() {
        return $this->idTypeCompte;
    }
    public function getLibelle() {
        return $this->libelle;
    }

    //setteurs
    public function setIdTypeCompte($idTypeCompte) {
        $this->idTypeCompte = $idTypeCompte;
    }
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }
}
?>