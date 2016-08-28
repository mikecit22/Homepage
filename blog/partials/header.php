	<title>Citro's Blog</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Citro Systems Blog Posting" />
	<meta name="keywords" content="michael citro, citro blog, blog posting" />
	<meta name="author" content="Michael Citro" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="lib/semantic/semantic.min.css">

	<style type="text/css">
		@font-face {
			font-family: thinfont;
			src: url("fonts/thinfont.otf") format("opentype");
		}

		/*PHONE*/
		@media (min-width: 200px) {
			p{
				font-size: 20px;
				font-weight: 600;
			}
			.ui.grid.body{
				text-align: center;
			}
			.forum-post{
				width: 85% !important;
				left: 7.5%;
				position: relative;
			}
			.posts, .introduction{
				font-size: 13px;
			}
			.html5.icon{
				font-size: 30px !important;
			}
			.postset-header{
				font-weight: normal; 
				font-size: 20px;  
				padding: 1px;
			}
		}
		/*TABLET*/
		@media (min-width: 768px) {
			p{
				font-size: 25px;
				font-weight: 400;
			}
			.ui.grid.body{
				max-width: 700px;
				margin-left: calc((100% - 700px)/2);
				text-align: left;
			}

		}
		/*DESKTOP*/
		@media (min-width: 1100px) {
			p{
				font-size: 28px;
				font-weight: 400;
			}
			.menu.sticky a{
				font-size: 20px;
			}
		}
		p{
			font-family: thinfont;
		    letter-spacing: .01rem;
		    font-style: normal;
		    line-height: 1.58;
		    letter-spacing: -.003em;
		    color: rgba(0,0,0,1);
		}
		.intro-header{
		    font-size: 40px !important;
		    margin-top: 25px !important;
		}

		.item.overright:before{
			content: none !important;
		}
	</style>