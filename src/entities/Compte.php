<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="Compte")
 **/
class Compte {
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idC;
    /** @Column(type="string") **/
    private $numagence;
    /** @Column(type="string") **/
    private $cleRib;
    /** @Column(type="string") **/
    private $NumCompte;
    /**
     * Many Compte have one ClientPhysique. This is the owning side.
     * @ManyToOne(targetEntity="ClientPhysique", inversedBy="Comptes")
     * @JoinColumn(name="ClientPhysique_id", referencedColumnName="idClientPhysique")
     */
    private $clientPhysique;
    /**
     * Many Compte have one ClientMoral. This is the owning side.
     * @ManyToOne(targetEntity="ClientMoral", inversedBy="Comptes")
     * @JoinColumn(name="ClientMoral_id", referencedColumnName="idClientMoral")
     */
    private $clientMoral;
    /**
     * Many Comptes have Many TypeComptes.
     * @ManyToMany(targetEntity="TypeCompte", mappedBy="Comptes")
     */
    private $TypeComptes;

    public function __construct() {
        $this->TypeComptes = new ArrayCollection();
    }
     //getteurs
    public function getIdC() {
        return $this->idC;
    }
     public function getNumAgence() {
        return $this->numagence;
    }
    public function getCleRib() {
        return $this->cleRib;
    }
    public function getNumCompte() {
        return $this->NumCompte;
    }
    public function getIdClientPhysique() {
        return $this->idClientPhysique;
    }
    public function getIdClientMoral() {
        return $this->idClientMoral;
    }
    public function getIdTypeCompte() {
        return $this->idTypeCompte;
    }

    //setteurs
    public function setIdC($idC) {
        $this->idC = $idC;
    }
    public function setNumAgence($numagence) {
        $this->numagence = $numagence;
    }
    public function setCleRib($cleRib) {
        $this->cleRib = $cleRib;
    }
    public function setNumCompte($NumCompte) {
        $this->NumCompte = $NumCompte;
    }
    public function setIdClientPhysique($idClientPhysique) {
        $this->idClientPhysique = $idClientPhysique;
    }
    public function setIdClientMoral($idClientMoral) {
        $this->idClientMoral = $idClientMoral;
    }
    public function setIdTypeCompte($idTypeCompte) {
        $this->idTypeCompte = $idTypeCompte;
    }
}
?>