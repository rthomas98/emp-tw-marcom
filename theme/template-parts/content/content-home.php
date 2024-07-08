<?php if ( have_rows( 'home_hero' ) ) : ?>
	<?php while ( have_rows( 'home_hero' ) ) : the_row(); ?>
<div class="bg-em-purple">
	<main>
		<div class="relative isolate">
			<svg class="absolute inset-0 -z-10 h-full w-full stroke-white/20 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
				<defs>
					<pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
						<path d="M.5 200V.5H200" fill="none" />
					</pattern>
				</defs>
				<svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
					<path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z" stroke-width="0" />
				</svg>
				<rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
			</svg>
			<div class="absolute left-1/2 right-0 top-0 -z-10 -ml-24 transform-gpu overflow-hidden blur-3xl lg:ml-24 xl:ml-48" aria-hidden="true">
				<div class="aspect-[801/1036] w-[50.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(63.1% 29.5%, 100% 17.1%, 76.6% 3%, 48.4% 0%, 44.6% 4.7%, 54.5% 25.3%, 59.8% 49%, 55.2% 57.8%, 44.4% 57.2%, 27.8% 47.9%, 35.1% 81.5%, 0% 97.7%, 39.2% 100%, 35.2% 81.4%, 97.2% 52.8%, 63.1% 29.5%)"></div>
			</div>
			<div class="overflow-hidden">
				<div class="mx-auto max-w-7xl px-6 pb-32 pt-36 sm:pt-60 lg:px-8 lg:pt-32">
					<div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
						<div class="relative w-full max-w-xl lg:shrink-0 xl:max-w-2xl">
							<div class="hidden sm:mb-8 sm:flex">
								<div class="relative rounded-full px-3 py-1 text-sm leading-6 bg-em-pink text-white ring-1 ring-gray-900/10 hover:ring-gray-900/20">
									<?php the_sub_field( 'subtitle' ); ?> <span aria-hidden="true">&rarr;</span></a>
								</div>
							</div>
							<h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl"><?php the_sub_field( 'title' ); ?></h1>
							<p class="mt-6 text-lg leading-8 text-white sm:max-w-md lg:max-w-none">
								<?php the_sub_field( 'content' ); ?>
							</p>
							<div class="mt-10 flex items-center gap-x-6">
								<?php $button_one_link = get_sub_field( 'button_one_link' ); ?>
								<?php if ( $button_one_link ) : ?>
									<a href="<?php echo esc_url( $button_one_link); ?>" class="rounded-md bg-em-yellow px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-em-pink focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
										<?php the_sub_field( 'button_one_label' ); ?>
									</a>
								<?php endif; ?>
								<?php $button_two_link = get_sub_field( 'button_two_link' ); ?>
								<?php if ( $button_two_link ) : ?>
									<a href="<?php echo esc_url( $button_two_link); ?>" class="text-sm font-semibold leading-6 text-white hover:text-em-pink">
										<?php the_sub_field( 'button_two_label' ); ?> <span aria-hidden="true">→</span>
									</a>
								<?php endif; ?>
							</div>
						</div>
						<div class="mt-14 flex justify-end gap-8 sm:-mt-44 sm:justify-start sm:pl-20 lg:mt-0 lg:pl-0">
							<div class="ml-auto w-44 flex-none space-y-8 pt-32 sm:ml-0 sm:pt-80 lg:order-last lg:pt-36 xl:order-none xl:pt-80">
								<div class="relative">
									<?php $image_one = get_sub_field( 'image_one' ); ?>
									<?php if ( $image_one ) : ?>
										<img src="<?php echo esc_url( $image_one['url'] ); ?>" alt="<?php echo esc_attr( $image_one['alt'] ); ?>" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg" />
									<?php endif; ?>
									<div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
								</div>
							</div>
							<div class="mr-auto w-44 flex-none space-y-8 sm:mr-0 sm:pt-52 lg:pt-36">
								<div class="relative">
									<?php $image_two = get_sub_field( 'image_two' ); ?>
									<?php if ( $image_two ) : ?>
										<img src="<?php echo esc_url( $image_two['url'] ); ?>" alt="<?php echo esc_attr( $image_two['alt'] ); ?>" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg" />
									<?php endif; ?>
									<div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
								</div>
								<div class="relative">
									<?php $image_three = get_sub_field( 'image_three' ); ?>
									<?php if ( $image_three ) : ?>
										<img src="<?php echo esc_url( $image_three['url'] ); ?>" alt="<?php echo esc_attr( $image_three['alt'] ); ?>" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg" />
									<?php endif; ?>
									<div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
								</div>
							</div>
							<div class="w-44 flex-none space-y-8 pt-32 sm:pt-0">
								<div class="relative">
									<?php $image_four = get_sub_field( 'image_four' ); ?>
									<?php if ( $image_four ) : ?>
										<img src="<?php echo esc_url( $image_four['url'] ); ?>" alt="<?php echo esc_attr( $image_four['alt'] ); ?>" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg" />
									<?php endif; ?>
									<div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
								</div>
								<div class="relative">
									<?php $image_five = get_sub_field( 'image_five' ); ?>
									<?php if ( $image_five ) : ?>
										<img src="<?php echo esc_url( $image_five['url'] ); ?>" alt="<?php echo esc_attr( $image_five['alt'] ); ?>" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg" />
									<?php endif; ?>
									<div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'home_why' ) ) : ?>
<?php while ( have_rows( 'home_why' ) ) : the_row(); ?>
<section class="relative isolate container mx-auto grid items-center grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 py-12 md:py-24 lg:py-32 px-4 md:px-6">
	<svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
		<defs>
			<pattern id="0787a7c5-978c-4f66-83c7-11c213f99cb7" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
				<path d="M.5 200V.5H200" fill="none" />
			</pattern>
		</defs>
		<rect width="100%" height="100%" stroke-width="0" fill="url(#0787a7c5-978c-4f66-83c7-11c213f99cb7)" />
	</svg>
	<div class="order-2 md:order-1">
		<?php $image = get_sub_field( 'image' ); ?>
		<?php if ( $image ) : ?>
			<img
				src="<?php echo esc_url( $image['url'] ); ?>"
				alt="<?php echo esc_attr( $image['alt'] ); ?>"
				class="w-full h-auto rounded-lg overflow-hidden object-cover"
				style={{ aspectRatio: "600/400" }}
			/>
		<?php endif; ?>
	</div>
	<div class="order-1 md:order-2 space-y-4 md:space-y-6">
		<div class="space-y-2">
			<div class="inline-block rounded-lg bg-em-pink px-3 py-1 text-sm font-medium text-gray-900 dark:bg-pink dark:text-white">
				<?php the_sub_field( 'subtitle' ); ?>
			</div>
			<h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php the_sub_field( 'title' ); ?></h2>

		</div>

		<p class="mt-6 text-lg leading-8 text-gray-600">
			<?php the_sub_field( 'content' ); ?>
		</p>

		<div class="flex flex-col sm:flex-row sm:items-center gap-2">
			<?php $button_link = get_sub_field( 'button_link' ); ?>
			<?php if ( $button_link ) : ?>
				<a href="<?php echo esc_url( $button_link); ?>" class="bg-em-purple text-white py-2 px-4 rounded hover:bg-em-yellow hover:text-em-purple">
					<?php the_sub_field( 'button_label' ); ?>
				</a>
			<?php endif; ?>
		</div>
	</div>
</section>
	<?php endwhile; ?>
<?php endif; ?>


<section class="w-full py-12 md:py-24 lg:py-28">
	<div class="container mx-auto grid items-center gap-8 px-4 md:px-6 lg:grid-cols-3">
		<div class="space-y-8">
			<div class="space-y-2">
				<div class="inline-block rounded-lg bg-em-pink px-3 py-1 text-sm font-medium text-gray-900 dark:bg-pink dark:text-white">
					Tailored Technology for Your Unique Business Challenges
				</div>
				<h2 class="text-3xl font-bold sm:text-4xl md:text-5xl py-5">
					Turning Vision into Reality with Custom Software Solutions
				</h2>
				<p class="max-w-[700px] text-gray-500">
					We offer customized software development solutions to meet your
					specific business needs. Our team of experts will work closely
					with you to understand your requirements and deliver innovative
					and scalable solutions.
				</p>
			</div>
			<div class="flex flex-col gap-2 min-[400px]:flex-row">
				<Link
					href="/solutions/solutions-overview"
					class="bg-em-purple text-white py-2 px-4 rounded hover:bg-em-pink"
				>
				View Our Solutions
				</Link>
				<Link
					href="/frequently-asked-questions"
					class="bg-transparent text-em-purple py-2 px-4 rounded hover:bg-transparent hover:text-em-pink flex items-center"
				>
				Have more questions?
				<ArrowRightIcon class="h-5 w-5 ml-2" />
				</Link>
			</div>
		</div>
		<div class="grid gap-8">
			<div class="gap-4">
				<img
					alt="Image"
					class="w-full h-auto rounded-lg overflow-hidden object-cover mb-4"
					src="imgs/em-home-img-2.png"
					style={{ aspectRatio: "600/400" }}
				/>
				<div class="space-y-2">
					<h3 class="text-xl font-semibold">
						Custom Software Development Services
					</h3>
					<p class="text-gray-500">
						We specialize in creating custom software solutions.
					</p>
				</div>
				<div class="mt-6 flex gap-x-4 md:mt-8">
					<Link
						href="/company/about-us"
						class="bg-em-yellow text-em-purple py-2 px-4 rounded hover:bg-em-pink hover:text-white"
					>
					Learn More
					</Link>
				</div>
			</div>
			<div class="gap-4">
				<img
					alt="Image"
					class="w-full h-auto rounded-lg overflow-hidden object-cover mb-4"
					src="imgs/em-home-img-4.png"
					style={{ aspectRatio: "600/400" }}
				/>
				<div class="space-y-2">
					<h3 class="text-xl font-semibold">
						Ecommerce Development Solutions
					</h3>
					<p class="text-gray-500">
						We provide end-to-end ecommerce development services.
					</p>
				</div>
				<div class="mt-6 flex gap-x-4 md:mt-8">
					<Link
						href="/company/about-us"
						class="bg-em-yellow text-em-purple py-2 px-4 rounded hover:bg-em-pink hover:text-white"
					>
					Learn More
					</Link>
				</div>
			</div>
		</div>
		<div class="grid gap-8">
			<div class="gap-4">
				<img
					alt="Image"
					class="w-full h-auto rounded-lg overflow-hidden object-cover mb-4"
					src="imgs/em-home-img-3.png"
					style={{ aspectRatio: "600/400" }}
				/>
				<div class="space-y-2">
					<h3 class="text-xl font-semibold ">
						Progressive Web App Development Services
					</h3>
					<p class="text-gray-500">
						We build scalable and engaging progressive web applications.
					</p>
				</div>
				<div class="mt-6 flex gap-x-4 md:mt-8">
					<Link
						href="/company/about-us"
						class="bg-em-yellow text-em-purple py-2 px-4 rounded hover:bg-em-pink hover:text-white"
					>
					Learn More
					</Link>
				</div>
			</div>
			<div class="gap-4">
				<img
					alt="Image"
					class="w-full h-auto rounded-lg overflow-hidden object-cover mb-4"
					src="imgs/em-home-img-5.png"
					style={{ aspectRatio: "600/400" }}
				/>
				<div class="space-y-2">
					<h3 class="text-xl font-semibold">
						React Native Development Services
					</h3>
					<p class="text-gray-500">
						We develop cross-platform mobile apps using React Native.
					</p>
				</div>
				<div class="mt-6 flex gap-x-4 md:mt-8">
					<Link
						href="/company/about-us"
						class="bg-em-yellow text-em-purple py-2 px-4 rounded hover:bg-em-pink hover:text-white"
					>
					Learn More
					</Link>
				</div>
			</div>
		</div>
	</div>
</section>
