<?php
final class Module_Adsense extends GWF_Module
{
	public function getConfig()
	{
		return array();
	}
	
	public function onRenderFor(GWF_Navbar $navbar)
	{
		$this->templatePHP('sidebars.php', ['navbar' => $navbar]);
	}
}
