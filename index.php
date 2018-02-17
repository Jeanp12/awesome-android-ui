<!Doctype html>
<html lang="en">
    <head>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
		<div class="card" style="padding:80px;">
			<p align="center"><h5 style="color:grey; font-size: 12pt;"> Submit a Scrim: </h5></p>
			<form method="post" name="submit_scrim" id="submit_scrim">
				<div class="input-group mb-3">
					<select class="custom-select" name="system" id="system" required>
			            <option value="">Select System</option>
			            <option value="XB1">Xbox One</option>
			            <option value="PS4">PlayStation 4</option>
			            <option value="XB360">Xbox 360</option>
			            <option value="PS3">PlayStation 3</option>
			            <option value="PC">Computer</option>
			            <option value="iOS">iOS</option>
			            <option value="Android">Android</option>
			            <option value="other">Other</option>
			        </select>
				</div>
				<div class="form-group">
					<input class="form-control" type="text" name="game" id="game" placeholder="Enter Game" maxlength="15" required>
				</div>
				<div class="form-group">
					<input class="form-control" type="text" name="gametype" id="gametype" placeholder="Enter Match Type" maxlength="15" required>
				</div>
				<div class="form-group">
					<input class="form-control" type="text" name="gamertag" id="gamertag" maxlength="31" placeholder="Enter Gamertag" required>
				</div>
				<div class="form-group">
					<input class="form-control" type="text" name="twitter" id="twitter" maxlength="20" placeholder="@YourTwitter (Not Req.)">
				</div>
				<div class="input-group mb-3">
					<select class="custom-select" name="region" name="region" required>
						<option value="">Select Region</option>
			            <option value="EU">E. Union</option>
			            <option value="NA">N. America</option>
			            <option value="SA">S. America</option>
			            <option value="AS">Asia</option>
			            <option value="AU">Australia</option>
			            <option value="other">Any/Other</option>
			        </select>
				</div>
				<div class="input-group mb-3">
					<select class="custom-select" name="Ind_Team" id="Ind_Team" required>
						<option value="">Individual or Team?</option>
			            <option value="Team">Team</option>
			            <option value="Individual">Individual</option>
			        </select>
				</div>
				<textarea name="posted_time" id="posted_time" style="display:none;"></textarea>
				<button type="submit" class="btn btn-danger">Submit Scrim</button>
				<input type="hidden" name="twitter_url" id="twitter_url" value="http://www.twitter.com/%22%3E">
			</form>
			<br>
			<script type='text/javascript'>
				setInterval(function() {
					var date = new Date();
					var fy = date.getUTCFullYear();
					var tm = date.getUTCMonth() + 1;
					var td = date.getUTCDate();
					var h = date.getUTCHours();
					var m = date.getUTCMinutes();
					var s = date.getSeconds();
					tm = checkTime(tm);
					td = checkTime(td);
					m = checkTime(m);
					s = checkTime(s);
					$('#posted_time').html(fy + "-"+ tm + "-" + td + " " + h + ":" + m + ":" + s );
				}, 500);
				function checkTime(i) {
					if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
					return i;
				}
				$("#submit_scrim").submit(function(e) {
					$.ajax({
						type: "POST",
						url: "submitscrim.php",
						data: $("#submit_scrim").serialize(), // serializes the form's elements.
						success: function(data) {
							alert("You've successfully submited the form");
						}
					});
					e.preventDefault(); // avoid to execute the actual submit of the form.
				});
			</script>
			<a href="https://twitter.com/messages/compose?recipient_id=3982971509" style="font-size: 15px;" target="_blank">Missing a feature/option or need help? Message us!</a>
		</div>
    </body>
</html>
