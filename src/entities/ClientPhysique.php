<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="ClientPhysique")
 **/
class ClientPhysique {
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idClientPhysique;
    /** @Column(type="string") **/
    private $numCni;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $prenom;
    /** @Column(type="string") **/
    private $civilite;
    /** @Column(type="Date") **/
    private $DateDeNaissance;
    /** @Column(type="string") **/
    private $adresse;
    /** @Column(type="string") **/
    private $email;
    /** @Column(type="string") **/
    private $telephone;
     /**
     * Many ClientPhysique have one ClientMoral. This is the owning side.
     * @ManyToOne(targetEntity="ClientMoral", inversedBy="ClientPhysiques")
     * @JoinColumn(name="ClientMoral_id", referencedColumnName="idClientMoral")
     */
    private $clientMoral;
    /**
     * One ClientPhysique has many Comptes. This is the inverse side.
     * @OneToMany(targetEntity="Compte", mappedBy="clientPhysique")
     */
    private $Comptes;

    public function __construct() {
        $this->Comptes = new ArrayCollection();
    }
    //getteurs et setteurs

    public function getIdClientPhysique() {
        return $this->idClientPhysique;
    }
    public function setIdClientPhysique($idClientPhysique) {
        $this->idClientPhysique = $idClientPhysique;
    }
    public function getNumCni() {
        return $this->numCni;
    }
    public function setNumCni($numCni) {
        $this->numCni = $numCni;
    }
    public function getNom() {
        return $this->nom;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    public function getCivilite() {
        return $this->civilite;
    }
    public function setCivilite($civilite) {
        $this->civilite = $civilite;
    }
    public function getDateDeNaissance() {
        return $this->DateDeNaissance;
    }
    public function setDateDeNaissance($DateDeNaissance) {
        $this->DateDeNaissance = $DateDeNaissance;
    }
    public function getAdresse() {
        return $this->adresse;
    }
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTelephone() {
        return $this->telephone;
    }
    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }
    public function getIdClientMoral() {
        return $this->idClientMoral;
    }
    public function setIdClientMoral($idClientMoral) {
        $this->idClientMoral = $idClientMoral;
    }

}
?>
