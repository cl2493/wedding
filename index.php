<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Ngoc Huy Nguyen & Ngoc Han Ly</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<img src="images/logo.png" alt="logo" style="width: 90%; height: 90%;" />
						</div>
						<div class="content">
							<div class="inner">
								<h1>Huy & Han</h1>
								<h3>Save the date<br />
								Ghi nhớ ngày này <br />
								November 30th, 2024</h3>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#info">Info | Thông Tin</a></li>
								<li><a href="#rsvp">RSVP | Phản Hồi</a></li>
								<li><a href="#gallery">Gallery | Bảo Tàng</a></li>
								<li><a href="#contact">Travel Details | Địa Diểm</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- info -->
							<article id="info">
								<h2 class="major">Information | Thông Tin </h2>
								<span class="image main"><img src="images/unedited_white.jpg" alt=""/></span>
								<p>Xin Vui lòng đén dự tiệc chung vui cùng gia đình chúng tôi vào lúc 5 giờ chiều tại.<br />
								We request the honor of your presence at our wedding reception at 5 pm.</p>
								<h3>Legends Event Center </h3>
								<p>4240 W Camelback Rd, Phoenix, AZ 85019</p>
								<p>SỰ HIỆN DIỆN CỦA QUÝ VỊ LÀ NIỀM VINH HẠNH CHO GIA ĐÌNH CHÚNG TÔI. <br />
								Your presence will be a great honor to our families.</p>
								<img src="images/logo.png" alt="logo" style="width: 25%; height: 25%;" />
								
							</article>

						<!-- Work -->

							<article id="rsvp">
								<h2 class="major">RSVP | Phản Hồi</h2>
								<form method="post" action="submission.php">
									<div class="fields">
										<div class="field half">
											<label for="name">Name | Tên</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="phone">Phone | Điện Thoại</label>
											<input type="text" name="phone" id="phone" />
										</div>
										<div class = "field">
											<h3 for="guest">Number of Guests | Số Lượng Khách</h3>
											<label>Adults | Người Lớn</label>
											<input type="text" name="adults" id="adults" />
											<label><br />Children | Trẻ Em</label>
											<input type="text" name="children" id="children" />
										</div>
										<div class="field">
											<label for="message">Notes | Ghi Chú</label>
											<textarea name="message" id="message" rows="4"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
							</article>

						<!-- About -->
						<article id="gallery">
							<h2 class="major">Gallery | Bảo Tàng</h2>
							<!-- File Upload Form -->
							<form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
								<input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
								<input type="submit" value="Upload Image | Đăng Ảnh" name="submit">
							</form>
						
							<!-- Display Uploaded Images -->
							<div id="uploadedImages">
								<!-- Uploaded images will be displayed here -->
							</div>
						</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Travel Details | Địa Diểm</h2>
								<span class="image main"><img src="images/short_anh_huy.jpg" alt=""/></span>
								<h3>Date & Time | Ngày & Giờ</h3>
								<p>November 30th, 2024 at 5 pm. <br />
								   Ngày 30 tháng 11 năm 2024 lúc 5 giờ chiều.</p>
								<h3>Location | Địa Điểm</h3>
								<p>Legends Event Center <br />
								4240 W Camelback Rd, Phoenix, AZ 85019</p>
								<h3>Weather | Thời Tiết</h3>
								<p>Late November in Phoenix typically offers pleasant weather, perfect for an indoor wedding celebration. 
								   The days are comfortably warm with temperatures averaging in the mid-70s to low 80s Fahrenheit 
								   (around 24-28 degrees Celsius), while the evenings can be cool, dropping into the 50s Fahrenheit 
								   (around 10-15 degrees Celsius).</p>
								<p>Cuối tháng 11 tại Phoenix thường có thời tiết dễ chịu, hoàn hảo cho một buổi tiệc cưới trong nhà. 
								   Ngày thường ấm áp, với nhiệt độ trung bình dao động từ 70 đến 80 độ Fahrenheit (khoảng 24-28 độ Celsius), 
								   trong khi buổi tối có thể se lạnh, xuống dưới 50 độ Fahrenheit (khoảng 10-15 độ Celsius).</p>
								<img src="images/logo.png" alt="logo" style="width: 25%; height: 25%;" />
								
							</article>

						<!-- Elements -->
							<article id="elements">
								<h2 class="major">Elements</h2>

								<section>
									<h3 class="major">Text</h3>
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<h6>Heading Level 6</h6>
									<hr />
									<h4>Blockquote</h4>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h4>Preformatted</h4>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
								</section>

								<section>
									<h3 class="major">Lists</h3>

									<h4>Unordered</h4>
									<ul>
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Alternate</h4>
									<ul class="alt">
										<li>Dolor pulvinar etiam.</li>
										<li>Sagittis adipiscing.</li>
										<li>Felis enim feugiat.</li>
									</ul>

									<h4>Ordered</h4>
									<ol>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis viverra.</li>
										<li>Felis enim feugiat.</li>
										<li>Dolor pulvinar etiam.</li>
										<li>Etiam vel felis lorem.</li>
										<li>Felis enim et feugiat.</li>
									</ol>
									<h4>Icons</h4>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
									</ul>

									<h4>Actions</h4>
									<ul class="actions">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions stacked">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Table</h3>
									<h4>Default</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									<h4>Alternate</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</section>

								<section>
									<h3 class="major">Buttons</h3>
									<ul class="actions">
										<li><a href="#" class="button primary">Primary</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
										<li><a href="#" class="button icon solid fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button primary disabled">Disabled</span></li>
										<li><span class="button disabled">Disabled</span></li>
									</ul>
								</section>

								<section>
									<h3 class="major">Form</h3>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="demo-name">Name</label>
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
											</div>
											<div class="field half">
												<label for="demo-email">Email</label>
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
											</div>
											<div class="field">
												<label for="demo-category">Category</label>
												<select name="demo-category" id="demo-category">
													<option value="">-</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low">Low</label>
											</div>
											<div class="field half">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high">High</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-copy" name="demo-copy">
												<label for="demo-copy">Email me a copy</label>
											</div>
											<div class="field half">
												<input type="checkbox" id="demo-human" name="demo-human" checked>
												<label for="demo-human">Not a robot</label>
											</div>
											<div class="field">
												<label for="demo-message">Message</label>
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</section>

							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
