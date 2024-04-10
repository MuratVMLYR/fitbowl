<style>
	.row {
		margin-right: -12px !important;
		margin-left: -12px !important;
	}
	.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
		padding-right: 12px !important;
		padding-left: 12px !important;
	}
	.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
		padding-right: 12px !important;
		padding-left: 12px !important;
	}
	.container {
		height: 100%;
		padding-left: 90px !important;
		padding-right: 90px !important;
		max-width: none !important;
	}
	html, body {
		font-size: 15px;
		line-height: 20px;
		float: left;
		width:100% !important;
		margin-left:0px !important;
		margin-right:0px !important;
		scroll-behavior: smooth;
		height: 100%;
		color: #000 !important;
		background-color: #fff !important;
		font-family: "Roboto Flex", sans-serif;
		overflow-x: hidden;
	}
	.govde {
		float: left;
		width: 100%;
		height: 100%;
		min-height: 820px;
		position: relative;
		overflow: hidden;
	}
	#myVideo {
		object-fit: cover;
		width: 100vw;
		height: 100vh;
		position: fixed;
		top: 0;
		left: 0;
		z-index: 0;
	}
	.logo {
		position: absolute;
		top: 50px;
		left: 50px;
		width: 410px;
		height: 80px;
		z-index: 1;
	}
	.logo img {
		float: left;
		width: 100%;
	}
	.slider {
		position: absolute;
		bottom: 0px;
		left: 0px;
		/*
		width: 35%;
		height: 0px;
		padding-bottom: 35%;
		*/
		z-index: 1;
		width: 672px;
		height: 672px;
		background-repeat: no-repeat;
		background-position: top right;
		background-size: cover;
		background-image: url(<?=$url;?>assets/images/sliderback.png);
	}
	.slider .sliderbar {
		position: absolute;
		top: 35%;
		right: 20%;
		z-index: 1;
		width:380px;
		height: 380px;
		background-repeat: no-repeat;
		background-position: bottom right;
		background-size: contain;
		background-image: url(<?=$url;?>assets/images/sliderdaire.png);
	}
	.slider .sliderbar .bar {
		width: 30%;
		height: 110%;
		position: absolute;
		top: -5%;
		right: -5%;
	}
	.slider .sliderbar .daire {
		position: absolute;
		top: -24%;
		right: 0px;
		width: 148%;
		height: 148%;
		transform: rotate(-2deg);
		
		-webkit-transition: all .2s ease;
		-moz-transition: all .2s ease;
		-ms-transition: all .2s ease;
		-o-transition: all .2s ease;
		transition: all .2s ease;
	}
	.slider .sliderbar .nokta {
		position: absolute;
		right: 60px;
		top: 80px;
		cursor: pointer;
		width: 30px;
		height: 30px;
		background-color: #fff;
		border-radius: 50%;
	}
	.carousel {
		/*
		width: 50%;
		height: 50%;
		*/
		width: 336px;
		height: 336px;
		top: 40%;
		left: 12%;
		position: absolute !important;
	}
	.carousel .item {
		position: absolute;
		top: 0px;
		left: 0px;
		width: 100%;
		height: 100%;
		opacity: 0;
		
		-webkit-transition: all 2s ease;
		-moz-transition: all 2s ease;
		-ms-transition: all 2s ease;
		-o-transition: all 2s ease;
		transition: all 2s ease;
	}
	.carousel .item img {
		float: left;
		width: 100%;
	}
	.carousel .item.show {
		opacity:1;
	}
	.yazi {
		width:600px;
		position: absolute;
		right: 50px;
		bottom: 50px;
		font-size: 20px;
		line-height: 26px;
		color: #fff;
		z-index: 1;
	}
	.yazimobile {display: none;}
	.yazi strong {
		float: left;
		width: 100%;
		font-size: 44px;
		line-height:50px;
		padding-bottom: 10px;
	}
	#results {
		float: left;
		width: 100%;
		position: fixed;
		top: 10px;
		left: 0px;
		z-index: 1075;
		box-sizing: border-box;
		display: none;
		padding-right: 10px;
		padding-left: 10px;
	}
	.link {
		position: absolute;
		top: 50px;
		right: 50px;
		padding:10px 30px;
		background-color: transparent;
		color:#fff;
		border: 2px solid #fff;
		border-radius: 8px;
		font-weight:500;
		font-size:20px;
		line-height:24px;
		font-weight:400;
		cursor: pointer;
		z-index: 2;
		-webkit-transition: all .2s ease;
		-moz-transition: all .2s ease;
		-ms-transition: all .2s ease;
		-o-transition: all .2s ease;
		transition: all .2s ease;
	}
	.link:hover {
		color:#000;
		background-color: #fff;
	}

	.linkmobile {
		display: none;
	}
	.sidebar {
		position: absolute;
		top: 0;
		right: -110%;
		width: 600px;
		height: 100%;
		min-height: 820px;
		background-color: #F3F3F3;
		box-shadow: -2px 0 5px rgba(0,0,0,0.5);
		transition: right 0.3s;
		z-index: 1000;
		display: flex;
		flex-direction: column;
		padding-bottom: 70px;
		overflow: hidden;
	}
	.sidebar form {
		height: 100%;
	}
	.sidebar-content {
		float: left;
		width: 100%;
		height: 100%;
		position: relative;
		flex-grow: 1;
		overflow-y: auto;
	}
	.form-check-input {
		margin-top: 0px !important;
		margin-left: 0px !important;
		margin-right: 0px;
		position: absolute;
		top: 5px;
		left: 0px;
	}
	.form-check-label {
		position: relative !important;
		top: 0px !important;
		left: 0px !important;
		padding-left: 20px;
		pointer-events:all !important;
	}
	.iti {
		width: 100%;
	}
	.iti--allow-dropdown .iti__flag-container, .iti--separate-dial-code .iti__flag-container {
		left: 70px !important;
	}
	.step-header {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	.mb-5 {
		margin-bottom: 3rem !important;
	}
	h1.fw-light {
		font-size: 48px;
		font-weight: 300 !important;
	}
	.fw-light {
		font-size: 18px;
		font-weight: 400 !important;
	}
	p.fw-light {
		padding-bottom: 20px;
	}
	.fw-bold {
		font-weight: 700 !important;
	}
	.step-indicator {
		text-align: center;
		margin-bottom: 20px;
		font-size: 24px;
		font-weight: 300 !important;
	}
	.fs-1 {
		font-size: 32px !important;
	}
	.form-block .form-control {
		display: block;
		width: 100%;
		font-size: 16px;
		line-height: 20px;
		font-weight: 500;
		height: 52px;
		color: #000;
		padding:10px 10px 10px 120px !important;
		background-color: #fff;
		background-clip: padding-box;
		border: 2px solid #ced4da;
		-webkit-appearance: none;
		-moz-appearance: none;
		appearance: none;
		border-radius: 5px;
		transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
	}
	.form-control:focus {
		color: #000 !important;
		outline: none !important;
		box-shadow: none !important;
		border: 2px solid #000 !important;
	}
	.form-block {
		float: left;
		width: 100%;
		position: relative;
		margin-bottom: 15px !important;
	}
	.form-block>label {
		position: absolute;
		top: 16px;
		left: 16px;
		margin-bottom: 0px;
		font-size: 16px;
		line-height: 20px;
		pointer-events: none;
		border: 1px solid transparent;
		color: #807E7D;
	}
	.form-actions {
		position: absolute;
		bottom: 0;
		left: 0;
		width: 100%;
		background-color: #F3F3F3;
		display: flex;
		justify-content: space-between;
		padding: 10px 20px;
	}
	.ms-2 {
		margin-left: .5rem !important;
	}
	.ms-5 {
		margin-left: 3rem !important;
	}
	.help-block {
		font-size: 14px;
		line-height: 16px;
		margin-top: 3px;
		float: left;
		width: 100%;
		margin-bottom: 0px;
	}
	.has-error .form-control {
		border: 2px solid #FF1368;

	}
	.list-unstyled {
		color: #FF1368;
		margin-bottom: 0px;
		font-weight: 500;
	}
	.has-error .checkbox, .has-error .checkbox-inline, .has-error .control-label, .has-error .help-block, .has-error .radio, .has-error .radio-inline, .has-error.checkbox label, .has-error.checkbox-inline label, .has-error.radio label, .has-error.radio-inline label {
		color: #FF1368;
		font-weight: 500;
	}

	@media screen and (max-width:1380px) {
		.logo {
			top: 50px;
			left: 50px;
			width: 359px;
			height: 70px;
			z-index: 1;
		}
		.govde {
			min-height: 730px;
		}
		.link {
			top: 50px;
			right: 50px;
		}
		.slider {
			width: 580px;
			height: 580px;
		}
		.slider .sliderbar {
			top: 30%;
			right: 20%;
			width: 380px;
			height: 380px;
		}
		.carousel {
			top: 35%;
			left: 8%;
		}
		.yazi {
			width: 540px;
			right: 50px;
			bottom: 50px;
			font-size: 20px;
			line-height: 26px;
		}
		.sidebar {
			min-height: 730px;
		}
	}
	@media screen and (max-width:1199px) {
		.logo {
			top: 40px;
			left: 40px;
			width: 308px;
			height: 60px;
			z-index: 1;
		}
		.govde {
			min-height: 680px;
		}
		.link {
			top: 40px;
			right: 40px;
		}
		.slider {
			width: 540px;
			height: 540px;
		}
		.slider .sliderbar {
			top: 25%;
			right: 20%;
			width: 380px;
			height: 380px;
		}
		.carousel {
			top: 32%;
			left: 5%;
		}
		.yazi {
			width: 380px;
			right: 40px;
			bottom: 40px;
			font-size: 16px;
			line-height: 20px;
		}
		.yazi strong {
			font-size: 30px;
			line-height: 36px;
			padding-bottom: 10px;
		}
		.sidebar {
			width: 500px;
			min-height: 680px;
		}
		.sidebar.p-5 {
			padding: 2.5rem !important;
		}
	}
	@media screen and (max-width:991px) {
		body {
			height: auto;
		}
		.govde {
			min-height: auto;
		}
		.ustbar {
			position: fixed !important;
			top: 0;
			left: 0;
			width: 100%;
			z-index: 10;
			padding: 20px 30px;
			margin-top: 0;
		}
		.logo {
			top: 0px;
			left: 0px;
			width: 308px;
			height: 60px;
			z-index: 1;
			position:relative;
		}
		.link {
			top: 26px;
			right: 30px;
			position:absolute;
		}
		
		.slider {
			width: 100%;
			height: auto;
			margin-left: 0;
			background-color: #0c7b7f;
			background-image: none;
			position: relative;
			margin-top: 50%;
			-webkit-border-top-left-radius: 500px;
			-webkit-border-top-right-radius: 500px;
			-moz-border-radius-topleft: 500px;
			-moz-border-radius-topright: 500px;
			border-top-left-radius: 500px;
			border-top-right-radius: 500px;
			float: left;
			display: inline;
		}
		.slider .sliderbar {
			top: 5%;
    		right: calc(50% - 190px);
			transform: rotate(-90deg);
		}
		.carousel {
			float: left;
			top: auto;
			bottom: auto;
			right: auto;
			left: calc(50% - 168px);
			width: 336px;
			height: 336px;
			margin-top: 60px;
			position: relative !important;
		}
		.yazi {
			display: none;
		}
		.yazimobile {display: inline;}
		.yazi {
			position: relative;
			float: left;
			width: 90%;
			top: auto;
			bottom: auto;
			right: auto;
			left: 5%;
			padding: 10px 30px;
		}
		
		.sidebar {
			position: fixed;
			width: 500px;
			min-height: auto;
		}
	}
	@media screen and (max-width:767px) {
		.ustbar .logo {
			width: 256px;
			height: 50px;
		}
		.ustbar .link {
			font-size: 16px;
			top: 21px;
		}
	}
	@media screen and (max-width:575px) {
		.ustbar {
			text-align: center;
		}
		.ustbar .logo {
			float: none;
			width: 256px;
			height: 50px;
			display: inline-block;
		}
		.ustbar .link {
			display: none;
		}
		
		.linkmobile {
			float: none;
			display: inline-block;
			position: relative;
			right: auto;
			left: auto;
			top: auto;
			font-size: 16px;
			line-height: 20px;
			margin-top: 10px;
			margin-bottom: 30px;
		}
		.slider {
			margin-top: 100%;
		}
		.sidebar {
			position: fixed;
			width: 100%;
			min-height: auto;
		}
		.slider .sliderbar {
			top: 5%;
			right: calc(50% - 100px);
			transform: rotate(-90deg);
			width: 200px;
			height: 200px;
		}
		.slider .sliderbar .nokta {
			right: 20px;
			top: 50px;
			width: 24px;
			height: 24px;
		}
		.carousel {
			left: calc(50% - 120px);
			width: 240px;
			height: 240px;
			margin-top: 60px;
			position: relative !important;
		}
		.yazi {
			padding: 0px;
			font-size: 14px;
			line-height: 18px;
			font-weight: 300;
		}
		.yazi strong {
			font-size: 26px;
			line-height: 30px;
			padding-bottom: 10px;
			font-weight: 700;
		}
	}
	@media screen and (max-width:430px) {
	}
	@media screen and (max-width:389px) {
	}
</style>