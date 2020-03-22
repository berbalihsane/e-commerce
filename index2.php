<?php
session_start();
if(!isset($_SESSION['panier']))
	$_SESSION['panier'] = [];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Vente</title>
	<link rel="stylesheet" href="css2/swiper.min.css">
	<link rel="stylesheet" href="css2/style2.css">
	<script>
		function add(id){
			var qte = document.getElementById('prod_' + id ) value;
			location.href = "add.php?id=" + id + "&qte=" + qte;
		}
	</script>

</head>
<body>
	<div class="heading">
		<h1>R I N G S</h1>
	</div>
	<div class="swiper-container">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
      	<div class="slider-box">
		<p class="time">New</p>
		<div class="img-box">
			<img src="aa.png">
		</div>
		<p class="detail">
			<a href="#" class="price">Price-40$</a>
		</p>
		<div class="cart">
			<a href="#">1</a>
		</div>

	</div>
      </div>
      
      <div class="swiper-slide">
      	<div class="slider-box">
		<p class="time">New</p>
		<div class="img-box">
			<img src="rr.png">
		</div>
		<p class="detail">
			<a href="#" class="price">Price-40$</a>
		</p>
		<div class="cart">
			<a href="#">2</a>
		</div>

	</div>
      </div>


      <div class="swiper-slide">
      	<div class="slider-box">
		<p class="time">New</p>
		<div class="img-box">
			<img src="ss.png">
		</div>
		<p class="detail">
			<a href="#" class="price">Price-40$</a>
		</p>
		<div class="cart">
			<a href="#">3</a>
		</div>

	</div>
      </div>


      <div class="swiper-slide">
      	<div class="slider-box">
		<p class="time">New</p>
		<div class="img-box">
			<img src="tt.png">
		</div>
		<p class="detail">
			<a href="#" class="price">Price-40$</a>
		</p>
		<div class="cart">
			<a href="#">4</a>
		</div>

	</div>
      </div>


      <div class="swiper-slide">
      	<div class="slider-box">
		<p class="time">New</p>
		<div class="img-box">
			<img src="dd.png">
		</div>
		<p class="detail">
			<a href="#" class="price">Price-40$</a>
		</p>
		<div class="cart">
			<a href="#">5</a>
		</div>

	</div>
      </div>

    </div>
  </div>


<div class="heading">
	<h1>N E C K L A C E S</h1>
</div>
  <div class="swiper-container">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
      	<div class="slider-box">
		<p class="time">New</p>
		<div class="img-box">
			<img src="aaaa.png">
		</div>
		<p class="detail">
			<a href="#" class="price">Price-40$</a>
		</p>
		<div class="cart">
			<a href="#">6</a>
		</div>

	</div>
      </div>
      
      <div class="swiper-slide">
      	<div class="slider-box">
		<p class="time">New</p>
		<div class="img-box">
			<img src="bbbb.png">
		</div>
		<p class="detail">
			<a href="#" class="price">Price-40$</a>
		</p>
		<div class="cart">
			<a href="#">7</a>
		</div>

	</div>
      </div>


      <div class="swiper-slide">
      	<div class="slider-box">
		<p class="time">New</p>
		<div class="img-box">
			<img src="ffff.png">
		</div>
		<p class="detail">
			<a href="#" class="price">Price-40$</a>
		</p>
		<div class="cart">
			<a href="#">8</a>
		</div>

	</div>
      </div>


      <div class="swiper-slide">
      	<div class="slider-box">
		<p class="time">New</p>
		<div class="img-box">
			<img src="dddd.png">
		</div>
		<p class="detail">
			<a href="#" class="price">Price-40$</a>
		</p>
		<div class="cart">
			<a href="#">9</a>
		</div>

	</div>
      </div>


      <div class="swiper-slide">
      	<div class="slider-box">
		<p class="time">New</p>
		<div class="img-box">
			<img src="eeee.png">
		</div>
		<p class="detail">
			<a href="#" class="price">Price-40$</a>
		</p>
		<div class="cart">
			<a href="#">10</a>
		</div>

	</div>
      </div>

    </div>
  </div>




<div class="heading">
	<h1>W A T C H E S</h1>
</div>
  <div class="swiper-container">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
      	<div class="slider-box">
		<p class="time">New</p>
		<div class="img-box">
			<img src="kkkk.png">
		</div>
		<p class="detail">
			<a href="#" class="price">Price-40$</a>
		</p>
		<div class="cart">
			<a href="#">11</a>
		</div>

	</div>
      </div>
      
      <div class="swiper-slide">
      	<div class="slider-box">
		<p class="time">New</p>
		<div class="img-box">
			<img src="llll.png">
		</div>
		<p class="detail">
			<a href="#" class="price">Price-40$</a>
		</p>
		<div class="cart">
			<a href="#">12</a>
		</div>

	</div>
      </div>


      <div class="swiper-slide">
      	<div class="slider-box">
		<p class="time">New</p>
		<div class="img-box">
			<img src="mmmm.png">
		</div>
		<p class="detail">
			<a href="#" class="price">Price-40$</a>
		</p>
		<div class="cart">
			<a href="#">13</a>
		</div>

	</div>
      </div>


      <div class="swiper-slide">
      	<div class="slider-box">
		<p class="time">New</p>
		<div class="img-box">
			<img src="nnnn.png">
		</div>
		<p class="detail">
			<a href="#" class="price">Price-40$</a>
		</p>
		<div class="cart">
			<a href="#">14</a>
		</div>

	</div>
      </div>


      <div class="swiper-slide">
      	<div class="slider-box">
		<p class="time">New</p>
		<div class="img-box">
			<img src="oooo.png">
		</div>
		<p class="detail">
			<a href="#" class="price">Price-40$</a>
		</p>
		<div class="cart">
			<a href="#">15</a>
		</div>

	</div>
      </div>

    </div>
  </div>

<h2>Shopping Cart</h2>
<table class="liste">
	<tr>
		<th>Designation</th>
		<th>Prix</th>
		<th>Quantite</th>
	</tr>
	<tr>
		<td>produit 1</td>
		<td align="right">300</td>
		<td><input type="text" id="prod_1" value="1"></td>
		<td>
			<button onclick="add(1)">Add To Cart</button>
		</td>
	</tr>
	<tr>
		<td>produit 2</td>
		<td align="right">120</td>
		<td><input type="text" id="prod_2" value="1"></td>
		<td><button onclick="add(2)">Add To Cart</button></td>
	</tr>
	<tr>
		<td>produit 3</td>
		<td align="right">200</td>
		<td><input type="text" id="prod_3" value="1"></td>
		<td><button onclick="add(3)">Add To Cart</button></td>
	</tr>
	<tr>
		<td>produit 4</td>
		<td align="right">450</td>
		<td><input type="text" id="prod_4" value="1"></td>
		<td><button onclick="add(4)">Add To Cart</button></td>
	</tr>
	<tr>
		<td>produit 5</td>
		<td align="right">325</td>
		<td><input type="text" id="prod_5" value="1"></td>
		<td><button onclick="add(5)">Add To Cart</button></td>
	</tr>


	<tr>
		<td>produit 6</td>
		<td align="right">3000</td>
		<td><input type="text" id="prod_6" value="1"></td>
		<td>
			<button onclick="add(6)">Add To Cart</button>
		</td>
	</tr>
	<tr>
		<td>produit 7</td>
		<td align="right">450</td>
		<td><input type="text" id="prod_7" value="1"></td>
		<td><button onclick="add(7)">Add To Cart</button></td>
	</tr>
	<tr>
		<td>produit 8</td>
		<td align="right">310</td>
		<td><input type="text" id="prod_8" value="1"></td>
		<td><button onclick="add(8)">Add To Cart</button></td>
	</tr>
	<tr>
		<td>produit 9</td>
		<td align="right">200</td>
		<td><input type="text" id="prod_9" value="1"></td>
		<td><button onclick="add(9)">Add To Cart</button></td>
	</tr>
	<tr>
		<td>produit 10</td>
		<td align="right">1000</td>
		<td><input type="text" id="prod_10" value="1"></td>
		<td><button onclick="add(10)">Add To Cart</button></td>
	</tr>


	<tr>
		<td>produit 11</td>
		<td align="right">1500</td>
		<td><input type="text" id="prod_11" value="1"></td>
		<td>
			<button onclick="add(11)">Add To Cart</button>
		</td>
	</tr>
	<tr>
		<td>produit 12</td>
		<td align="right">1255</td>
		<td><input type="text" id="prod_12" value="1"></td>
		<td><button onclick="add(12)">Add To Cart</button></td>
	</tr>
	<tr>
		<td>produit 13</td>
		<td align="right">1000</td>
		<td><input type="text" id="prod_13" value="1"></td>
		<td><button onclick="add(13)">Add To Cart</button></td>
	</tr>
	<tr>
		<td>produit 14</td>
		<td align="right">2200</td>
		<td><input type="text" id="prod_14" value="1"></td>
		<td><button onclick="add(14)">Add To Cart</button></td>
	</tr>
	<tr>
		<td>produit 15</td>
		<td align="right">500</td>
		<td><input type="text" id="prod_15" value="1"></td>
		<td><button onclick="add(15)">Add To Cart</button></td>
	</tr>
</table>
 <br></br>

<div>
	<a href="panier.php">Voir panier</a>
</div>

 
 <br></br>

  <a href="index.php"><button style="border-radius:10px";>home</button></a>

<br></br>


  <script type="text/javascript" src="js/swiper.min.js"></script>
	<script src="js/script.js"></script>
	
</body>
</html>