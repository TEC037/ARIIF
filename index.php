<?php


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Test</title>
</head>
<body>
    <style>
        html, body {
	margin: 0;
	padding: 0;
	font-family: "Roboto", Arial;
}
.navbar {
	width: 100%;
	padding: 5px;
	background-color: #1a1a27;
	box-sizing: border-box;
}
.navbar .contenido {
	max-width: 1024px;
	display:flex;
	justify-content: space-between;
	margin: 0 auto;
}
.bars ul {
	display: flex;
	align-items: center;
	list-style: none;
	width: 400px;
	justify-content: space-between;
	padding: 0;
	padding-left: 4px;
}
.bars ul li a {
	text-decoration: none;
	color:#a2a3b7;
	transition: 1s;
	text-transform: uppercase;
}
.bars ul li a:hover {
	text-decoration: none;
	color:white;
}
div.title {
	display: flex;
	align-items: center;
	padding-right: 4px;
}
div.title a {
	text-decoration: none;
	color: white;
}
div.title h2{
	padding: 0;
	margin: 0;
}
.bars-button {
	width: 40px;
	height: 40px;
	border-radius: 50%;
	background-color: rgba(0, 0, 0, .8);
	display: none;
	position: fixed;
	z-index: 99;
	left: 7px;
	top: 11px;
	color: #a2a3b7;
	cursor: pointer;
}
@media screen and (max-width: 768px) {
    .navbar .contenido {
	justify-content: flex-end;
}
.bars-button {
	display: flex;
	justify-content: center;
	align-items: center;
}
.bars {
	position: fixed;
	background: rgba(0, 0, 0, .5);
	z-index: 98;
	top: 0;
	left: -100vw;
	width: 100vw;
	bottom: 0;
	display: flex;
	justify-content: center;
	transition: .3s;
}
.bars.is-active {
	left: 0;
}
.bars ul {
	flex-direction: column;
	justify-content: center;
	align-items: center;
}
.bars ul li {
	padding: 5px;
}
.bars ul li a {
	color: #000;
	font-weight: 700;
	text-decoration: underline;
}
div.title h2 {
	padding: 10.5px;
}

}
    </style>
<i class="fa fa-bars bars-button" aria-hidden="true" id="bars-button"></i>
<div class="navbar">
    <div class="contenido">
        <nav class="bars">
            <ul>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Categorías</a></li>
                <li><a href="#">Sobre mi</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>

        <div class="title">
            <a href="#">
            	<h2>NAVBAR</h2>
            </a>
        </div>
    </div>
</div>
<script>
    const limit_size_screen = window.matchMedia('screen and (max-width: 768px)');
    const bars = document.querySelector('.bars');
    const barsButton = document.querySelector('#bars-button');  
    function validation(event) {
        if (event.matches) {
            barsButton.addEventListener('click', hideShow);
        } else {
            barsButton.removeEventListener('click', hideShow);
        }
    }
    function hideShow() {
        if (bars.classList.contains('is-active')) {
            bars.classList.remove('is-active');
        } else {
            bars.classList.add('is-active');
        }
    }
    validation(limit_size_screen);
</script>
</body>
</html>