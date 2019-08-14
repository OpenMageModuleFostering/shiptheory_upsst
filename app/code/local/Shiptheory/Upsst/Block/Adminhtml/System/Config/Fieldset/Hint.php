<?php
/**
 * @category   Shiptheory
 * @package    Shiptheory_Upsst
 */
class Shiptheory_Upsst_Block_Adminhtml_System_Config_Fieldset_Hint extends Mage_Adminhtml_Block_Abstract implements Varien_Data_Form_Element_Renderer_Interface
{

	/**
	 * hint template file
	 */
	
    protected $_template = 'shiptheory/system/config/fieldset/ups.phtml';

    /**
     * Render hint
     */
    
    public function render(Varien_Data_Form_Element_Abstract $element) {
    	
        return $this->toHtml();
        
    }
    
    /**
     * Check if extension has been setup
     */
    
    public function isSetup() {

    	$status = false;
    	
		if(Mage::getStoreConfig('shippinglabels/misc/apikey') && Mage::getStoreConfig('shippinglabels/misc/enabled')){
			$status = true;
		}

		return $status;
    	        
    }

}
