(function () {
	"use strict";

	var AnimatedHero = function() {
		var database = [
			{ sentence: "To zdumiewające,<br>jak na pozór nierozwiązywalne <br>problemy nagle dają się<br>rozwiązać, gdy ktoś cię słucha.", author: "Carl Rogers", image: undefined },
			{ sentence: "Dążenie do znalezienia<br>w życiu sensu jest u człowieka<br>najpotężniejszą siłą motywującą", author: "Viktor E.Frankl", image: undefined },
			{ sentence: "Okazuje się, że działam <br>efektywniej, kiedy słucham <br>z akceptacją samego siebie <br>i potrafię być sobą.", author: "Carl Rogers", image: undefined },
			{ sentence: "Człowiek jest w rzeczywistości<br>istotą poszukującą sensów,<br>które mogłaby wypełnić, oraz innych <br>ludzi, których mogłaby spotkać", author: "Viktor E.Frankl", image: undefined }
		]

		var status = 0;
		var sentenceElement = jQuery("#slider .quote");
		var authorElement = jQuery("#slider .author");
		var imgElement = document.querySelector("#slider #wrapper img");


		this.init = function() {
			if (sentenceElement) {
				switchAnim();
				window.setInterval(function() {
					// fade out
					sentenceElement.animate(	{ opacity: 0 }, 350, function() {
						sentenceElement.css("right", "50%");
						status = status + 1;
						if (status == database.length) {
							status = 0;
						}
						sentenceElement.html(database[status]["sentence"]);
						authorElement.html(database[status]["author"]);

						switchAnim();
					});
					authorElement.animate( { opacity: 0 }, 350 );
					
					
				}, 8000);
			}
		}

		var switchAnim = function() {
			sentenceElement.animate( { opacity: 1, right: 0 }, 350);
			authorElement.animate( { opacity: 1 }, 350);
		}
	}

	var animh = new AnimatedHero();
	animh.init();
}) ();