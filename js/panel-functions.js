
var menuLeft = document.getElementById( 'left-panel' ),
	showLeftPush = document.getElementById( 'showLeftPush' ),
	body = document.body;

showLeftPush.onclick = function() {
	classie.toggle( this, 'active' );
	classie.toggle( body, 'push-right' );
	classie.toggle( menuLeft, 'open-panel' );
	disableOther( 'showLeftPush' );
};




