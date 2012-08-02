<?php
class Meanbee_Boilerplate_Block_Page_Footer_Js extends Mage_Core_Block_Template {
    protected $_scripts = array();

    public function addJs($name) {
        $this->_scripts[] = $this->getJsUrl($name);
    }

    public function addSkinJs($name) {
        $this->_scripts[] = $this->getSkinUrl($name);
    }

    public function hasScripts() {
        return count($this->_scripts) > 0;
    }

    public function getScripts() {
        return $this->_scripts;
    }
}
