
<?php
include_once "../Connexion.php";
class evenement{
    private $id;
    private $event_name;
    private $date_deb;
    private $date_fin;
    private $des;
    private $nbr_limit;
    /**
     * evenement constructor.
     * @param $id
     * @param $event_name
     * @param $date_deb
     * @param $date_fin
     * @param $nbre_limit
     */
    public function __construct($id,$event_name, $date_deb, $date_fin,$des,$nbr_limit)
    {
        $this->id = $id;
        $this->event_name = $event_name;
        $this->date_deb = $date_deb;
        $this->date_fin = $date_fin;
        $this->des = $des;
        $this->nbr_limit = $nbr_limit;
    }

    /**
 * @return mixed
 */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->des;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($des)
    {
        $this->des = $des;
    }
    /**
     * @return mixed
     */
    public function getEventName()
    {
        return $this->event_name;
    }

    /**
     * @param mixed $event_name
     */
    public function setEventName($event_name)
    {
        $this->event_name = $event_name;
    }

    /**
     * @return mixed
     */
    public function getDateDeb()
    {
        return $this->date_deb;
    }

    /**
     * @param mixed $date_deb
     */
    public function setDateDeb($date_deb)
    {
        $this->date_deb = $date_deb;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * @param mixed $date_fin
     */
    public function setDateFin($date_fin)
    {
        $this->date_fin = $date_fin;
    }

    /**
     * @return mixed
     */
    public function getNbreLimit()
    {
        return $this->nbr_limit;
    }

    /**
     * @param mixed $nbre_limit
     */
    public function setNbreLimit($nbr_limit)
    {
        $this->nbr_limit = $nbr_limit;
    }




}
?>