<?php  require_once('functions/body/header.php'); ?>
	
		<?php  require_once('functions/body/nav.php'); ?>
		<div class="container">
				<form action="" method="post">
					<div class="catalogue">	
					<label for="selectbox1"><strong>Make</strong></label>
					<select name="selectbox[]" id="selectbox1" size="10" multiple="none" class="selectbox">
						<option value="vw" selected="selected" >Volkswagen</option>
					</select>
					</div>
					<div class="catalogue">
					<label for="selectbox2"><strong>Model</strong></label>
					<select name="selectbox[]" id="selectbox2" size="10" multiple="none" class="selectbox">
						<option value="Golf" selected="selected">Golf</option>
					</select>
					</div>
					<div class="catalogue">
					<label for="selectbox3"><strong>Year</strong></label>
					<select name="selectbox[]" id="selectbox3" size="10" multiple="none" class="selectbox">
						<option value="1983">1983</option>
					</select>
					</div>
					<div class="catalogue">
					<label for="selectbox4"><strong>Engine</strong></label>
					<select name="selectbox[]" id="selectbox4" size="10" multiple="none" class="selectbox">
						<option value="1.3">1.3</option>
					</select>
					</div>
					<br>
					<br>
					<button type="submit">SEARCH</button>
				</form>	

		</div>
		<div class="spacer"></div>



<?php  require_once('functions/body/footer.php'); ?>