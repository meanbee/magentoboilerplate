<?php
class Meanbee_Boilerplate_Block_Customer_Account_Navigation extends Mage_Customer_Block_Account_Navigation {
    public function removeLink($name) {
        if (isset($this->_links[$name])) {
            unset($this->_links[$name]);
        }
    }
}