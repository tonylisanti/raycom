// This contains all base javascript (e.g. siFR, swfobject calls, etc)

//  base.js
//  WebDevTemplate
//  
//  Created by Brandon Calloway on 2008-08-01.
//  Copyright 2008 Scully Group. All rights reserved.
// 

$(document).ready(function() {

//Main nav drop-downs
// $('#menulist_root li').each(function() {
//   $(this).mouseover(function() {
//     $(this).children('ul').css("display", "block");
//   });
//   $(this).mouseout(function() {
//     $(this).children('ul').css("display", "none");
//   });
// });

$('#menulist_root li').each(function() {
  $(this).hover(function() {
    $(this).addClass('nav-on');
  }, function() {
    $(this).removeClass('nav-on');
  });
});

//SCROLLABLE
// $("div.scrollable").scrollable({ 
//   size: 5,
//   onSeek: function() { 
//     alert("current page is " + this.getPageIndex()); 
//   }, 
//      // another configuration variable as an example 
//     // clickable: false 
//  
// });


	
//////////////////////////////////////////////////////////////////////////// Shadowbox
	
	//Shadowbox.loadSkin('classic', 'scripts/shadowbox-2.0');
	//Shadowbox.loadLanguage('en', 'scripts/shadowbox-2.0');
	//Shadowbox.loadPlayer(['flv', 'html', 'iframe', 'img', 'qt', 'swf', 'wmp'], 'scripts/shadowbox-2.0/player');
	// 
	//Shadowbox.init(options);
	
////////////////////////////////////////////////////////////////////////////swfobject call
	
var flashvars = {};
var params = {
    menu: "false",
    wmode: "transparent"
    };
var attributes = {};

swfobject.embedSWF("swf/text_scroller.swf", "flash_ticker", "975", "71","9.0.0", "", flashvars, params, attributes);

}); //end document.ready