<?php
require_once('./Services/ActiveRecord/class.ActiveRecord.php');

/**
 * Class arObjBBBConf
 *
 * @author  Fabian Schmid <fs@studer-raimann.ch>
 * @version 2.0.6
 */
class arObjBBBConf extends ActiveRecord {

	/**
	 * @return string
	 * @deprecated
	 */
	static function returnDbTableName() {
		return 'rep_robj_xbbb_conf';
	}

	/**
	 * @return string
	 */
	public function getConnectorContainerName() {
		return 'rep_robj_xbbb_conf';
	}
/**
	 * @var int 
	 *
	 * @con_has_field true
	 * @con_fieldtype integer
	 * @con_length 4
	 * @con_is_notnull true
	 * @con_is_primary true
*/
	protected $id;

	/**
	 * @var string 
	 *
	 * @con_has_field true
	 * @con_fieldtype text
	 * @con_length 256
	 * @con_is_notnull true
*/
	protected $svrpublicurl;

	/**
	 * @var string
	 *
	 * @con_has_field true
	 * @con_fieldtype text
	 * @con_length 256
	 * @con_is_notnull true
*/
	protected $svrprivateurl;

	/**
	 * @var string
	 *
	 * @con_has_field true
	 * @con_fieldtype text
	 * @con_length 256
	 * @con_is_notnull true
*/
	protected $svrsalt;

	/**
	 * @var int
	 *
	 * @con_has_field true
	 * @con_fieldtype integer
	 * @con_length 1
	 * @con_is_notnull true
*/
	protected $choose_recording;
	
    	public function getSvrsalt() {
                return $this->svrsalt;
    	}

   	 public function setSvrsalt($svrsalt) {
                $this->svrsalt = $svrsalt;
    	}
	 /**
         * @return string
         */	
    public function getSvrprivateurl() {
                global $DIC;
                $log=$DIC->logger()->root();
		$log->info("getSvrprivateurl". $this->svrprivateurl);
                return $this->svrprivateurl;
    }
        /**
         * @param string $svrprivateurl
         */
    public function setSvrprivateurl($svrprivateurl) {
                $this->svrprivateurl = $svrprivateurl;
    }
	
	
	public function getSvrpublicurl() {
                return $this->svrpublicurl;
    }
    public function setSvrpublicurl($svrpublicurl) {
                $this->svrpublicurl = $svrpublicurl;
    }
	
	
	
    public function getId() {
                return $this->id;
    }

    public function setId($id) {
                $this->id = $id;
    }
	
	public function getChooseRecording() {
                return $this->choose_recording;
    }

    public function setChooseRecording($choose_recording) {
                $this->choose_recording = $choose_recording;
    }
	
}

?>
