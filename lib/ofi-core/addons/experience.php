<?php

class maggie_Experience extends \Elementor\Widget_Base {

	// Widget Name

	public function get_name() {
		return 'maggie-experience';
	}

	// Widget Titke

	public function get_title() {
		return __( 'Award', 'maggie-core' );
	}

	// Widget Icon

	public function get_icon() {
		return 'fa fa-briefcase';
	}

	//	Widget Categories

	public function get_categories() {
		return [ 'maggie_addons' ];
	}

	// Register Widget Control

	protected function _register_controls() {

		$this->register_content_controls();
		$this->register_style_controls();
	}

	// Widget Controls 

	function register_content_controls() {

		// Controls

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content Controls', 'maggie-core' ),
			]
		);

		// Title Normal

		$this->add_control(
			'title',
			[
				'label'     => __( 'Title', 'maggie-core' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter Title', 'maggie-core' ),
				'default'     => __( 'Awards & Recognitions', 'maggie-core' ),
			]
		);

		// Subtitle

		$this->add_control(
			'subtitle',
			[
				'label'     => __( 'Subtitle', 'maggie-core' ),
				'type'        => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter Subtitle', 'maggie-core' ),
				'default'     => __( 'Our Awards and Recognitions', 'maggie-core' ),
			]
		);

		$this->end_controls_section();

	}

	// Style Control

	protected function register_style_controls() {



		$this->end_controls_section();

	}

	// Widget Render Output

	protected function render() {

		$settings   = $this->get_settings_for_display();

		?>

			<main class="site-content" id="wrapper">
			
			<div class="page-heading page-heading--loop bg-image bg--ph-02">
				<div class="page-heading__subtitle h5 color-primary">Necromancers</div>
				<h1 class="page-heading__title h2"><?php the_title(); ?></h1>
			</div>
			<div class="content staff-layout">
			
				<article class="staff-member has-post-thumbnail">
					<div class="staff-member__thumbnail">
						<img src="assets/img/samples/staff-member-img-01.jpg" alt="">
					</div>
					<div class="staff-member__body">
						<div class="staff-member__position">Team Manager</div>
						<h2 class="staff-member__title h3">Marina Gonzales</h2>
						<ul class="staff-member__meta list-unstyled">
							<li class="staff-member__meta-item"><span>Age</span>22 years</li>
							<li class="staff-member__meta-item"><span>Joined</span>Jan 2016</li>
							<li class="staff-member__meta-item"><span>Country</span>Costa Rica</li>
						</ul>
						<div class="staff-member__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
						<ul class="social-menu social-menu--links">
							<li><a href="https://twitter.com/danfisher_dev/"></a></li>
							<li><a href="twitch.com"></a></li>
							<li><a href="https://www.instagram.com/dan.fisher.dev/"></a></li>
						</ul>
					</div>
				</article>
				<article class="staff-member has-post-thumbnail">
					<div class="staff-member__thumbnail">
						<img src="assets/img/samples/staff-member-img-02.jpg" alt="">
					</div>
					<div class="staff-member__body">
						<div class="staff-member__position">Senior Recruiter</div>
						<h2 class="staff-member__title h3">Stephen Jackson</h2>
						<ul class="staff-member__meta list-unstyled">
							<li class="staff-member__meta-item"><span>Age</span>23 years</li>
							<li class="staff-member__meta-item"><span>Joined</span>Aug 2015</li>
							<li class="staff-member__meta-item"><span>Country</span>United States</li>
						</ul>
						<div class="staff-member__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
						<ul class="social-menu social-menu--links">
							<li><a href="https://twitter.com/danfisher_dev/"></a></li>
							<li><a href="twitch.com"></a></li>
						</ul>
					</div>
				</article>
				<article class="staff-member has-post-thumbnail">
					<div class="staff-member__thumbnail">
						<img src="assets/img/samples/staff-member-img-03.jpg" alt="">
					</div>
					<div class="staff-member__body">
						<div class="staff-member__position">Media Manager</div>
						<h2 class="staff-member__title h3">Jason Griffins</h2>
						<ul class="staff-member__meta list-unstyled">
							<li class="staff-member__meta-item"><span>Age</span>24 years</li>
							<li class="staff-member__meta-item"><span>Joined</span>Dec 2017</li>
							<li class="staff-member__meta-item"><span>Country</span>Canada</li>
						</ul>
						<div class="staff-member__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
						<ul class="social-menu social-menu--links">
							<li><a href="https://www.facebook.com/danfisher.dev/"></a></li>
							<li><a href="https://twitter.com/danfisher_dev/"></a></li>
						</ul>
					</div>
				</article>
				<article class="staff-member has-post-thumbnail">
					<div class="staff-member__thumbnail">
						<img src="assets/img/samples/staff-member-img-04.jpg" alt="">
					</div>
					<div class="staff-member__body">
						<div class="staff-member__position">Public Relations</div>
						<h2 class="staff-member__title h3">Gina May Stevens</h2>
						<ul class="staff-member__meta list-unstyled">
							<li class="staff-member__meta-item"><span>Age</span>20 years</li>
							<li class="staff-member__meta-item"><span>Joined</span>Sep 2016</li>
							<li class="staff-member__meta-item"><span>Country</span>United States</li>
						</ul>
						<div class="staff-member__excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
						<ul class="social-menu social-menu--links">
							<li><a href="https://www.facebook.com/danfisher.dev/"></a></li>
							<li><a href="https://twitter.com/danfisher_dev/"></a></li>
							<li><a href="discordapp.com"></a></li>
						</ul>
					</div>
				</article>
			
			</div>
		</main>
		<?php
	}
}