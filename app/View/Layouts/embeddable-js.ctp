<?php

$contentWithSlashes = addcslashes($this->fetch('content'), '\'\\'); // just escape single quotes and backslashes


// remove new lines
$contentWithoutNewlines = trim(preg_replace('/\s+/', ' ', $contentWithSlashes));

// minify
$contentMinified = preg_replace(
	['/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s'],['>','<','\\1'], 
	$contentWithoutNewlines
);

?>
(function() {
    var el = document.getElementById('<?php echo $target_element_id; ?>');
    el.innerHTML = '';
    var addContent = function(element, content, className, style) { 
        var newEl = document.createElement('div');

        if (content!==undefined && content!==null) newEl.innerHTML = content;
        if (className!==undefined && className!==null) newEl.className = className;
        if (style!==undefined && style!==null) newEl.style.cssText = style;

        element.appendChild(newEl);
        return newEl;
    };

    var addLink = function(href) {
        var head = document.getElementsByTagName('head')[0];
        var links = head.getElementsByTagName('link');
        for (var i = 0; i < links.length; i++) {if (links[i].getAttribute('href')===href) {return;}}
        var link = document.createElement('link');
        link.href = href;
        link.rel = 'stylesheet';
        link.type = 'text/css';
        head.appendChild(link);
    };

    var setJgWidgetClassName = function() { 
        var width = el.offsetWidth;
        for (var i = 0; i < el.childNodes.length; i++) {
            if (el.childNodes[i].className.indexOf('jg-widget')!==1) {
                var widgetEl = el.childNodes[i];
                widgetEl.className = 'jg-widget ' + (widgetEl.offsetWidth < 250 ? 'jg-widget-xs' : widgetEl.offsetWidth < 290 ? 'jg-widget-sm' : widgetEl.offsetWidth < 425 ? 'jg-widget-md' : widgetEl.offsetWidth < 570 ? 'jg-widget-lg' : 'jg-widget-xl');
                break;
            }
        }
    };

    var existing = window.onresize;
    window.onresize = function() {
        if (existing) {
            existing();
        }
        setJgWidgetClassName();
    };

    addLink('https://widgets.justgiving.com/Content/roboto.css');
    addLink('<?php echo Configure::read('App.fullBaseUrl');?>/ImportantCss/process/shared');
    addLink('<?php echo Configure::read('App.fullBaseUrl');?>/ImportantCss/process/donationlist');
    addLink('<?php echo Configure::read('App.fullBaseUrl');?>/ImportantCss/process/donationlistbyref');
    addLink('<?php echo Configure::read('App.fullBaseUrl');?>/ImportantCss/process/eventlist');

    var widget = addContent(el, null, 'jg-widget', 'max-width:400px;');
    


    addContent(widget, '<?php echo $contentMinified; ?>', 'jg-widget-clearfix jg-widget-frame');

    setJgWidgetClassName();
})();