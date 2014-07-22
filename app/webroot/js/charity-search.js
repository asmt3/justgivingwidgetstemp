$(function() {

	$( "#charity-search" ).autocomplete({
	  source: "/charities/search",
	  minLength: 2,
	  select: function( event, ui ) {
	    console.log( ui.item ?
	      "Selected: " + ui.item.value + " aka " + ui.item.id :
	      "Nothing selected, input was " + this.value );
	  }
	})

	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( '<a href="/charities/wizard/' + item.charityId + '">' + item.name + ' (' + item.registrationNumber + ')</a>' )
        .appendTo( ul );
    };

});