<?php
require_once('./Services/ActiveRecord/class.ActiveRecord.php');

/**
 * Class arObjBBBData
 *
 * @author  Fabian Schmid <fs@studer-raimann.ch>
 * @version 2.0.6
 */
class arObjBBBData extends ActiveRecord {

	/**
	 * @return string
	 * @deprecated
	 */
	static function returnDbTableName() {
		return 'rep_robj_xbbb_data';
	}

	/**
	 * @return string
	 */
	public function getConnectorContainerName() {
		return 'rep_robj_xbbb_data';
	}
/**
	 * @var  
	 *
	 * @con_has_field true
	 * @con_fieldtype integer
	 * @con_length 20
	 * @con_is_notnull true
	 * @con_is_primary true
*/
	protected $id;

	/**
	 * @var  
	 *
	 * @con_has_field true
	 * @con_fieldtype integer
	 * @con_length 1
*/
	protected $is_online;

	/**
	 * @var  
	 *
	 * @con_has_field true
	 * @con_fieldtype text
	 * @con_length 256
*/
	protected $attendeepwd;

	/**
	 * @var  
	 *
	 * @con_has_field true
	 * @con_fieldtype text
	 * @con_length 256
*/
	protected $moderatorpwd;

	/**
	 * @var  
	 *
	 * @con_has_field true
	 * @con_fieldtype text
	 * @con_length 1000
*/
	protected $welcometext;

	/**
	 * @var  
	 *
	 * @con_has_field true
	 * @con_fieldtype integer
	 * @con_length 6
*/
	protected $maxparticipants;

	/**
	 * @var  
	 *
	 * @con_has_field true
	 * @con_fieldtype integer
	 * @con_length 20
*/
	protected $sequence;
	public function getSequence() {
                return $this->sequence;
    }
    public function setSequence($sequence) {
                $this->sequence = $sequence;
    }
	
	
	public function getModeratorpwd() {
                return $this->moderatorpwd;
    }
    public function setModeratorpwd($moderatorpwd) {
                $this->moderatorpwd = $moderatorpwd;
    }
    
    public function getAttendeepwd() {
                return $this->attendeepwd;
    }
    public function setAttendeepwd($attendeepwd) {
                $this->attendeepwd = $attendeepwd;
    }
	
	public function getIsOnline() {
                return $this->is_online;
    }
    public function setIsOnline($is_online) {
                $this->is_online = $is_online;
    }


    public function getId() {
                return $this->id;
    }
    public function setId($id) {
                $this->id = $id;
    }
	
}

?>
