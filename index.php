<?php include ('save_email.php');?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link
			rel="stylesheet"
			href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
			integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
			crossorigin="anonymous"
		/>
		<link
			rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
			integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
			crossorigin="anonymous"
		/>
		
		<link rel="stylesheet" href="./assets/css/swiper-bundle.min.css" />
		<link rel="stylesheet" href="./assets/css/flipdown.min.css" />
		<link rel="stylesheet" href="./assets/css/style.css" />
		<script src="./assets/script/flipdown.min.js"></script>
		<link rel="stylesheet" href="./assets/css/preloader.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
		
		<title>LuvBuddy</title>
	</head>
	<body>
			<section class="preloader" id="preloader">
				<div class="multi-spinner-container">
					<div class="multi-spinner">
						<div class="multi-spinner">
							<div class="multi-spinner">
							<div class="multi-spinner">
									<div class="multi-spinner">
										<div class="multi-spinner"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		
	
			<section class="header pb-5 luvbuddy-page" id="luvbuddy-page">
				<nav class="navbar">
					<div class="container">
						<a class="navbar-brand pt-4 mx-auto mx-md-0" href="#">
							<img
								src="./assets/images/Asset 1 1.svg"
								alt=""
								loading="lazy"
								class="logo"
							/>
						</a>
					</div>
				</nav>

				<div class="container banner">
					<div class="row">
						<div class="col-lg-5 banner-left">
							<div class="row banner-left-content">
								<div class="col-12">
									<div class="row">
										<div class="col-12">
											<h5 class="display-4 text-center text-md-left wow fadeInDown" data-wow-delay="5s">
												Reignite your sexual passion
											</h5>
										</div>
										<div class="col-12">
											<p class="text-center text-md-left">Using LuvBuddy innovative AI & ML technology, you can be assured that when you are in bed with your partner, you will both have a session you’ll never forget</p>
										</div>
									</div>
								</div>
								<div class="col-12 mt-5" id="web-subscription">
									<div class="form-row subscription text-center text-md-left">
										<div class="col-12">
											 <form action="index.php" method="POST">
												<input
													type="text" name="email" value="<?php echo htmlspecialchars($email) ?>"
													class="form-control subscription-input px-4"
													placeholder="Your email address here"
												/>
												 <div class="text-danger"><?php echo $errors['email']; ?></div>
												<button type="submit" name="submit" value="submit"class="btn notify-button py-2 px-5 mt-4">
													Keep me posted
												</button>
										</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7 banner-right text-right">
							<img src="./assets/images/PawPaw.svg" alt="" class="img-fluid" />
						</div>
					</div>
				</div>
				<div class="container">
					<div class="drop-down-arrow text-center">
						<a href="#features" class="">
							<p class="mb-1">Learn more</p>
							<div class="drop-down-image">
								<i class="fas fa-angle-double-down"></i>
							</div>
						</a>
					</div>
				</div>
			</section>

			<section class="main" id="features">
				<div class="container">
					<div class="row d-flex align-items-center" > 
						<div class="col-md-6">
							<div class="row text-center text-md-left">
								<div class="col-12 mb-4">
									<h3>
										Hello, Luvbuddy
									</h3>
								</div>
								<div class="col-12 col-md-10">
									<p>
										LuvBuddy learns what you and your partner enjoy in bed and
										suggests new positions, stimulation techniques and sex-related
										ideas based on your liking. Use it next time to have even
										better sex!
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 text-center">
							<img
								src="./assets/images/Rectangle 24.svg"
								class="img-fluid"
								alt=""
							/>
						</div>
					</div>
				</div>
			</section>

			<section class="features-mobile">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="swiper-container row mx-auto">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="./assets/images/Phone11-pro-back.svg" alt="" class="mx-auto img-fluid"/>
									</div>
									<div class="swiper-slide">
										<img src="./assets/images/Phone11-pro-back.png" alt="" class="mx-auto img-fluid"/>
										<p class="">
											<img src="./assets/images/gift.svg" alt="" /
											class="mr-3">Explore mutual desiress
										</p>
									</div>
									<div class="swiper-slide">
										<img src="./assets/images/Phone11-pro-back.svg" alt="" class="mx-auto img-fluid"/>
									</div>
									<div class="swiper-slide">
										<img src="./assets/images/Phone11-pro-back.svg" alt="" class="mx-auto img-fluid"/>
									</div>
									<div class="swiper-slide">
										<img src="./assets/images/Phone11-pro-back.svg" alt="" class="mx-auto img-fluid"/>
									</div>
									<div class="swiper-slide">
										<img src="./assets/images/Phone11-pro-back.svg" alt="" class="mx-auto img-fluid"/>
									</div>
								</div>
								<div class="swiper-pagination"></div>
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
						</div>
					</div>
				</div>

			</section>

			<!-- <section class="features">
				<div class="container">
					<div class="row d-flex align-items-center">
						<div class="col-md-5">
							<div class="row">
								<div class="col-12">
									<div class="row feature-1 my-4 text-center text-md-left">
										<div class="col-12 mb-4">
											<h3 class="">
												Smarter, Better Orgasms
											</h3>
										</div>
										<div class="col-12 col-md-11">
											<p class="">
												Anytime after sex you and your partner can share your feedback
												and desires in the Luvbuddy app. It will give you a choice of
												personalized, sex-related ideas & suggestions on how to
												explore and enhance your sexual wellbeing.
											</p>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="feature-2 my-4">
										<a href="">
											<p class="">
												<img src="./assets/images/gift.svg" alt="" /
												class="mr-3">Explore mutual desiress
											</p></a
										>
									</div>
									<div class="feature-3 my-4">
										<a href="">
											<p class="">
												<img
													src="./assets/images/bell.svg"
													alt=""
													class="mr-3"
												/>Recieve daily tips
											</p>
										</a>
									</div>
									<div class="feature-4 my-4">
										<a href="">
											<p class="">
												<img
													src="./assets/images/edit.svg"
													alt=""
													class="mr-3"
												/>Learn new positions
											</p>
										</a>
									</div>
									<div class="feature-5 my-4">
										<a href="">
											<p class="">
												<img
													src="./assets/images/message-circle.svg"
													alt=""
													class="mr-3"
												/>Chat with World-class sex educators
											</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7">
							<div class="swiper-container row mx-auto">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="./assets/images/Phone11-pro-back.svg" alt="" class="mx-auto img-fluid"/>
									</div>
									<div class="swiper-slide">
										<img src="./assets/images/Phone11-pro-back.png" alt="" class="mx-auto img-fluid"/>
									</div>
									<div class="swiper-slide">
										<img src="./assets/images/Phone11-pro-back.svg" alt="" class="mx-auto img-fluid"/>
									</div>
									<div class="swiper-slide">
										<img src="./assets/images/Phone11-pro-back.svg" alt="" class="mx-auto img-fluid"/>
									</div>
									<div class="swiper-slide">
										<img src="./assets/images/Phone11-pro-back.svg" alt="" class="mx-auto img-fluid"/>
									</div>
								</div> -->
								<!-- Add Pagination -->
								<!-- <div class="swiper-pagination"></div>

								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>
							</div> -->
							<!-- <div class="row mx-auto">
								<img
									src="./assets/images/Phone11-pro-back.svg"
									alt=""
									class="mx-auto img-fluid"
								/>
							</div> -->
						<!-- </div>
					</div>
				</div>
			</section> -->

			<section class="countdown-timer">
				<div class="container">
					<div id="flipdown" class="flipdown"></div>
				</div>
			</section>

			<section class="notify-me">
			          <div class="container">
			              <div class="row d-flex flex-column align-items-center">
			                  <div class="col-12 d-flex flex-column align-items-center text-center">
			                      <h3 class="">Get notified</h3>
			                      <p class="">
										Be the first to know when we launch Luvbuddy
			                      </p>
			                  </div>
			                  <div class="col-md-6 mt-5">
							<div class="form-row subscription text-center">
								<div class="col-12">
									<form action="index.php" method="POST">
										<input
											type="text" name="email" value="<?php echo htmlspecialchars($email) ?>"
											class="form-control subscription-input px-4"
											placeholder="Your email address here"
										/>
										 <div class="text-danger"><?php echo $errors['email']; ?></div>
										<button type="submit" name="submit" value="submit" class="btn notify-button py-2 px-5 mt-4">
											Keep me posted
									</button>
								</form>
								</div>
							</div>
			          </div>
			      </section>


			<section class="footer">
				<div class="container">
					<div class="row pt-3 pb-1">
						<div class="col-md-6 text-center text-md-left">
							<p>&COPY; 2020 LuvBuddy. All Rights Reserved.</p>
						</div>
						<div class="col-md-6 text-center text-md-right">
							<a href=""
								><img src="./assets/images/Vector.svg" alt="" class="pr-2"
							/></a>
							<a href=""><img src="./assets/images/Vector (1).svg" alt="" /></a>
						</div>
					</div>
				</div>
			</section>


		<script
			src="https://code.jquery.com/jquery-3.5.1.min.js"
			crossorigin="anonymous"
			>
		</script>
		<script
			src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
			integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
			crossorigin="anonymous"
		></script>
		<script
			src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
			integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
			crossorigin="anonymous"
		></script>
		<script src="./assets/script/swiper-bundle.min.js"></script>
		<script src="./assets/script/script.js"></script>
		<script src="./assets/script/preloader.js"></script>
		<script src="./assets/script/wow.min.js"></script>
	
	</body>
</html>
