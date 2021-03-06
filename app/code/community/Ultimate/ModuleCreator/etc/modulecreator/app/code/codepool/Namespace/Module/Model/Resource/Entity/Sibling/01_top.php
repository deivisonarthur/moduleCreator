<?php 
{{License}}
/**
 * {{EntityLabel}} - {{SiblingLabel}} relation model
 *
 * @category	{{Namespace}}
 * @package		{{Namespace}}_{{Module}}
 * {{qwertyuiop}}
 */
class {{Namespace}}_{{Module}}_Model_Resource_{{Entity}}_{{Sibling}} extends Mage_Core_Model_Mysql4_Abstract{
	/**
	 * initialize resource model
	 * @access protected
	 * @return void
	 * @see Mage_Core_Model_Resource_Abstract::_construct()
	 * {{qwertyuiop}}
	 */
	protected function  _construct(){
		$this->_init('{{module}}/{{entity}}_{{sibling}}', 'rel_id');
	}
