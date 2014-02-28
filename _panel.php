<!-- left sliding panel -->
<div class="panel" id="left-panel">
	<h3>Side panel</h3>
	<a href="messages.php">Messages</a>
	<a href="groups.php">Groups</a>
	<a href="playlists.php">Playlists</a>
	
	
	
</div>

<script>
	var menuLeft = document.getElementById( 'left-panel' ),
		showLeftPush = document.getElementById( 'showLeftPush' ),
		body = document.body;

	showLeftPush.onclick = function() {
		classie.toggle( this, 'active' );
		classie.toggle( body, 'push-right' );
		classie.toggle( menuLeft, 'open-panel' );
		disableOther( 'showLeftPush' );
	};
	
</script>