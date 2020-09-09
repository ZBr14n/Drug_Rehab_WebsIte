<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

		<style>
			.site-web-image{
				background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rehab-addiction.png');
			}
			.GetHelpCovid__image{
				background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/virus.png ?>');
			}
			.c-purpose-passion__right-side-image{
				background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/couple.png ?>');
			}
			.recreational-drug__right-side{
				background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/girl.png');
			}

			#map {
				width: 100%;
				height: 800px;
				background-color: grey;
			}

						
		</style>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>


		<header>
			<div class="site-header">
				<div class="site-web-image"></div>


				<div class="site-web-contact">
					<div class="contact-one">
						<div class="contact-one-inner">
							<p>Treatment professionals are waiting for your call: </p>
							<p><a href="#">Calls will be forwarded to these treatment providers</a></p>
						</div>
					</div>
					
					<div class="contact-two"><a href="#">(844) 956-2238</a></div>
				</div>				

			</div>
			
			<main class="main">
				<video class="main__video" autoplay muted loop="true">
					<source type="video/mp4" src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/video.mp4'>
				</video>
				
				<nav class="main__nav">
					<ul class="main__l-list">

						<li class="main__l-items">
							<a href="#">Rehabs</a>
							<ul class="main__subnav">
								<aside class="main__define-drug">
									Alcohol is the most commonly abused substance in America, and also one of the most common addictions. Luckily, recovery is possible through rehab.
								</aside>
								<li class="main__subnav-items">
									<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>
								</li>
																	
								<li class="main__subnav-items">
								<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>									
								</li>								
								
								<li class="main__subnav-items">
									<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>
								</li>
									
							</ul>							
						</li>

						<li class="main__l-items">
							<a href="#">Alcohol</a>
							<ul class="main__subnav">
								<aside class="main__define-drug">
									Alcohol is the most commonly abused substance in America, and also one of the most common addictions. Luckily, recovery is possible through rehab.
								</aside>
								<li class="main__subnav-items">
									<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>
								</li>
								<li class="main__subnav-items">
									<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>
								</li>
								<li class="main__subnav-items">
									<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>
								</li>
							</ul>							
						</li>

						<li class="main__l-items">
							<a href="#">Benzo</a>
							<ul class="main__subnav">
								<aside class="main__define-drug">
									Alcohol is the most commonly abused substance in America, and also one of the most common addictions. Luckily, recovery is possible through rehab.
								</aside>
								<li class="main__subnav-items">
									<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>
								</li>
								<li class="main__subnav-items">
									<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>
								</li>
								<li class="main__subnav-items">
									<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="main__l-items">
							<a href="#">Opioids</a>
							<ul class="main__subnav">
									<aside class="main__define-drug">
										Alcohol is the most commonly abused substance in America, and also one of the most common addictions. Luckily, recovery is possible through rehab.
									</aside>
									<li class="main__subnav-items">
										<ul class="main__subnav-subnest">
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
										</ul>
									</li>
									<li class="main__subnav-items">
										<ul class="main__subnav-subnest">
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
										</ul>
									</li>
									<li class="main__subnav-items">
										<ul class="main__subnav-subnest">
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
										</ul>
									</li>
								</ul>
						</li>
						<li class="main__l-items">
							<a href="#">Drugs</a>
							<ul class="main__subnav">
									<aside class="main__define-drug">
										Alcohol is the most commonly abused substance in America, and also one of the most common addictions. Luckily, recovery is possible through rehab.
									</aside>
									<li class="main__subnav-items">
										<ul class="main__subnav-subnest">
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
										</ul>
									</li>
									<li class="main__subnav-items">
										<ul class="main__subnav-subnest">
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
										</ul>
									</li>
									<li class="main__subnav-items">
										<ul class="main__subnav-subnest">
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
											<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
										</ul>
									</li>
								</ul>
						</li>
						<li class="main__l-items">
							<a href="#">Treatment</a>
							<ul class="main__subnav">
								<aside class="main__define-drug">
										Alcohol is the most commonly abused substance in America, and also one of the most common addictions. Luckily, recovery is possible through rehab.
								</aside>
								<li class="main__subnav-items">
									<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>
								</li>
								<li class="main__subnav-items">
									<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>
								</li>
								<li class="main__subnav-items">
									<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="main__l-items">
						<a href="#">Family</a>
						<ul class="main__subnav">
								<aside class="main__define-drug">
									Alcohol is the most commonly abused substance in America, and also one of the most common addictions. Luckily, recovery is possible through rehab.
								</aside>
								<li class="main__subnav-items">
									<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>
								</li>
								<li class="main__subnav-items">
									<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>
								</li>
								<li class="main__subnav-items">
									<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="main__l-items">
							<a href="#">Search</a>
							<ul class="main__subnav">
								<aside class="main__define-drug">
									Alcohol is the most commonly abused substance in America, and also one of the most common addictions. Luckily, recovery is possible through rehab.
								</aside>
								<li class="main__subnav-items">
									<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>
								</li>
								<li class="main__subnav-items">
									<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>
								</li>
								<li class="main__subnav-items">
									<ul class="main__subnav-subnest">
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Bing Drinking</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Alcoholism Warning Signs</a></li>
										<li class="main__subnav-items--subnest"><a href="http://" target="_blank" rel="noopener noreferrer">Causes of Alcoholism</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</nav>


				


				<div class="site-covid-alert">
					<svg id="exclam-mark" class="Icon Icon--announcement" viewBox="0 0 104 106.05"> 

						<path fill="white" class="Icon__color-2" d="M94.67,100.05l-2,6-18.35-11A54.12,54.12,0,0,1,51,100.27c-28.17,0-51-21.1-51-47.13S22.83,6,51,6s51,21.1,51,47.14L87.06,78.25l7.61,21.8"></path> 
						<path fill="white"  class="Icon__color-1" d="M90.47,79.1a45.06,45.06,0,0,0,13.53-32C104,21.1,81.17,0,53,0S2,21.1,2,47.14,24.83,94.27,53,94.27a54.12,54.12,0,0,0,23.32-5.22l18.35,11Z"></path> 
						<path fill="navy"  class="Icon__color-2" d="M48.05,66a5,5,0,0,1,1.31-3.7A4.73,4.73,0,0,1,52.9,61a4.78,4.78,0,0,1,3.58,1.37A4.91,4.91,0,0,1,57.82,66a4.77,4.77,0,0,1-1.31,3.55,5,5,0,0,1-3.67,1.3,4.83,4.83,0,0,1-3.52-1.24A4.73,4.73,0,0,1,48.05,66Zm2.24-9.52c0-1.62,0-3.34-.13-5.17S50,47.74,49.88,46s-.21-3.26-.34-4.67-.21-2.49-.25-3.24c-.12-1.53-.29-3-.49-4.51a34.19,34.19,0,0,1-.32-4.82,5.57,5.57,0,0,1,1.12-3.58,4.19,4.19,0,0,1,3.49-1.41,3.74,3.74,0,0,1,3.39,1.47,6.07,6.07,0,0,1,1,3.45,45.7,45.7,0,0,1-.25,4.86c-.17,1.49-.35,3-.56,4.54,0,.75,0,1.83-.16,3.24s-.21,3-.34,4.67-.24,3.46-.34,5.29-.16,3.55-.16,5.17Z"></path> 
					</svg>

					<div class="covid-alert">COVID-19 Alert: Don't let the COVID-19 virus stop you from getting treatment.</div>
					<button type="submit" class="get-treatment">Get Treatment Today</button>
					
				</div>

			</main>




			<section class="call-action">			
			<article class="call-action__left">						
									
				<div>It’s time to turn your life around.</div>
				<div>Addiction takes so much away from you: friends, family, career, and even your personality. Luckily, you can take it back. Contact a dedicated treatment provider today to find a rehab center that will help you gain control over your life.</div>
				
			</article>

			<article class="call-action__right">
				<div>Speak with an expert</div>
				<div><button type="submit">(844) 263-5190</button></div>
				<div>Let us call you</div>

			</article>
			</section>

		</header>

		
		
			


		<section class="GetHelpCovid">
			<article class="GetHelpCovid__wrapper">
				<h3>Get Help During COVID-19</h3>
				<p>Coronavirus could be a unique opportunity for you to start treatment. If your job, classes, and social life have held you back from getting help, why not give rehab a chance during this time of isolation? With just 30 days at a professional rehab center, you can get clean and sober, start therapy, join a support group, and learn ways to manage your cravings.</p>
				<button type="submit">Find Out More</button>
			</article>

			<article class="GetHelpCovid__image"></article>
			
		</section>




<section class="faq">
	<h3 class="faq__header">Get answers to your questions</h3>

	<article class="faq__wrapper">

		<article class="faq__article">
			<div class="faq__box">How do I understand what my loved one is going through?</div>
			<div class="faq__box">How does treatment work?</div>
			<div class="faq__box">How do I pay for treatment?</div>
		</article>

		<article class="faq__article">
			<div class="faq__box">Am I addicted?</div>
			<div class="faq__box">How do I find treatment?</div>
			<div class="faq__box">Is my drinking a problem?</div>
		</article>

		<article class="faq__article">
			<div class="faq__box">How do I stage an intervention?</div>
			<div class="faq__box">What treatment options are available?</div>
			<div class="faq__box">How do I convince my loved one to get help?</div>
		</article>

	</article>
</section>




<!-- treatment center section -->
<section class="treatment-center-container">
	<h3>Find a Treatment Center</h3>

	
	<article class="wrapper">
		<div class="treatment-center">
			<article class="center-1">
				
				<figure>
					<img src="https://source.unsplash.com/500x202/?nature,water" alt="" class="img-center">
						Duffy’s Napa Valley Rehab
						<figcaption class="img-cap">3076 Myrtledale Rd, Calistoga, CA 94515</figcaption>
						<div class="contact">844-347-7297</div>
						<div class="view-center"><a href="#">View Center ></a></div>
				</figure>
			</article>
		</div>
		<div class="treatment-center">
			<article class="center-2">
				
				<figure>
					<img src="https://source.unsplash.com/500x202/?nature,water" alt="" class="img-center">
						Duffy’s Napa Valley Rehab
						<figcaption class="img-cap">3076 Myrtledale Rd, Calistoga, CA 94515</figcaption>
						<div class="contact">844-347-7297</div>
						<div class="view-center"><a href="#">View Center ></a></div>
				</figure>
			</article>
		</div>
		<div class="treatment-center">
			<article class="center-1">
				
				<figure>
					<img src="https://source.unsplash.com/500x202/?nature,water" alt="" class="img-center">
						Duffy’s Napa Valley Rehab
						<figcaption class="img-cap">3076 Myrtledale Rd, Calistoga, CA 94515</figcaption>
						<div class="contact">844-347-7297</div>
						<div class="view-center"><a href="#">View Center ></a></div>
				</figure>
			</article>
		</div>
		<div class="treatment-center">
			<article class="center-1">
				
				<figure>
					<img src="https://source.unsplash.com/500x202/?nature,water" alt="" class="img-center">
						Duffy’s Napa Valley Rehab
						<figcaption class="img-cap">3076 Myrtledale Rd, Calistoga, CA 94515</figcaption>
						<div class="contact">844-347-7297</div>
						<div class="view-center"><a href="#">View Center ></a></div>
				</figure>
			</article>
		</div>
	</article>


	<article class="wrapper">
		<div class="treatment-center">
			<article class="center-1">
				
				<figure>
					<img src="https://source.unsplash.com/500x202/?nature,water" alt="" class="img-center">
						Duffy’s Napa Valley Rehab
						<figcaption class="img-cap">3076 Myrtledale Rd, Calistoga, CA 94515</figcaption>
						<div class="contact">844-347-7297</div>
						<div class="view-center"><a href="#">View Center ></a></div>
				</figure>
			</article>
		</div>
		<div class="treatment-center">
			<article class="center-1">
				
				<figure>
					<img src="https://source.unsplash.com/500x202/?nature,water" alt="" class="img-center">
						Duffy’s Napa Valley Rehab
						<figcaption class="img-cap">3076 Myrtledale Rd, Calistoga, CA 94515</figcaption>
						<div class="contact">844-347-7297</div>
						<div class="view-center"><a href="#">View Center ></a></div>
				</figure>
			</article>
		</div>
		<div class="treatment-center">
			<article class="center-1">
				
				<figure>
					<img src="https://source.unsplash.com/500x202/?nature,water" alt="" class="img-center">
						Duffy’s Napa Valley Rehab
						<figcaption class="img-cap">3076 Myrtledale Rd, Calistoga, CA 94515</figcaption>
						<div class="contact">844-347-7297</div>
						<div class="view-center"><a href="#">View Center ></a></div>
				</figure>
			</article>
		</div>
		<div class="treatment-center">
			<article class="center-1">
				
				<figure>
					<img src="https://source.unsplash.com/500x202/?nature,water" alt="" class="img-center">
						Duffy’s Napa Valley Rehab
						<figcaption class="img-cap">3076 Myrtledale Rd, Calistoga, CA 94515</figcaption>
						<div class="contact">844-347-7297</div>
						<div class="view-center"><a href="#">View Center ></a></div>
				</figure>
			</article>
		</div>
	</article>



	<article class="wrapper">
	<div class="treatment-center">
			<article class="center-1">
				
				<figure>
					<img src="https://source.unsplash.com/500x202/?nature,water" alt="" class="img-center">
						Duffy’s Napa Valley Rehab
						<figcaption class="img-cap">3076 Myrtledale Rd, Calistoga, CA 94515</figcaption>
						<div class="contact">844-347-7297</div>
						<div class="view-center"><a href="#">View Center ></a></div>
				</figure>
			</article>
		</div>
		<div class="treatment-center">
			<article class="center-1">
				
				<figure>
					<img src="https://source.unsplash.com/500x202/?nature,water" alt="" class="img-center">
						Duffy’s Napa Valley Rehab
						<figcaption class="img-cap">3076 Myrtledale Rd, Calistoga, CA 94515</figcaption>
						<div class="contact">844-347-7297</div>
						<div class="view-center"><a href="#">View Center ></a></div>
				</figure>
			</article>
		</div>
		<div class="treatment-center">
			<article class="center-1">
				
				<figure>
					<img src="https://source.unsplash.com/500x202/?nature,water" alt="" class="img-center">
						Duffy’s Napa Valley Rehab
						<figcaption class="img-cap">3076 Myrtledale Rd, Calistoga, CA 94515</figcaption>
						<div class="contact">844-347-7297</div>
						<div class="view-center"><a href="#">View Center ></a></div>
				</figure>
			</article>
		</div>
		<div class="treatment-center">
			<article class="center-1">
				
				<figure>
					<img src="https://source.unsplash.com/500x202/?nature,water" alt="" class="img-center">
						Duffy’s Napa Valley Rehab
						<figcaption class="img-cap">3076 Myrtledale Rd, Calistoga, CA 94515</figcaption>
						<div class="contact">844-347-7297</div>
						<div class="view-center"><a href="#">View Center ></a></div>
				</figure>
			</article>
		</div>
	</article>

	<button type="submit" class="view-more-listings">View More Listings</button>
</section>






<!-- drug section -->
<section class="drug-name-sect">
	
	<div class="drug-container">
		<article class="drug-name">
			<div class="drug-container__inner-wrap">
				<h3 class="drug-alcohol">Alcohol</h3>
				<p>Alcohol is the most widely abused drug in the world. The effects of alcohol harm a person’s body and mind, but recovery from alcoholism is possible with rehab.</p>
				<button type="submit" class="learn-more">Learn More</button>
			</div>
		</article>
		<article class="drug-name">
			<div class="drug-container__inner-wrap">
				<h3 class="drug-cocaine">Cocaine</h3>
				<p>Cocaine is an addictive stimulant, and Cocaine abuse threatens a person’s health and wellbeing. A Cocaine addiction can be difficult to break, but rehab can help.</p>
				<button type="submit" class="learn-more">Learn More</button>
			</div>
		</article>
		<article class="drug-name">
			<div class="drug-container__inner-wrap">
				<h3 class="drug-codeine">Codeine</h3>
				<p>Codeine is more than a cough syrup ingredient. It is a powerful Opioid which can cause addiction and overdose. Rehab can help anyone overcome a Codeine use disorder.</p>
				<button type="submit" class="learn-more">Learn More</button>
			</div>
		</article>
	</div>



	<div class="drug-container">
		<article class="drug-name-Heroin">
			<div class="drug-container__inner-wrap">
				<h3 class="drug-Heroin">Heroin</h3>
				<p>Heroin is an illegal and highly addictive Opioid, and abuse of the drug may have fatal consequences. Fortunately, treatment for Heroin addiction can save lives.</p>
				<button type="submit" class="learn-more">Learn More</button>
			</div>
		</article>
		<article class="drug-name-Meth">
			<div class="drug-container__inner-wrap">
				<h3 class="drugMeth-">Meth</h3>
				<p>Meth is a dangerous and notoriously powerful drug that can derail anyone’s life. Luckily, professional rehab programs provide a pathway to freedom from Meth addiction.</p>
				<button type="submit" class="learn-more">Learn More</button>
			</div>
		</article>
		<article class="drug-name-Xanax">
			<div class="drug-container__inner-wrap">
				<h3 class="drug-Xanax">Xanax</h3>
				<p>Xanax is a popular Benzodiazepine for managing anxiety and insomnia, yet it poses great risks for abuse and dependence. With professional help, it is possible to quit Xanax.</p>
				<button type="submit" class="learn-more">Learn More</button>
			</div>
		</article>
	</div>

</section>

		<?php
		// Output the menu modal.
get_template_part( 'template-parts/modal-menu' );