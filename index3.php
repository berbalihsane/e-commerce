<!DOCTYPE html>
<html>
<head>
	<title>leave comment</title>
</head>
<style type="text/css">
	header{
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(ad.jpg);
	height: 100vh;
	background-size: cover;
	background-position: center;
}
fieldset { 
        background: none ;  
        border:10px solid black; 
        margin-bottom:10px; width: 320px;
    }
</style>
<body>
	<header>
		<h1> Leave Your Comment </h1>
		<form>
			<fieldset>
    <legend> Your comment</legend>
    <label for="fullname">Name: </label>
    <br></br>
    <input type="text" name="fullname" placeholder="Your Full Name" required> <br>
    <br></br>
    <label for="age">Age: </label>
    <br></br>
    <input type="number" name="age" value="18" required> <br>
    <br></br>
    <label for="address">comment:</label>
    <br></br>
    <textarea name="address"></textarea><br>
</fieldset>
		</form>
		<button style="border-radius:10px";>send</button>
		<a href="index.php"><button style="border-radius:10px";>home</button></a>
	</header>
</body>
</html>