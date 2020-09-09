<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<section class="c-purpose-passion">
	<article class="c-purpose-passion__left-side">
		<div class="c-purpose-passion__left-side--inner">
			<h3>Find your purpose. Find your passion.</h3>
			<p>Talk to a dedicated treatment professional who will help transform your life.</p>
			<button type="submit">Transform Your Life</button>
		</div>
	</article>
	<article class="c-purpose-passion__right-side-image"></article>
</section>





<section class="questions-asked">

	<div class="question1">
		<article class="question1__left-side">
			<h3>What Can I Achieve Through Rehab?</h3>
			<p>You deserve to be whole, and your loved ones deserve to have you back. If quitting drugs or alcohol was easy, the word addiction wouldn’t even exist. Detox help patients get through the worst of withdrawal safely, and rehab provides you with emotional support, medical supervision, psychiatric care, resources, and life skills to ensure that you transform yourself and your life.</p>
			<button type="submit">Find Out More</button>
		</article>
		<article class="question1__right-side"><img width="866px" height="446px" src="https://source.unsplash.com/500x202/?nature,water" alt="chairs"></article>
	</div>
	<hr class="class-separator">


	<div class="question2">
		<article class="question2__left-side"><img width="866px" height="446px" src="https://source.unsplash.com/500x202/?nature,water" alt="chairs"></article>
		<article class="question2__right-side">
			<h3>What Is Rehab Like?</h3>
			<p>Most rehab combines elements of detox, medical observation, psychiatric evaluation, therapy, relaxation, life skills training, and support groups. The specific programs and resources available will range tremendously across facilities. The best rehabs heal you medically, clinically, and spiritually so that you can begin a new, meaningful life of passion and purpose.</p>
			<button type="submit">Find Out More</button>
		</article>
	</div>
	<hr class="class-separator">
	

	<div class="question3">
		<article class="question3__left-side">
			<h3>How Does Treatment Work?</h3>
			<p>One of the biggest obstacles that many who are struggling with substance abuse disorders face is coming to terms with the fact that they have a problem. Because every addiction is unique, every individual’s treatment process will be unique. However, most treatment programs follow some general steps and stages.</p>
			<button type="submit">Find Out More</button>
		</article>
		<article class="question3__right-side"><img width="866px" height="446px" src="https://source.unsplash.com/500x202/?nature,water" alt="chairs"></article>
	</div>
</section>




<section class="recreational-drug">
	<article class="recreational-drug__left-side">
		<h3>1 in 5 teens admit to recreational drug use.</h3>
		<p>The earlier an addiction is treated, the easier and more successful treatment is likely to be.</p>
		<button type="submit">Find Out More</button>
	</article>
	<article class="recreational-drug__right-side">
	</article>
</section>





<section class="map-treatment-center">
	<div class="map-treatment-center__text">
		<h3>Find the Best Treatment Near You.</h3>
		<p>Now that you know what to expects for a typical day in drug rehab, take some time to explore all the treatment centers available to you. No matter where you live, there is a drug rehab center that can help you overcome your addiction. We will help you find it.</p>
	</div>
	
	<article class="map-treatment-center__map">
		<div id="map"></div>
		<script>
		function initMap() {
			// Styles a map in night mode.
			var map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: 39.8097343, lng: -98.5556199},
			zoom: 4,
			styles: [
				{elementType: 'geometry', stylers: [{color: '#242f3e'}]},
				{elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
				{elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
				{
				featureType: 'administrative.locality',
				elementType: 'labels.text.fill',
				stylers: [{color: '#d59563'}]
				},
				{
				featureType: 'poi',
				elementType: 'labels.text.fill',
				stylers: [{color: '#d59563'}]
				},
				{
				featureType: 'poi.park',
				elementType: 'geometry',
				stylers: [{color: '#263c3f'}]
				},
				{
				featureType: 'poi.park',
				elementType: 'labels.text.fill',
				stylers: [{color: '#6b9a76'}]
				},
				{
				featureType: 'road',
				elementType: 'geometry',
				stylers: [{color: '#38414e'}]
				},
				{
				featureType: 'road',
				elementType: 'geometry.stroke',
				stylers: [{color: '#212a37'}]
				},
				{
				featureType: 'road',
				elementType: 'labels.text.fill',
				stylers: [{color: '#9ca5b3'}]
				},
				{
				featureType: 'road.highway',
				elementType: 'geometry',
				stylers: [{color: '#746855'}]
				},
				{
				featureType: 'road.highway',
				elementType: 'geometry.stroke',
				stylers: [{color: '#1f2835'}]
				},
				{
				featureType: 'road.highway',
				elementType: 'labels.text.fill',
				stylers: [{color: '#f3d19c'}]
				},
				{
				featureType: 'transit',
				elementType: 'geometry',
				stylers: [{color: '#2f3948'}]
				},
				{
				featureType: 'transit.station',
				elementType: 'labels.text.fill',
				stylers: [{color: '#d59563'}]
				},
				{
				featureType: 'water',
				elementType: 'geometry',
				stylers: [{color: '#17263c'}]
				},
				{
				featureType: 'water',
				elementType: 'labels.text.fill',
				stylers: [{color: '#515c6d'}]
				},
				{
				featureType: 'water',
				elementType: 'labels.text.stroke',
				stylers: [{color: '#17263c'}]
				}
			]
			});
		}
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9wfOdbmESPO0xD9wtrXTYus7usm0jiEE&callback=initMap"
		async defer></script>


		<section class="rehab-type">

			<div class="rehab-type__wrapper">
				<article class="rehab-type__inpatient-rehab">
					<h3 class="rehab-type__headerType">Inpatient Rehab</h3>
					<ul>
						<li class="num-1">Living in a drug-free environment.</li>
						<li class="num-2">Full inmersion in the recovery process.</li>
						<li class="num-3">24/7 medical and psychiatric support.</li>
						<li class="num-4">Removal from temptations of every-day life.</li>
					</ul>
					<button class="submit">Learn More</button>
				</article>
				<article class="rehab-type__outpatient-rehab">
					<h3 class="rehab-type__headerType">Outpatient Rehab</h3>
					<ul>
						<li class="num-1">Freedom to keep a job outside of rehab.</li>
						<li class="num-2">Sense of independence and normality.</li>
						<li class="num-3">Ability to care for dependents.</li>
						<li class="num-4">Lower costs than inpatient rehab.</li>
					</ul>
						<button class="submit">Learn More</button>
				</article>
			</div>
		</section>

	</article>

</section>



<section class="opioid-epidemic">
	<h3 style="color: var(--blue-light);">The Opioid Epidemic</h3>
	<div class="opioid-epidemic__wrapper">
		<article class="opioid-epidemic__wave-1">
			<h3>The 1st Wave</h3>
			<p>The Opioid epidemic began in the 1990s when pharmaceutical corporations assured the medical community of the safety of prescription Opioids as pain relievers, leading to millions of prescriptions.</p>
		</article>
		<article class="opioid-epidemic__wave-2">
			<h3>The 2nd Wave</h3>
			<p>The second wave of the Opioid epidemic started in 2010 when many former prescription Opioid users began to turn to Heroin, causing a massive spike in overdoses and resulting deaths.</p>
		</article>
		<article class="opioid-epidemic__wave-3">
			<h3>The 3rd Wave</h3>
			<p>The third wave of the Opioid epidemic started in 2013 when even more potent drugs, like Fentanyl and Carfentanil, became widespread, leading to another increase in overdose and death rates.</p>
		</article>
	</div>
	<br />
	<button type="submit">Learn More</button>
</section>


<section class="rehab-payment">
	<div class="rehab-payment__wrapper">
		<article class="rehab-payment__left-side"><img width="866px" height="446px" src="https://source.unsplash.com/500x202/?nature,water" alt="chairs"></article>
		<article class="rehab-payment__right-side">
			<h3>How Do I Pay For Rehab?</h3>
			<p>Every treatment facility changes differently depending on the needs of the treatment seeker; the options for paying for rehab will vary. No matter what insurance you have, or if you have to pay out of pocket, there is a treatment center out there willing to work with you to help you recover.</p>
			<button type="submit">Find Out More</button>
		</article>
	</div>
</section>


<section class="footer">
	<article class="footer__routes">
		<ul class="footer__l-list">
			<li class="l-list__items">Alcohol</li>
			<li class="l-list__items">Drugs</li>
			<li class="l-list__items">Treatment</li>
			<li class="l-list__items">Detox</li>
			<li class="l-list__items">Family</li>
		</ul>
		<hr style="width:100%" />
	</article>


	<div class="footer__social">
		<article class="footer__icons">
			<ul class="footer__l-list">
				<li><a href="#">
						<svg style="fill:gold;" class="Icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg>					
				</a></li>
				<li>
					<a href="#">
						<svg style="fill:gold;" width="24" height="24" class="Icon" viewBox="0 0 16 14" xmlns="http://www.w3.org/2000/svg"><g><g transform="translate(-102.000000, -7.000000)"><g transform="translate(0.000000, 3.000000)"><g transform="translate(102.000000, 0.000000)"><path d="M14.1151611,6.21334681 C14.7932148,5.77654196 15.3134942,5.08392315 15.5576686,4.25884732 C14.922815,4.66430738 14.2212831,4.95753286 13.4727945,5.11627907 C12.8755063,4.42871587 12.0218348,4 11.0770676,4 C9.26454188,4 7.79573869,5.58240647 7.79573869,7.5338726 C7.79573869,7.81092012 7.82297353,8.08088979 7.87932148,8.33872599 C5.15208077,8.19110212 2.73381464,6.78564206 1.11381112,4.64610718 C0.831132242,5.16986855 0.669601456,5.77654196 0.669601456,6.42366026 C0.669601456,7.64914055 1.24904619,8.73104146 2.12995246,9.36602629 C1.59182955,9.34782609 1.08563714,9.18705763 0.642366614,8.92416582 L0.642366614,8.96764408 C0.642366614,10.6804853 1.77308212,12.1092012 3.27663321,12.4327604 C3.00052826,12.5156724 2.71127546,12.5571284 2.41075307,12.5571284 C2.19944826,12.5571284 1.99283911,12.5358948 1.79374303,12.4944388 C2.21071785,13.8978766 3.42313788,14.9211325 4.86001057,14.9484328 C3.73586899,15.8968655 2.32059635,16.4610718 0.783236485,16.4610718 C0.518401127,16.4610718 0.256383166,16.445905 0,16.4125379 C1.45283794,17.4145602 3.1780243,18 5.03187181,18 C11.0704936,18 14.3706052,12.6147624 14.3706052,7.94438827 C14.3706052,7.79069767 14.3687269,7.6380182 14.362153,7.48736097 C15.0035804,6.98887765 15.5614251,6.36602629 16,5.65722952 C15.4111639,5.93832154 14.7781886,6.12841254 14.1151611,6.21334681 Z"></path></g></g></g></g></svg>
					</a>
				</li>
				<li>
					<a href="#">
						<svg style="fill:gold;" width="24" height="24" class="Icon" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.4 38.3"><path d="M27.8-0.1H10.6C4.8-0.1,0,4.6,0,10.6v17.2c0,5.8,4.7,10.6,10.6,10.6h17.2c5.8,0,10.6-4.7,10.6-10.6V10.5C38.4,4.6,33.6-0.1,27.8-0.1z M19.2,28.9c-5.4,0-9.9-4.4-9.9-9.9c0-5.4,4.4-9.9,9.9-9.9c5.4,0,9.9,4.4,9.9,9.9S24.7,28.9,19.2,28.9z M31.2,10.8c-0.5,0.5-1.1,0.8-1.8,0.8s-1.3-0.3-1.8-0.8S26.8,9.7,26.8,9s0.3-1.3,0.8-1.8s1.1-0.8,1.8-0.8s1.3,0.3,1.8,0.8S32,8.3,32,9C31.9,9.6,31.6,10.3,31.2,10.8z"></path><path d="M19.2,12.6c-3.6,0-6.5,2.9-6.5,6.5s2.9,6.5,6.5,6.5s6.5-2.9,6.5-6.5S22.8,12.6,19.2,12.6z"></path></svg>
					</a>
				</li>
			</ul>
			<ul class="footer__l-list2">
				<li>About Us</li>
				<li>Contact Us</li>
				<li>Disclaimer</li>
				<li>Privacy Policy</li>
			</ul>

			<p style="color:grey;font-size:16px;margin-left:80px;">Copyright © 2020 Recovery Worldwide, LLC.</p>
		</article>



		<article class="contact">

			<p style="margin-left: 2rem;color:grey;">Connect with a compassionate treatment specialist 24/7</p>
			
			<div class="contact__wrapper">
				<div class="contact__number">
					<button class="contact__number__phone-num">(855) 611-1126</button>
				</div>

				<div class="contact__form">
					<input type="tel" placeholder="(___) ___-____" id="contact__form_num" />
					<form action="" method="get">
						<button type="submit" class="contact__form_call">Get a Call</button>
					</form>
				</div>
			</div>

		</article>		
	</div>

	
	<!-- line separator for sponsor section -->
	<hr style="width:100%" />

	<article class="sponsors">
		<div class="sponsors__left-side">
			<p style="color:grey;">The information provided by RehabSpot.com is not a substitute for professional medical advice.</p>
			<p style="color:var(--newGold);">Calls will be forwarded to these treatment providers</p>
		</div>
		<div class="sponsors__right-side">
			<div class="inner-left" style="color:grey">This site complies with the HONcode standard for trustworthy health information: verify here.</div>
			<div class="inner-right" style="color:">RehabSpot supports:</div>
		</div>
	</article>


</section>


		<?php wp_footer(); ?>	
	</body>
</html>
