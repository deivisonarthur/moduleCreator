<?php 
{{License}}
/**
 * {{EntityLabel}} - {{SiblingLabel}} relation resource model collection
 *
 * @category	{{Namespace}}
 * @package		{{Namespace}}_{{Module}}
 * {{qwertyuiop}}
 */
class {{Namespace}}_{{Module}}_Model_Resource_{{Entity}}_{{Sibling}}_Collection extends {{Namespace}}_{{Module}}_Model_Resource_{{Sibling}}_Collection{
	/**
	 * remember if fields have been joined
	 * @var bool
	 */
	protected $_joinedFields = false;
	/**
	 * join the link table
	 * @access public
	 * @return {{Namespace}}_{{Module}}_Model_Resource_{{Entity}}_{{Sibling}}_Collection
	 * {{qwertyuiop}}
	 */
	public function joinFields(){
		if (!$this->_joinedFields){
			$this->getSelect()->join(
				array('related' => $this->getTable('{{module}}/{{entity}}_{{sibling}}')),
				'related.{{sibling}}_id = main_table.entity_id',
				array('position')
			);
			$this->_joinedFields = true;
		}
		return $this;
	}
	/**
	 * add {{entity}} filter
	 * @access public
	 * @param {{Namespace}}_{{Module}}_Model_{{Entity}} | int ${{entity}}
	 * @return {{Namespace}}_{{Module}}_Model_Resource_{{Entity}}_{{Sibling}}_Collection
	 * {{qwertyuiop}}
	 */
	public function add{{Entity}}Filter(${{entity}}){
		if (${{entity}} instanceof {{Namespace}}_{{Module}}_Model_{{Entity}}){
			${{entity}} = ${{entity}}->getId();
		}
		if (!$this->_joinedFields){
			$this->joinFields();
		}
		$this->getSelect()->where('related.{{entity}}_id = ?', ${{entity}});
		return $this;
	}
}