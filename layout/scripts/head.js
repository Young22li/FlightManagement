<script>
function init()
{
	dhtml();
}
function dhtml()
{
	const div=
	`
		<div class="wrapper col1">
		  <div id="header">
			<div id="logo">
			  <h1>Flight Control System</a></h1></br>
			  <h1>iKun Funs Team</h1>
			</div>
			<div id="topnav">
				<ul>
				<li><a href="index.html">Index</a></li>
				<li>
					<a href="products.html">Table</a>
					<ul>
						<li><a href="product1.html">Flight</a></li>
						<li><a href="product2.html">Carrier</a></li>
						<li><a href="product3.html">Air</a></li>
					</ul>
				</li>
				<li>
					<a href="products.html">Insert</a>
					<ul>
						<li><a href="product1.html">Flight</a></li>
						<li><a href="product2.html">Carrier</a></li>
						<li><a href="product3.html">Air</a></li>
					</ul>
				</li>
				<li>
					<a href="products.html">Update</a>
					<ul>
						<li><a href="product1.html">Flight</a></li>
						<li><a href="product2.html">Carrier</a></li>
						<li><a href="product3.html">Air</a></li>
					</ul>
				</li>
				<li>
					<a href="products.html">Delete</a>
					<ul>
						<li><a href="product1.html">Flight</a></li>
						<li><a href="product2.html">Carrier</a></li>
						<li><a href="product3.html">Air</a></li>
					</ul>
				</li>
				<li class="last"><a href="aboutus.html">About Us</a></li>
			  </ul>
			</div>
			<br class="clear" />
		  </div>
		</div>
	`;
	box.innerHTML=div;
}
window.addEventListener("load",init,false);
</script>