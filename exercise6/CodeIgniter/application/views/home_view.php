<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>Welcome to my first CodeIgniter application.</title>

<style type="text/css">
   html { 
  background: url(lastpic.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

div.container {
    width: 100%;
    border: 1px solid black;
	color: white;
	text-align: center;
	clear: center;
	font-size:large;
}

footer {
	padding: 0.3em;
    color: white;
    background-img: lastpic.jpg;
    clear: left;
    text-align: center;
    font-family: french script mt;
	font-size: 150%;
 }
 
header {
    padding: 0.3em;
    color: white;
    background-img: lastpic.jpg;
    clear: left;
    text-align: center;
    font-family: french script mt;
	font-size: 150%;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 6em;
}

nav ul {
    list-style-type: none;
    padding: 1em;
	clear: left;
}
			
nav ul a {
    text-decoration: none;	
}

article {
    margin-left: 170px;
    border-left: 1px gray;
    padding: 1em;
    overflow: hidden
	font-size: large
	background-color: beige;
	font-family: comic sans ms;
}

div.form {
 padding: 70px 0;
    border: 3px solid green;
}

</style>

</head>

<body>

<div id="container">
    <h1>Welcome to First CodeIgniter Application.</h1>
    <div id="body">
        <div class="gallery">
            <ul>
            <?php if(!empty($images)): foreach($images as $img): ?>
               <li><img src="uploads/<?php echo $img['image']; ?>" alt=""></li>
            <?php endforeach; endif; ?>
            </ul>
        </div>
    </div>
</div>
<div class="container">

<header>
   <h1>Shierene Cervantes &#9825;</h1>
</header>
  
<nav>
  <ul>
    <li><a href="#">&#9829</a></li>
    <img src="pic.jpg" alt="Mountain View" style="width:230px;height:300px;">
  </ul>
</nav>

<article>
<div class="container2"> 
  <h1>Shierene &#9752</h1>
  <p>A bookworm whose favorite nocturnal hobby is reading.</p>
  <p> I am Shierene Cervantes, called Shie by my close friends, whom you cannot really know well without spending some time to get along with. Whenever I ask my friends what their first impressions to me were, they say either I do not look someone you could easily approach, an extremely girly person who only make friends to others in the same level as I am, a person who is so conscious about her appearance, and someone who gets easily annoyed. When people start to know who I am, most of them say that I am a sweet and very reserved girl who is lady-like in every way. </p>
  <p>However, there is more to me than just that. Unbelievable to some, my close friends know that once you get to really know me, your first impression would definitely change into a new perspective that is quite the opposite as your first. According to them, I am really a girly girl who has something you never thought I have to show off once I get really close to a person, and they are probably referring to my childlike attitude whenever I am with people I am comfortable with. They also say that I can easily get along with different kinds of people for I do not really choose the people I want to be friends with.
</p>
<p>Reading books, playing the piano, listening to really good music, seeing little children happy, shopping after a very stressful midterm or final week at school, getting high grades and making my parents proud are some of the things that can really make me happy. I have read a lot of books that inspired me in a lot of different ways and I find reading books really an interesting way to take you places you have never been.
</p>
<p>I am rarely impressed but eternally fascinated by everything. I know that it seems a bit absurd, but most people find me quite difficult to impress, and perhaps that is because my family always reminds to always strive to be the best even when I think I am already good enough. Nevertheless, I believe that everything God created is wonderful and worth appreciating.</p>
  <p>Hello, you!</p>
  <hr>
</div>
<div>
<div>

<h1>Some facts about me &#9786</h1>
						
<p id="hobbyr">What is my favorite hobby?</p>
	<button type="button" onclick="document.getElementById('hobbyr').innerHTML = 'Reading has always been and will forever be my favorite hobby.'">Fave Hobby</button>
<p id="gp">What is my guilty pleasure?</p>
	<button type="button" onclick="document.getElementById('gp').innerHTML = 'Definitely Chocolates.'">Guilty Pleasure...</button>
<p id="pup">What is the name of my first puppy?</p>
	<button type="button" onclick="document.getElementById('pup').innerHTML = 'Toby. &#9829'">First Pup!</button>
<p id="cd">What is my childhood dream?</p>
	<button type="button" onclick="document.getElementById('cd').innerHTML = 'To be a chemist.'">Childhood Dream</button>
<p id="plan">What do I want to be in the future?</p>
	<button type="button" onclick="document.getElementById('plan').innerHTML = 'To be an accomplished person doing what I love and not settling for less.'">Ultimate Goal &#9829</button>
	<p></p>
	<hr>
</div>

</div>
<div class="container">

<a href="https://www.facebook.com/">
  <img src="fb.png" style="width:42px;height:42px;border:0;"> 
</a> 

<a href="https://twitter.com/">
  <img src="twitter.png" style="width:50px;height:42px;border:0;"> 
</a> 

<a href="https://www.instagram.com/">
  <img src="insta.png" style="width:42px;height:42px;border:0;"> 
</a>

<div class="container2"> 


</div>
<footer>My flesh and my heart may fail, but God is the strength of my heart and my portion forever. </footer>
</div>
</div>

</body>
</html>