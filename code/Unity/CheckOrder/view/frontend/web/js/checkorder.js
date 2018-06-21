define([
    'jquery',
    'Unity_CheckOrder/js/modules/ui',
    'Unity_CheckOrder/js/modules/translation'
], function ($, uiModule, translationModule) {
    var init = function(config, node){
        translationModule.init(config.translations);
        uiModule.init(node);        
    };
    
    return init;
});