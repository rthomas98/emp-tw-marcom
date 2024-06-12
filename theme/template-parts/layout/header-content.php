<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Empuls3
 */

?>

<header class="bg-white" x-data="{ open: false }">
	<nav
		class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8"
		aria-label="Global"
	>
		<div class="flex lg:flex-1 items-center">
			<a href="#" class="-m-1.5 p-1.5">
				<span class="sr-only">Empuls3</span>
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<?php $header_logo = get_field( 'header_logo', 'option' ); ?>
					<?php if ( $header_logo ) : ?>
						<img class="h-8 w-auto" src="<?php echo esc_url( $header_logo['url'] ); ?>" alt="<?php echo esc_attr( $header_logo['alt'] ); ?>" />
					<?php endif; ?>
				</a>
				<span class="ml-3 text-gray-300 text-em-purple font-bold invisible sm:invisible md:invisible lg:visible">Empuls3</span>
			</a>
		</div>
		<div class="flex lg:hidden">
			<button
				type="button"
				class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
				@click="open = ! open"
			>
				<span class="sr-only">Open main menu</span>
				<svg
					class="h-6 w-6"
					fill="none"
					viewBox="0 0 24 24"
					stroke-width="1.5"
					stroke="currentColor"
					aria-hidden="true"
				>
					<path
						stroke-linecap="round"
						stroke-linejoin="round"
						d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
					/>
				</svg>
			</button>
		</div>
		<div class="hidden lg:flex lg:gap-x-12">

			<a href="<?php echo esc_url(home_url('/')); ?>" class="text-sm font-semibold leading-6 text-gray-900 hover:text-em-pink"
			>Home</a
			>

			<!-- Company -->

			<div class="relative" x-data="{ open: false }">
				<button
					type="button"
					class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900 hover:text-em-pink"
					aria-expanded="false"
					@click="open = ! open"
				>
					Company
					<svg
						class="h-5 w-5 flex-none text-gray -400"
						viewBox="0 0 20 20"
						fill="currentColor"
						aria-hidden="true"
					>
						<path
							fill-rule="evenodd"
							d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
							clip-rule="evenodd"
						/>
					</svg>
				</button>
				<div
					class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5"
					x-show="open"
				>
					<div class="p-4">
						<div
							class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50 <?php if (is_page('about-us')) echo 'active bg-gray-50'; ?>"
						>
							<div
								class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('about-us')) echo 'active bg-white'; ?>"
							>

								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('about-us')) echo 'active text-em-pink'; ?>">
									<path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
								</svg>

							</div>
							<div class="flex-auto">
								<a href="<?php echo site_url('/about-us'); ?>" class="block font-semibold text-gray-900">
									About Us
									<span class="absolute inset-0"></span>
								</a>
								<p class="mt-1 text-gray-600">
									Learn About Our Company
								</p>
							</div>
						</div>
						<div
							class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50 <?php if (is_page('approach')) echo 'active bg-gray-50'; ?>"
						>
							<div
								class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('approach')) echo 'active bg-white'; ?>"
							>
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('approach')) echo 'active text-em-pink'; ?>">
									<path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
								</svg>

							</div>
							<div class="flex-auto">
								<a href="<?php echo site_url('/approach'); ?>" class="block font-semibold text-gray-900">
									Approach
									<span class="absolute inset-0"></span>
								</a>
								<p class="mt-1 text-gray-600">
									Our Unique Methodology
								</p>
							</div>
						</div>
						<div
							class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50 <?php if (is_page('partnership')) echo 'active bg-gray-50'; ?>"
						>
							<div
								class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('partnership')) echo 'active bg-white'; ?>"
							>
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('partnership')) echo 'active text-em-pink'; ?>">
									<path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002" />
								</svg>
							</div>
							<div class="flex-auto">
								<a href="<?php echo site_url('/partnership'); ?>" class="block font-semibold text-gray-900">
									Partnerships
									<span class="absolute inset-0"></span>
								</a>
								<p class="mt-1 text-gray-600">
									Collaborative Efforts
								</p>
							</div>
						</div>
						<div
							class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50 <?php if (is_page('why-us')) echo 'active bg-gray-50'; ?>"
						>
							<div
								class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('why-us')) echo 'active bg-white'; ?>"
							>
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('why-us')) echo 'active text-em-pink'; ?>">
									<path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
								</svg>
							</div>
							<div class="flex-auto">
								<a href="<?php echo site_url('/why-us'); ?>" class="block font-semibold text-gray-900">
									Why Us
									<span class="absolute inset-0"></span>
								</a>
								<p class="mt-1 text-gray-600">
									Why Choose Empuls3?
								</p>
							</div>
						</div>
						<div
							class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50 <?php if (is_page('our-work')) echo 'active bg-gray-50'; ?>"
						>
							<div
								class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('our-work')) echo 'active bg-white'; ?>"
							>
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('our-work')) echo 'active text-em-pink'; ?>">
									<path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
								</svg>
							</div>
							<div class="flex-auto">
								<a href="<?php echo site_url('/our-work'); ?>" class="block font-semibold text-gray-900">
									Our Work
									<span class="absolute inset-0"></span>
								</a>
								<p class="mt-1 text-gray-600">
									Our Project Portfolio
								</p>
							</div>
						</div>
						<div
							class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50 <?php if (is_page('case-studies')) echo 'active bg-gray-50'; ?>"
						>
							<div
								class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('case-studies')) echo 'active bg-white'; ?>"
							>
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('case-studies')) echo 'active text-em-pink'; ?>">
									<path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12" />
								</svg>
							</div>
							<div class="flex-auto">
								<a href="<?php echo site_url('/case-studies'); ?>" class="block font-semibold text-gray-900">
									Case Studies
									<span class="absolute inset-0"></span>
								</a>
								<p class="mt-1 text-gray-600">
									Detailed Client Successes
								</p>
							</div>
						</div>
						<div
							class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50 <?php if (is_page('insight')) echo 'active bg-gray-50'; ?>"
						>
							<div
								class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('insight')) echo 'active bg-white'; ?>"
							>
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('insight')) echo 'active text-em-pink'; ?>">
									<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
								</svg>
							</div>
							<div class="flex-auto">
								<a href="<?php echo site_url('/insight'); ?>" class="block font-semibold text-gray-900">
									Insight
									<span class="absolute inset-0"></span>
								</a>
								<p class="mt-1 text-gray-600">
									Industry Insights and Trends
								</p>
							</div>
						</div>
					</div>

					<div
						class="grid grid-cols-2 divide-x divide-em-dark-pink/5 bg-em-pink"
					>
						<a
							href="<?php echo site_url('/contact-us'); ?>"
							class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-white hover:bg-em-dark-pink"
						>
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 flex-none text-em-yellow">
								<path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
							</svg>

							Ready To Get Started?
						</a>
						<a
							href="<?php echo site_url('/frequently-asked-questions'); ?>"
							class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-white hover:bg-em-dark-pink"
						>
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 flex-none text-em-yellow">
								<path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
							</svg>

							Have A Question?
						</a>
					</div>
				</div>
			</div>

			<!-- end Company -->

			<!-- Solutions -->
			<div class="relative" x-data="{ open: false }">
				<button
					type="button"
					class="inline-flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
					aria-expanded="false"
					@click="open = ! open"
				>
					<span>Solutions</span>
					<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
					</svg>
				</button>

				<div
					class="absolute left-1/2 z-10 mt-5 flex w-screen max-w-max -translate-x-1/2 px-4"
					x-show="open"
				>
					<div class="w-screen max-w-md flex-auto overflow-hidden rounded-3xl bg-white text-sm leading-6 shadow-lg ring-1 ring-gray-900/5 lg:max-w-3xl">
						<div class="grid grid-cols-1 gap-x-6 gap-y-1 p-4 lg:grid-cols-2">
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50 <?php if (is_page('solutions-overview')) echo 'active bg-gray-50'; ?>">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('solutions-overview')) echo 'active bg-white'; ?>">
									<svg class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('solutions-overview')) echo 'active text-em-pink'; ?>" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
										<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
									</svg>
								</div>
								<div>
									<a href="<?php echo site_url('/solutions-overview'); ?>" class="font-semibold text-gray-900">
										Solutions Overview
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Comprehensive Tech Solutions</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50 <?php if (is_page('back-end-development')) echo 'active bg-gray-50'; ?>">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white  <?php if (is_page('back-end-development')) echo 'active bg-white'; ?>">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('back-end-development')) echo 'active text-em-pink'; ?>">
										<path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z" />
									</svg>

								</div>
								<div>
									<a href="<?php echo site_url('/back-end-development'); ?>" class="font-semibold text-gray-900">
										Back-End Development
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Robust Server-Side Solutions</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50 <?php if (is_page('custom-software-development')) echo 'active bg-gray-50'; ?>">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('custom-software-development')) echo 'active bg-white'; ?>">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('custom-software-development')) echo 'active text-em-pink'; ?>">
										<path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
									</svg>

								</div>
								<div>
									<a href="<?php echo site_url('/custom-software-development'); ?>" class="font-semibold text-gray-900">
										Custom Software Development
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Tailored Software Solutions</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50 <?php if (is_page('custom-wordpress-development')) echo 'active bg-gray-50'; ?>">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('custom-wordpress-development')) echo 'active bg-white'; ?>">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('custom-wordpress-development')) echo 'active text-em-pink'; ?>">
										<path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
									</svg>

								</div>
								<div>
									<a href="<?php echo site_url('/custom-wordpress-development'); ?>" class="font-semibold text-gray-900">
										Custom WordPress Development
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Unique WordPress Customizations</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50 <?php if (is_page('e-commerce-development')) echo 'active bg-gray-50'; ?>">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('e-commerce-development')) echo 'active bg-white'; ?>">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('e-commerce-development')) echo 'active text-em-pink'; ?>">
										<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
									</svg>

								</div>
								<div>
									<a href="<?php echo site_url('/e-commerce-development'); ?>" class="font-semibold text-gray-900">
										E-commerce Development
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Online Store Development</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50 <?php if (is_page('front-end-development')) echo 'active bg-gray-50'; ?>">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('front-end-development')) echo 'active bg-white'; ?>">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('front-end-development')) echo 'active text-em-pink'; ?>">
										<path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6ZM7.5 6h.008v.008H7.5V6Zm2.25 0h.008v.008H9.75V6Z" />
									</svg>

								</div>
								<div>
									<a href="<?php echo site_url('/front-end-development'); ?>" class="font-semibold text-gray-900">
										Front-End Development
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Engaging User Interfaces</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50 <?php if (is_page('full-stack-development')) echo 'active bg-gray-50'; ?>"">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('full-stack-development')) echo 'active bg-white'; ?>">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('full-stack-development')) echo 'active text-em-pink'; ?>">
										<path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
									</svg>

								</div>
								<div>
									<a href="<?php echo site_url('/full-stack-development'); ?>" class="font-semibold text-gray-900">
										Full-Stack Development
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">End-to-End Tech Solutions</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50 <?php if (is_page('hubspot-development')) echo 'active bg-gray-50'; ?>">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('hubspot-development')) echo 'active bg-white'; ?>">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('hubspot-development')) echo 'active text-em-pink'; ?>">
										<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 8.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v8.25A2.25 2.25 0 0 0 6 16.5h2.25m8.25-8.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-7.5A2.25 2.25 0 0 1 8.25 18v-1.5m8.25-8.25h-6a2.25 2.25 0 0 0-2.25 2.25v6" />
									</svg>

								</div>
								<div>
									<a href="<?php echo site_url('/hubspot-development'); ?>" class="font-semibold text-gray-900">
										HubSpot Development
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">HubSpot CRM Integrations</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50 <?php if (is_page('mvp-development')) echo 'active bg-gray-50'; ?>">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('mvp-development')) echo 'active bg-white'; ?>">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('mvp-development')) echo 'active text-em-pink'; ?>">
										<path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
									</svg>

								</div>
								<div>
									<a href="<?php echo site_url('/mvp-development'); ?>" class="font-semibold text-gray-900">
										MVP Development
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Launch Startups Efficiently</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50 <?php if (is_page('progressive-web-applications')) echo 'active bg-gray-50'; ?>">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('progressive-web-applications')) echo 'active bg-white'; ?>">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('progressive-web-applications')) echo 'active text-em-pink'; ?>">
										<path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
									</svg>
								</div>
								<div>
									<a href="<?php echo site_url('/progressive-web-applications'); ?>" class="font-semibold text-gray-900">
										Progressive Web Applications
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Cutting-Edge Web Apps</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50 <?php if (is_page('react-native-development')) echo 'active bg-gray-50'; ?>">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('react-native-development')) echo 'active bg-white'; ?>">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('react-native-development')) echo 'active text-em-pink'; ?>">
										<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
									</svg>
								</div>
								<div>
									<a href="<?php echo site_url('/react-native-development'); ?>" class="font-semibold text-gray-900">
										React Native Development
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Cross-Platform Mobile Apps</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50 <?php if (is_page('software-development-and-design')) echo 'active bg-gray-50'; ?>">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white <?php if (is_page('software-development-and-design')) echo 'active bg-white'; ?>">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink <?php if (is_page('software-development-and-design')) echo 'active text-em-pink'; ?>">
										<path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 4.764-4.648l3.876-5.814a1.151 1.151 0 0 0-1.597-1.597L14.146 6.32a15.996 15.996 0 0 0-4.649 4.763m3.42 3.42a6.776 6.776 0 0 0-3.42-3.42" />
									</svg>
								</div>
								<div>
									<a href="<?php echo site_url('/software-development-and-design'); ?>" class="font-semibold text-gray-900">
										Software Development and Design
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Elegant & Functional Software</p>
								</div>
							</div>

						</div>
						<div class="bg-em-pink px-8 py-6">
							<div class="flex items-center gap-x-3">
								<h3 class="text-sm font-semibold leading-6 text-white font-bold">
									Our Solutions
								</h3>
							</div>
							<p class="mt-2 text-sm leading-6 text-white">
								Discover our comprehensive range of innovative technology solutions designed to meet your unique business needs. From custom software development to advanced security measures, explore how Empuls3 can help you achieve your goals.
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end Solutions -->

			<!-- Services -->
			<div class="relative" x-data="{ open: false }">
				<button
					type="button"
					class="inline-flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
					aria-expanded="false"
					@click="open = ! open"
				>
					<span>Services</span>
					<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
					</svg>
				</button>

				<div
					class="absolute left-1/2 z-10 mt-5 flex w-screen max-w-max -translate-x-1/2 px-4"
					x-show="open"
				>
					<div class="w-screen max-w-md flex-auto overflow-hidden rounded-3xl bg-white text-sm leading-6 shadow-lg ring-1 ring-gray-900/5 lg:max-w-3xl">
						<div class="grid grid-cols-1 gap-x-6 gap-y-1 p-4 lg:grid-cols-2">
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink">
										<path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
									</svg>

								</div>
								<div>
									<a href="<?php echo site_url('/services-overview'); ?>" class="font-semibold text-gray-900">
										Services Overview
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">All Our Services</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink">
										<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
									</svg>
								</div>
								<div>
									<a href="<?php echo site_url('/application-services'); ?>" class="font-semibold text-gray-900">
										Application Services
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Comprehensive App Solutions</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink">
										<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0 0 15 0m-15 0a7.5 7.5 0 1 1 15 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077 1.41-.513m14.095-5.13 1.41-.513M5.106 17.785l1.15-.964m11.49-9.642 1.149-.964M7.501 19.795l.75-1.3m7.5-12.99.75-1.3m-6.063 16.658.26-1.477m2.605-14.772.26-1.477m0 17.726-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205 12 12m6.894 5.785-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
									</svg>
								</div>
								<div>
									<a href="<?php echo site_url('/devops'); ?>" class="font-semibold text-gray-900">
										DevOps
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Integrated DevOps Services</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink">
										<path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
									</svg>
								</div>
								<div>
									<a href="<?php echo site_url('/it-consulting'); ?>" class="font-semibold text-gray-900">
										IT Consulting
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Expert IT Advice</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink">
										<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 0 1-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 1 1-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 0 1 6.336-4.486l-3.276 3.276a3.004 3.004 0 0 0 2.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852Z" />
										<path stroke-linecap="round" stroke-linejoin="round" d="M4.867 19.125h.008v.008h-.008v-.008Z" />
									</svg>
								</div>
								<div>
									<a href="<?php echo site_url('/maintenance-and-support'); ?>" class="font-semibold text-gray-900">
										Maintenance and Support
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Ongoing Tech Support</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink">
										<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 0 0 4.5 4.5H18a3.75 3.75 0 0 0 1.332-7.257 3 3 0 0 0-3.758-3.848 5.25 5.25 0 0 0-10.233 2.33A4.502 4.502 0 0 0 2.25 15Z" />
									</svg>
								</div>
								<div>
									<a href="<?php echo site_url('/managed-it-services'); ?>" class="font-semibold text-gray-900">
										Managed IT Services
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Complete IT Management</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink">
										<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
									</svg>
								</div>
								<div>
									<a href="<?php echo site_url('/quality-assurance-and-testing'); ?>" class="font-semibold text-gray-900">
										Quality Assurance and Testing
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Ensuring Software Quality</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink">
										<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
									</svg>

								</div>
								<div>
									<a href="<?php echo site_url('/smart-teams'); ?>" class="font-semibold text-gray-900">
										Smart Teams
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Dedicated Tech Teams</p>
								</div>
							</div>
							<div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
								<div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-600 group-hover:text-em-pink">
										<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
									</svg>
								</div>
								<div>
									<a href="<?php echo site_url('/software-engineering'); ?>" class="font-semibold text-gray-900">
										Software Engineering
										<span class="absolute inset-0"></span>
									</a>
									<p class="mt-1 text-gray-600">Advanced Software Solutions</p>
								</div>
							</div>
						</div>
						<div class="bg-em-pink px-8 py-6">
							<div class="flex items-center gap-x-3">
								<h3 class="text-sm font-semibold leading-6 text-white font-bold">Our Services</h3>
							</div>
							<p class="mt-2 text-sm leading-6 text-white">Explore our expert services tailored to drive your success. From application development and IT consulting to maintenance and support, Empuls3 provides the comprehensive services your business needs to thrive.

							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- end Services -->

			<a href="<?php echo site_url('/industries'); ?>" class="text-sm font-semibold leading-6 text-gray-900 hover:text-em-pink"
			>Industries</a
			>



		</div>
		<div class="hidden lg:flex lg:flex-1 lg:justify-end">
			<a href="<?php echo site_url('/contact-us'); ?>" class="text-sm font-semibold leading-6 text-gray-900 hover:text-em-pink"
			>Contact Us <span aria-hidden="true">&rarr;</span></a
			>
		</div>
	</nav>
	<!-- Mobile menu, show/hide based on menu open state. -->
	<div class="lg:hidden" role="dialog" aria-modal="true" x-show="open">
		<!-- Background backdrop, show/hide based on slide-over state. -->
		<div class="fixed inset-0 z-10"></div>
		<div
			class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
		>
			<div class="flex items-center justify-between">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="-m-1.5 p-1.5">
					<span class="sr-only">Your Company</span>
					<?php $header_logo = get_field( 'header_logo', 'option' ); ?>
					<?php if ( $header_logo ) : ?>
						<img class="h-8 w-auto" src="<?php echo esc_url( $header_logo['url'] ); ?>" alt="<?php echo esc_attr( $header_logo['alt'] ); ?>" />
					<?php endif; ?>
				</a>
				<button type="button" @click="open = ! open" class="-m-2.5 rounded-md p-2.5 text-gray-700">
					<span class="sr-only">Close menu</span>
					<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div class="mt-6 flow-root" x-show="open">
				<div class="-my-6 divide-y divide-gray-500/10">
					<div class="space-y-2 py-6">
						<div class="-mx-3"  x-data="{ open: false }">
							<button
								type="button"
								class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
								aria-controls="disclosure-1"
								aria-expanded="false"
								@click="open = ! open"
							>
								Home

								<svg
									class="h-5 w-5 flex-none"
									viewBox="0 0 20 20"
									fill="currentColor"
									aria-hidden="true"
								>
									<path
										fill-rule="evenodd"
										d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
										clip-rule="evenodd"
									/>
								</svg>
							</button>
							<!-- 'Product' sub-menu, show/hide based on menu state. -->
							<div class="mt-2 space-y-2" id="disclosure-1"  x-show="open">
								<a
									href="#"
									class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50"
								>Analytics</a
								>
								<a
									href="#"
									class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50"
								>Engagement</a
								>
								<a
									href="#"
									class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50"
								>Security</a
								>
								<a
									href="#"
									class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50"
								>Integrations</a
								>
								<a
									href="#"
									class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50"
								>Automations</a
								>
								<a
									href="#"
									class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50"
								>Watch demo</a
								>
								<a
									href="#"
									class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50"
								>Contact sales</a
								>
							</div>
						</div>
						<a
							href="#"
							class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
						>Features</a
						>
						<a
							href="#"
							class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
						>Marketplace</a
						>
						<a
							href="#"
							class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
						>Company</a
						>
					</div>
					<div class="py-6">
						<a
							href="#"
							class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
						>Log in</a
						>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
