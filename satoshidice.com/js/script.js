$(document).ready(function(){
	
	//Dropdown
	if ($('.dropdown').length) {	
		
		$('.dropdown').sSelect();
		
	}
	
	//Tabs
	if ($('.tabs').length) {

		$('.tabs').tabs( 'div.panes > div' );
	}
	
	//Dropbox
	if ($('.dropbox').length)
		{	
		$('.dropbox').hide();
		$('.how').show();
		$('.how').click(function()
			{
			$('.verificationbox').hide();	
			$('.advancedbox').hide();	
			$('.howbox').slideToggle();	
			});	
		$('.closebox').click(function()
			{
			$('.howbox').hide();
			});
			
		$('.advanced').show();
		$('.advanced').click(function()
			{
			$('.verificationbox').hide();	
			$('.howbox').hide();
			$('.warningbox').hide();
			$('.advancedbox').slideToggle();	
			});	
		$('.closebox').click(function()
			{
			$('.advancedbox').hide();	
			});	

		$('.verification').show();
		$('.verification').click(function()
			{
			$('.howbox').hide();
			$('.advancedbox').hide();
			$('.warningbox').hide();
			$('.verificationbox').slideToggle();	
			});	
		$('.closebox').click(function()
			{
			$('.verificationbox').hide();	
			});	

			
		$('.warning').show();
		$('.warning').click(function()
			{
			$('.howbox').hide();
			$('.advancedbox').hide();
			$('.verificationbox').hide();
			$('.warningbox').slideToggle();	
			});	
		$('.closebox').click(function()
			{
			$('.warningbox').hide();	
			});	
		}
		
	//Tooltip
	$('a[title]').qtip({
		style: {
			tip: {
				corner: false
			}
		}
	})

	//Equal Heights
	$(".equal").equalHeights();	
});