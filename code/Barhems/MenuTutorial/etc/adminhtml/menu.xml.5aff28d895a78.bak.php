<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:module:Magento_Backend:etc/menu.xsd">
    <menu>
        <add id="Barhems_MenuTutorial::top_level_example" title="&#x7B2C;&#x4E00;&#x7EA7;&#x83DC;&#x5355;&#x6F14;&#x793A; Top Level Example" module="Barhems_MenuTutorial" sortOrder="10" resource="Barhems_MenuTutorial::top_level_example"/>
        <!-- START: new node -->                
        <add id="Barhems_MenuTutorial::second_level_example" title="&#x7B2C;&#x4E8C;&#x7EA7;&#x83DC;&#x5355;&#x6F14;&#x793A; Second Level Example" module="Barhems_MenuTutorial" sortOrder="10" resource="Barhems_MenuTutorial::top_level_example" parent="Barhems_MenuTutorial::top_level_example" action="cms/page/index"/>                            
        <!-- END:   new node --> 
       <add id="Barhems_MenuTutorial::third_level_example" title="Third Level Example" module="Barhems_MenuTutorial" sortOrder="30" resource="Barhems_MenuTutorial::third_level_example" parent="Magento_Backend::system_convert" action="cms/page/index"/> 
	</menu>
</config>
