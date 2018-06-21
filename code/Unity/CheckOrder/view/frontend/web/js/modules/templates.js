define([
    'underscore',
    'Unity_CheckOrder/js/modules/translation'
], function (_, translationModule) {
    var templateEngine = {
        applyTemplate: function (type, label, data) {
            var html = "";
            var template = null;
            if (typeof templateEngine.templates[type] !== 'undefined') {
                template = _.template(templateEngine.templates[type]);
            }
            else {
                template = _.template(templateEngine.templates["default"]);
            }

            html = template({label: label, data: data, translationModule: translationModule});
            return html;
        },

        templates: {
            "default": '<div class="left"><%= label %></div><div class="right"><b><%= data %></b></div>',
            "error": '<div class="top error"><%= label %></div><div class="bottom"><b><%= data %></b></div>',
            "prod": '<div class="top"><%= label %></div><div class="bottom"><ul><% _.each(data, function(element){ %> <li><%= element.qty_ordered %> x <%= element.name %> (<%= element.price_incl_tax %>)</li> <% }); %></ul></div>',
            "track": '<div class="left"><%= label %></div><div class="right"><% _.each(data, function(element){ %> <a href="<%= element %>" target="_blank"><b><%= translationModule.getTranslation("checkorder_show") %></b></a> <% }); %></div>'            
        }        
    };
    
    return templateEngine;
});