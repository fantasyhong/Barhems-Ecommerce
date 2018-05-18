<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:module:Magento_Backend:etc/menu.xsd">
    <menu>
        <add id="Barhems_MenuTutorial::top_level_example"
             title="第一级菜单演示 Top Level Example"
             module="Barhems_MenuTutorial"
             sortOrder="10"
             resource="Barhems_MenuTutorial::top_level_example"
            />
        <!-- START: new node -->                
        <add id="Barhems_MenuTutorial::second_level_example"
             title="第二级菜单演示 Second Level Example"
             module="Barhems_MenuTutorial"
             sortOrder="10"
             resource="Barhems_MenuTutorial::top_level_example"
             parent="Barhems_MenuTutorial::top_level_example"
             action="cms/page/index"
            />                            
        <!-- END:   new node --> 
       <add id="Barhems_MenuTutorial::third_level_example"
             title="Third Level Example"
             module="Barhems_MenuTutorial"
             sortOrder="30"
             resource="Barhems_MenuTutorial::third_level_example"
             parent="Magento_Backend::system_convert"
             action="cms/page/index"
            />  
    </menu>
</config>