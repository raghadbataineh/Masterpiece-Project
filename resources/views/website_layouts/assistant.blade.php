<div id="primary-content" class="centered-pen">
	{{-- <h1 class="display-3">Hello there!</h1> --}}
	{{-- <p class="lead">Meet Felix, your new personal assistant with an outstanding personality!</p> --}}
	<div class="personal-assistant">
		{{-- <p class="lead">Meet Verto</p> --}}

		<div id="felix" class="felix" onclick="activateFelix();">
			<div class="eyes">
				<div class="eye left"></div>
				<div class="eye right"></div>
			</div>
		</div>
		<div class="platform"></div>
		<ul class="command-list">
			<li><i class="fa-solid fa-cloud" onclick="getWeather();"></i></li>
			<li><i class="far fa-clock" onclick="getTime();"></i></li>
			<li><i class="far fa-calendar-alt" onclick="getDate();"></i></li>
			<li><i class="far fa-grin-squint-tears" onclick="tellJoke();"></i></li>

			<li><i class="fa-solid fa-magnifying-glass" onclick="searchGoogle();"></i></li>
			<li><i class="fa-regular fa-lightbulb" onclick="showInspiration();"></i></li>
			<p class="hey-felix lead"></p>
		</ul>
	</div>
	<div id="response-frame" class="response-frame">
		<p id="response-message" class="lead"></p>
		<i class="fas fa-times" onclick="closeResponse();"></i>
	</div>
</div>