jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/
jQuery(document).ready(function(){// Remove empty P tags created by WP inside of Accordion and Orbit
jQuery('.accordion p:empty, .orbit p:empty').remove();// Adds Flex Video to YouTube and Vimeo Embeds
jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function(){if(jQuery(this).innerWidth()/jQuery(this).innerHeight()>1.5){jQuery(this).wrap("<div class='widescreen responsive-embed'/>");}else{jQuery(this).wrap("<div class='responsive-embed'/>");}});});

/*
Insert Custom JS Below
*/

jQuery('#mobile-left-menu').find('button').on('click',function(){
	mobileLeftMenuClose();
});

jQuery('#hamburger').on('click',function(){
	mobileLeftMenuOpen();
});

jQuery('section').on('click',function(){
  mobileLeftMenuClose();
});

function mobileLeftMenuOpen(){
  let menu = document.getElementById('mobile-left-menu');
  let body = document.getElementsByTagName('body')[0];

  menu.classList.add('mobile-menu-open');
  body.classList.add('no-scroll');
}

function mobileLeftMenuClose(){
  let menu = document.getElementById('mobile-left-menu');
  let body = document.getElementsByTagName('body')[0];

  menu.classList.remove('mobile-menu-open');
  body.classList.remove('no-scroll');
}