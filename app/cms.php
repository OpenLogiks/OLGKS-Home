<?php
if(!defined('ROOT')) exit('No direct script access allowed');

loadDefaultPage("controller");
__printPage();

if(strtoupper(getUserDeviceType())!="PC") {
	printSubSkin();
}
?>