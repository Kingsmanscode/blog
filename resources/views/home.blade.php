<!DOCTYPE HTML>
<html>

<head>
	<title>Kingsmans Blog</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="{{ URL::asset('assets/js/ie/html5shiv.js')}}" /></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="{{ URL::asset('assets/css/ie8.css')}}" /><![endif]-->
</head>

<body>

	<!-- Content -->
	<div id="content">
		<div class="inner">

			<!-- Post -->
			<article class="box post post-excerpt">
				<header>
					<!--
									Note: Titles and subtitles will wrap automatically when necessary, so don't worry
									if they get too long. You can also remove the <p> entirely if you don't
									need a subtitle.
								-->
					<h2><a href="#">Welcome to Our Blog</a></h2>
					<p>We are thrilled to have you here!</p>
				</header>
				<div class="info">
					<!--
									Note: The date should be formatted exactly as it's shown below. In particular, the
									"least significant" characters of the month should be encapsulated in a <span>
									element to denote what gets dropped in 1200px mode (eg. the "uary" in "January").
									Oh, and if you don't need a date for a particular page or post you can simply delete
									the entire "date" element.

								-->
					<span class="date"><span class="month">Jul<span>y</span></span> <span class="day">14</span><span class="year">, 2014</span></span>
					<!--
									Note: You can change the number of list items in "stats" to whatever you want.
								-->
					<ul class="stats">
						<li><a href="#" class="icon fa-comment">16</a></li>
						<li><a href="#" class="icon fa-heart">32</a></li>
						<li><a href="#" class="icon fa-twitter">64</a></li>
						<li><a href="#" class="icon fa-facebook">128</a></li>
					</ul>
				</div>
				<a href="#" class="image featured"><img src="{{ URL::asset('assets/images/pic01.jpg')}}" alt=""></a>
				<p>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
				</p>
				<p>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
				</p>
			</article>

			<!-- Post -->
			<article class="box post post-excerpt">
				<header>
					<h2><a href="#">Lorem ipsum dolor sit amet</a></h2>
					<p>Feugiat interdum sed commodo ipsum consequat dolor nullam metus</p>
				</header>
				<div class="info">
					<span class="date"><span class="month">Jul<span>y</span></span> <span class="day">8</span><span class="year">, 2014</span></span>
					<ul class="stats">
						<li><a href="#" class="icon fa-comment">16</a></li>
						<li><a href="#" class="icon fa-heart">32</a></li>
						<li><a href="#" class="icon fa-twitter">64</a></li>
						<li><a href="#" class="icon fa-facebook">128</a></li>
					</ul>
				</div>
				<a href="#" class="image featured"><img src="{{ URL::asset('assets/images/pic02.jpg')}}" alt=""></a>
				<p>
					Quisque vel sapien sit amet tellus elementum ultricies. Nunc vel orci turpis. Donec id malesuada metus. Nunc nulla velit, fermentum quis interdum quis, tate etiam commodo lorem ipsum dolor sit amet dolore. Quisque vel sapien sit amet tellus elementum ultricies. Nunc vel orci turpis. Donec id malesuada metus. Nunc nulla velit, fermentum quis interdum quis, convallis eu sapien. Integer sed ipsum ante.
				</p>
			</article>

			<!-- Pagination -->
			<div class="pagination">
				<!--<a href="#" class="button previous">Previous Page</a>-->
				<div class="pages">
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<span>&hellip;</span>
					<a href="#">20</a>
				</div>
				<a href="#" class="button next">Next Page</a>
			</div>

		</div>
	</div>

	<!-- Sidebar -->
	<div id="sidebar">

		<!-- Logo -->
		<h1 id="logo"><a href="#">KCoder Blog</a></h1>

		<!-- Nav -->
		<nav id="nav">
			<ul>
				<li class="current"><a href="#">Latest Post</a></li>
				<li><a href="#">Archives</a></li>
				<li><a href="#">About Me</a></li>
				<li><a href="#">Contact Me</a></li>
			</ul>
		</nav>

		<!-- Search -->
		<section class="box search">
			<form method="post" action="#">
				<input type="text" class="text" name="search" placeholder="Search" />
			</form>
		</section>

		<!-- Text -->
		<section class="box text-style1">
			<div class="inner">
				<p>
					<iframe src="https://ghbtns.com/github-btn.html?user=Kingsmanscode/&repo=blog&type=watch&count=true&v=2" frameborder="0" scrolling="0" width="170px" height="20px"></iframe>
					<iframe src="https://ghbtns.com/github-btn.html?user=Kingsmanscode&repo=blog&type=star&count=true" frameborder="0" scrolling="0" width="170px" height="20px"></iframe>
				</p>
			</div>
		</section>

		<!-- Recent Posts -->
		<section class="box recent-posts">
			<header>
				<h2>Recent Posts</h2>
			</header>
			<ul>
				<li><a href="#">Lorem ipsum dolor</a></li>
				<li><a href="#">Feugiat nisl aliquam</a></li>
				<li><a href="#">Sed dolore magna</a></li>
				<li><a href="#">Malesuada commodo</a></li>
				<li><a href="#">Ipsum metus nullam</a></li>
			</ul>
		</section>

		<!-- Recent Comments -->
		<section class="box recent-comments">
			<header>
				<h2>Recent Comments</h2>
			</header>
			<ul>
				<li>case on <a href="#">Lorem ipsum dolor</a></li>
				<li>molly on <a href="#">Sed dolore magna</a></li>
				<li>case on <a href="#">Sed dolore magna</a></li>
			</ul>
		</section>

		<!-- Calendar -->
		<section class="box calendar">
			<div class="inner">
				<table>
					<caption>July 2014</caption>
					<thead>
						<tr>
							<th scope="col" title="Monday">M</th>
							<th scope="col" title="Tuesday">T</th>
							<th scope="col" title="Wednesday">W</th>
							<th scope="col" title="Thursday">T</th>
							<th scope="col" title="Friday">F</th>
							<th scope="col" title="Saturday">S</th>
							<th scope="col" title="Sunday">S</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="4" class="pad"><span>&nbsp;</span></td>
							<td><span>1</span></td>
							<td><span>2</span></td>
							<td><span>3</span></td>
						</tr>
						<tr>
							<td><span>4</span></td>
							<td><span>5</span></td>
							<td><a href="#">6</a></td>
							<td><span>7</span></td>
							<td><span>8</span></td>
							<td><span>9</span></td>
							<td><a href="#">10</a></td>
						</tr>
						<tr>
							<td><span>11</span></td>
							<td><span>12</span></td>
							<td><span>13</span></td>
							<td class="today"><a href="#">14</a></td>
							<td><span>15</span></td>
							<td><span>16</span></td>
							<td><span>17</span></td>
						</tr>
						<tr>
							<td><span>18</span></td>
							<td><span>19</span></td>
							<td><span>20</span></td>
							<td><span>21</span></td>
							<td><span>22</span></td>
							<td><a href="#">23</a></td>
							<td><span>24</span></td>
						</tr>
						<tr>
							<td><a href="#">25</a></td>
							<td><span>26</span></td>
							<td><span>27</span></td>
							<td><span>28</span></td>
							<td class="pad" colspan="3"><span>&nbsp;</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>

		<!-- Copyright -->
		<ul id="copyright">
			<li>&copy; <a href="http://kingsmanscode.com">Kingsmans Code</a></li>

		</ul>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="{{ URL::asset('assets/js/ie/respond.min.js')}}" /></script><![endif]-->
	<script src="assets/js/main.js"></script>

</body>

</html>
