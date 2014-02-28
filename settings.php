<?php include "_layout.php"; ?>
<?php include "_header.php"; ?>


	
			
		<div class="main">
			<div class="main-content">
				
				<h1>Settings</h1>
				<div class="settings-general">
					<h2>General</h2>

					<div class="setting">
						<div class="setting-label">
							Name:
						</div>
						<div class="setting-option">
							Joe Smith
						</div>
						<div class="setting-edit">
							Edit
						</div>
					</div>

					<div class="setting">
						<div class="setting-label">
							Username:
						</div>
						<div class="setting-option">
							JoeSmith1138
						</div>
						<div class="setting-edit">
							Edit
						</div>
					</div>

					<div class="setting">
						<div class="setting-label">
							Email:
						</div>
						<div class="setting-option">
							j.smith@gmail.co.uk
						</div>
						<div class="setting-edit">
							Edit
						</div>
					</div>

					<div class="setting">
						<div class="setting-label">
							Password:
						</div>
						<div class="setting-option">
							&#42;&#42;&#42;&#42;&#42;&#42;&#42;&#42;
						</div>
						<div class="setting-edit">
							Edit
						</div>
					</div>

				</div>

				<div class="settings-notifications">
					<h2>Notifications</h2>

					<div class="setting">
						<div class="setting-label">
							Messages
						</div>
						<div class="setting-switch switch-1">
							<div class="toggle tog-1"></div>
						</div>
					</div>

					<div class="setting">
						<div class="setting-label">
							Friend Requests
						</div>
						<div class="setting-switch switch-2">
							<div class="toggle tog-2"></div>
						</div>
					</div>

					<div class="setting">
						<div class="setting-label">
							Group Activity
						</div>
						<div class="setting-switch switch-3">
							<div class="toggle tog-3"></div>
						</div>
					</div>

					<div class="setting">
						<div class="setting-label">
							Music Player
						</div>
						<div class="setting-switch switch-4">
							<div class="toggle tog-4"></div>
						</div>
					</div>

				</div>

				<div class="settings-other">
					<h2>Other Settings</h2>

				</div>

					
			</div><!-- end main content -->
		</div><!-- end main wrap -->


		<!-- left sliding panel -->
		<?php include "_panel.php"; ?>
		

	</div><!-- end page wrap -->



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

<?php include "_footer.php"; ?>