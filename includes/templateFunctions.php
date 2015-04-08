<?php
require_once('cmsBase.php');
class TemplateFunctions extends CmsBase{
	//fungsi pengaturan template
	//All cms template management related function will be here
	var $templateName = 'default';
	
	function show ()
	{
		require_once($this->getCurrentTemplatePath().'index.php');
	}

	function getCurrentTemplatePath()
    {
        return 'templates/'.$this->templateName.'/';
    }
    
    function appOutput()
    {
        require_once('includes/cmsApplication.php');
        $app=new CmsApplication();
        $app->run();
    }
    
    function setTemplate($templateName)
    {
        $this->templateName=$templateName;
    }
 
    function widgetOutput($position='default')
    {
        echo 'Di sini akan ditampilkan widget secara dinamis';
    }
}
?>