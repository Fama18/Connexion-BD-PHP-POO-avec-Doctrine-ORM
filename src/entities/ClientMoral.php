<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="ClientMoral")
 **/
class ClientMoral {
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idClientMoral;
    /** @Column(type="string") **/
    private $nomEmployeur;
    /** @Column(type="string") **/
    private $AdresseEmployeur;
    /** @Column(type="string") **/
    private $raisonSocial;
    /** @Column(type="string") **/
    private $numIdent;
    /**
     * One ClientMoral has many ClientPhysiques. This is the inverse side.
     * @OneToMany(targetEntity="ClientPhysique", mappedBy="clientMoral")
     */
    private $ClientPhysiques;
    /**
     * One ClientMoral has many Comptes. This is the inverse side.
     * @OneToMany(targetEntity="Compte", mappedBy="clientMoral")
     */
    private $Comptes;

    public function __construct() {
        $this->ClientPhysiques = new ArrayCollection();
        $this->Comptes = new ArrayCollection();
    }
    //fonctions de recupération des différents attributs
    public function getIdClientMoral() {
        return $this->idClientMoral;
    }
    public function getNomEmployeur() {
        return $this->nomEmployeur;
    }
    public function getAdresseEmployeur() {
        return $this->AdresseEmployeur;
    }
    public function getRaisonSocial() {
        return $this->raisonSocial;
    }
    public function getNumIdent() {
        return $this->numIdent;
    }

    //setteurs
    public function setIdClientMoral($idClientMoral) {
        $this->idClientMoral = $idClientMoral;
    }
    public function setNomEmployeur($nomEmployeur) {
        $this->nomEmployeur = $nomEmployeur;
    }
    public function setAdresseEmployeur($AdresseEmployeur) {
        $this->AdresseEmployeur = $AdresseEmployeur;
    }
    public function setRaisonSocial($raisonSocial) {
        $this->raisonSocial = $raisonSocial;
    }
    public function setNumIdent($numIdent) {
        $this->numIdent = $numIdent;
    }

}
?>