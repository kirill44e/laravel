<!DOCTYPE html>
<html>
<head>
	<title>Сайт</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <style>
		@media (min-width: 1601px) and (max-width: 2000px){
 	* {
		box-sizing: border-box;
	}

	body {
		margin: 0px;
	}
	@font-face {
		font-family:Raleway;
		src: url("fonts/Raleway-Regular.ttf");
	}

	header {
		background-image: url("{{asset('images/4.jpg')}}");
		background-size: cover;
		width: 100%;
		height: 700px;
	}

	div.header {
		background: rgba(255, 255, 255, 0.03);
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		backdrop-filter: blur(10px);
		width: 100%;
		height: 80px;
		margin: 0px;
	}

	p {
		font-family: Raleway;
	}

	p.log1 {
		margin-top: 26px;
		height: 29px;
		font-size: 25px;
		line-height: 29px;
		color: #616161;
		font-weight: bold;
		margin-right: 200px;
		float: right;
		margin-right: 54px;
	}

	div.log {
		border: 3px solid #616161;
		box-sizing: border-box;
		border-radius: 10px;
		margin: 0px;
		width: 175px;
		height: 51px;
		float: right;
		margin-right: 140px;
		margin-top: 15px;
		text-align: center;
	}

	p.log2 {	
		font-family: Raleway;
		font-style: normal;
		font-weight: bold;
		font-size: 25px;
		line-height: 29px;
		color: #FFFEFE;
		margin: 0px;
		padding-top: 11px;
	}

	p.p1 {
		width: 545px;
		font-family: Raleway;
		font-style: normal;
		font-weight: bold;
		font-size: 45px;
		line-height: 59px;
		letter-spacing: 0.12em;
		color: #6383D6;
		margin-top: 145px;
		margin-left: 160px;
	}

	div.about1 {
		width: 50%;
		height: 300px;
		float: left;
		margin-top: 50px;
	}

	div.abboutt {
		width: 85%;
		height: 300px;
		margin: auto;
		margin-top: 50px;
	}

	p.about1 {
		margin: 0px;
		font-weight: bold;
		font-size: 35px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #6383D6;
		margin-bottom: 16px;
	}

	div.block1 {
		width: 5px;
		height: 235px;
		background: #4A4A4A;
		margin: 0px;
		margin-left: 68px;
		float: left;
	}

	p.about2 {
		width: 80%;
		font-weight: bold;
		font-size: 20px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #4A4A4A;
		margin: 0px;
		float: left;
		margin-left: 25px;
	}

	p.zagolovok1 {
		text-align: center;
		margin-top: 50px;
		margin-bottom: 50px;
		font-weight: bold;
		font-size: 35px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #000000;
	}

	div.remont1 {
		width: 100%;
		height: 500px;
		background: #EFEFEF;
		box-shadow: 0px -4px 4px rgba(0, 0, 0, 0.25);
		margin-bottom: 77px;
	}

	div.remont2 {
		width: 100%;
		height: 500px;
		margin-bottom: 77px;
	}

	div.inremont {
		width: 85%;
		height: 500px;
		margin: auto;
	}

	div.inremont1 {
		margin-top: 10px;
		border-radius: 10px 10px 0px 0px;
		width: 30%;
		height: 477px;
		background-image: url("{{asset('images/5.jpg')}}");
		background-size: cover;
		float: left;
	}

	div.inremont1-remont2 {
		margin-top: 10px;
		border-radius: 10px 10px 0px 0px;
		width: 30%;
		height: 477px;
		background-image: url("{{asset('images/3.jpg')}}");
		background-size: cover;
		float: right;
	}

	div.inremont1-remont3 {
		margin-top: 10px;
		border-radius: 10px 10px 0px 0px;
		width: 30%;
		height: 477px;
		background-image: url("{{asset('images/1.jpg')}}");
		background-size: cover;
		float: left;
	}

	div.inremont11 {
		background: rgba(255, 255, 255, 0.03);
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		backdrop-filter: blur(20px);
		border-radius: 10px 10px 0px 0px;
		height: 85px;
		margin-top: 0px;
	}

	p.inremont11 {
		font-weight: bold;
		font-size: 25px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #FFFFFF;
		padding-top: 26px;
		padding-left: 14px;
		margin: 0px
	}

	div.inremont2 {
		width: 68%;
		height: 500px;
		float: left;
		margin-left: 2%;
	}

	div.inremont2-remont2 {
		width: 68%;
		height: 500px;
		float: right;
		margin-right: 2%;
	}

	p.inremont2 {
		margin-top: 10px;
		font-weight: bold;
		font-size: 25px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #000000;
		margin-bottom: 0px;
	}

	p.inremont22 {
		margin-top: 16px;
		font-weight: bold;
		font-size: 20px;
		line-height: 35px;
		letter-spacing: 0.12em;
		color: #4A4A4A;
		margin-bottom: 0px;
	}

	p.inremont23 {
		margin-top: 50px;
		font-weight: bold;
		font-size: 25px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #1A831E;
		float: left;
	}

	p.inremont24 {
		margin-top: 50px;
		font-weight: bold;
		font-size: 25px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #2E2D2D;
		float: right;
	}

	div.form {
		width: 85%;
		height: 500px;
		margin: auto;
	}

	div.form1 {
		width: 50%;
		height: 500px;
		margin: 0px;
		float: left;
		text-align: center;
	}
	div.form2 {
		width: 50%;
		height: 500px;
		margin: 0px;
		float: left;
		background-image: url("{{asset('images/7.png')}}");
		background-size: cover;
	}

	p.form1, p.form2, p.form3 {
		font-weight: bold;
		font-size: 25px;
		line-height: 43px;
		letter-spacing: 0.12em;
		color: #000000;
		margin-bottom: 0px;
	}

	p.form1 {
		margin-top: 20px;
	}

	p.form2 {
		width: 440px;
		margin: auto;
		margin-top: 31px;
	}

	p.form3 {
		width: 360px;
		margin: auto;
		margin-top: 31px;
	}

	input.input1 {
		width: 250px;
		height: 35px; 
		border: 2px solid #737373;
		box-sizing: border-box;
		filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
		border-radius: 20px; 
		margin: auto; 
		text-align: center; 
		margin-top: 20px;
	}

	input.input2 {
		width: 250px;
		height: 35px; 
		background: #737373;
		border: 2px solid #737373;
		box-sizing: border-box;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		border-radius: 20px; 
		margin: auto; 
		text-align: center; 
		font-weight: bold;
		font-size: 15px;
		line-height: 130.9%;
		text-align: center;
		letter-spacing: 0.12em;
		color: #FFFFFF; margin-top: 20px;
	}

	footer {
		background: #737373;
		width: 100%;
		height: 80px;
		margin-top: 100px;
	}

	p.footer1, p.footer2 {
		font-weight: bold;
		letter-spacing: 0.12em;
		color: #FFFFFF;
	}

	p.footer1 {
		margin-top: 25px;
		height: 30px;
		font-size: 25px;
		float: left;
		margin-left: 150px;
	}

	p.footer2 {
		font-size: 30px;
		margin-top: 25px;
		float: left;
		margin-left: 150px;
		margin-bottom: 0px;
		text-align: center;
	}
}

@media (min-width: 1308px) and (max-width: 1600px){
 	* {
		box-sizing: border-box;
	}

	body {
		margin: 0px;
	}
	@font-face {
		font-family: Raleway;
		src: url("fonts/Raleway-Regular.ttf");
	}

	header {
		background-image: url("{{asset('images/4.jpg')}}");
		background-size: cover;
		width: 100%;
		height: 700px;
	}

	div.header {
		background: rgba(255, 255, 255, 0.03);
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		backdrop-filter: blur(10px);
		width: 100%;
		height: 80px;
		margin: 0px;
	}

	p {
		font-family: Raleway;
	}

	p.log1 {
		margin-top: 26px;
		height: 29px;
		font-size: 25px;
		line-height: 29px;
		color: #616161;
		font-weight: bold;
		margin-right: 200px;
		float: right;
		margin-right: 54px;
	}

	div.log {
		border: 3px solid #616161;
		box-sizing: border-box;
		border-radius: 10px;
		margin: 0px;
		width: 175px;
		height: 51px;
		float: right;
		margin-right: 140px;
		margin-top: 15px;
		text-align: center;
	}

	p.log2 {	
		font-family: Raleway;
		font-style: normal;
		font-weight: bold;
		font-size: 25px;
		line-height: 29px;
		color: #FFFEFE;
		margin: 0px;
		padding-top: 11px;
	}

	p.p1 {
		width: 545px;
		font-family: Raleway;
		font-style: normal;
		font-weight: bold;
		font-size: 45px;
		line-height: 59px;
		letter-spacing: 0.12em;
		color: #6383D6;
		margin-top: 145px;
		margin-left: 160px;
	}

	div.about1 {
		width: 50%;
		height: 300px;
		float: left;
		margin-top: 50px;
	}

	div.abboutt {
		width: 85%;
		height: 300px;
		margin: auto;
		margin-top: 50px;
	}

	p.about1 {
		margin: 0px;
		font-weight: bold;
		font-size: 35px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #6383D6;
		margin-bottom: 16px;
	}

	div.block1 {
		width: 5px;
		height: 235px;
		background: #4A4A4A;
		margin: 0px;
		margin-left: 68px;
		float: left;
	}

	p.about2 {
		width: 60%;
		font-weight: bold;
		font-size: 20px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #4A4A4A;
		margin: 0px;
		float: left;
		margin-left: 25px;
	}

	p.zagolovok1 {
		text-align: center;
		margin-top: 50px;
		margin-bottom: 50px;
		font-weight: bold;
		font-size: 35px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #000000;
	}

	div.remont1 {
		width: 100%;
		height: 500px;
		background: #EFEFEF;
		box-shadow: 0px -4px 4px rgba(0, 0, 0, 0.25);
		margin-bottom: 77px;
	}

	div.remont2 {
		width: 100%;
		height: 500px;
		margin-bottom: 77px;
	}

	div.inremont {
		width: 85%;
		height: 500px;
		margin: auto;
	}

	div.inremont1 {
		margin-top: 10px;
		border-radius: 10px 10px 0px 0px;
		width: 30%;
		height: 477px;
		background-image: url("{{asset('images/5.jpg')}}");
		background-size: cover;
		float: left;
	}

	div.inremont1-remont2 {
		margin-top: 10px;
		border-radius: 10px 10px 0px 0px;
		width: 30%;
		height: 477px;
		background-image: url("{{asset('images/3.jpg')}}");
		background-size: cover;
		float: right;
	}

	div.inremont1-remont3 {
		margin-top: 10px;
		border-radius: 10px 10px 0px 0px;
		width: 30%;
		height: 477px;
		background-image: url("{{asset('images/1.jpg')}}");
		background-size: cover;
		float: left;
	}

	div.inremont11 {
		background: rgba(255, 255, 255, 0.03);
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		backdrop-filter: blur(20px);
		border-radius: 10px 10px 0px 0px;
		height: 85px;
		margin-top: 0px;
	}

	p.inremont11 {
		font-weight: bold;
		font-size: 25px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #FFFFFF;
		padding-top: 26px;
		padding-left: 14px;
		margin: 0px
	}

	div.inremont2 {
		width: 68%;
		height: 500px;
		float: left;
		margin-left: 2%;
	}

	div.inremont2-remont2 {
		width: 68%;
		height: 500px;
		float: right;
		margin-right: 2%;
	}

	p.inremont2 {
		margin-top: 10px;
		font-weight: bold;
		font-size: 25px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #000000;
		margin-bottom: 0px;
	}

	p.inremont22 {
		margin-top: 16px;
		font-weight: bold;
		font-size: 20px;
		line-height: 35px;
		letter-spacing: 0.12em;
		color: #4A4A4A;
		margin-bottom: 0px;
	}

	p.inremont23 {
		margin-top: 50px;
		font-weight: bold;
		font-size: 25px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #1A831E;
		float: left;
	}

	p.inremont24 {
		margin-top: 50px;
		font-weight: bold;
		font-size: 25px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #2E2D2D;
		float: right;
	}

	div.form {
		width: 85%;
		height: 500px;
		margin: auto;
	}

	div.form1 {
		width: 50%;
		height: 500px;
		margin: 0px;
		float: left;
		text-align: center;
	}
	div.form2 {
		width: 50%;
		height: 500px;
		margin: 0px;
		float: left;
		background-image: url("{{asset('images/7.png')}}");
		background-size: cover;
	}

	p.form1, p.form2, p.form3 {
		font-weight: bold;
		font-size: 25px;
		line-height: 43px;
		letter-spacing: 0.12em;
		color: #000000;
		margin-bottom: 0px;
	}

	p.form1 {
		margin-top: 20px;
	}

	p.form2 {
		width: 440px;
		margin: auto;
		margin-top: 31px;
	}

	p.form3 {
		width: 360px;
		margin: auto;
		margin-top: 31px;
	}

	input.input1 {
		width: 250px;
		height: 35px; 
		border: 2px solid #737373;
		box-sizing: border-box;
		filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
		border-radius: 20px; 
		margin: auto; 
		text-align: center; 
		margin-top: 20px;
	}

	input.input2 {
		width: 250px;
		height: 35px; 
		background: #737373;
		border: 2px solid #737373;
		box-sizing: border-box;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		border-radius: 20px; 
		margin: auto; 
		text-align: center; 
		font-weight: bold;
		font-size: 15px;
		line-height: 130.9%;
		text-align: center;
		letter-spacing: 0.12em;
		color: #FFFFFF; margin-top: 20px;
	}

	footer {
		background: #737373;
		width: 100%;
		height: 80px;
		margin-top: 100px;
	}

	p.footer1, p.footer2 {
		font-weight: bold;
		letter-spacing: 0.12em;
		color: #FFFFFF;
	}

	p.footer1 {
		margin-top: 25px;
		height: 30px;
		font-size: 25px;
		float: left;
		margin-left: 150px;
	}

	p.footer2 {
		font-size: 30px;
		margin-top: 25px;
		float: left;
		margin-left: 150px;
		margin-bottom: 0px;
		text-align: center;
	}
}

@media (min-width: 360px) and (max-width: 1307px){
 	* {
		box-sizing: border-box;
	}

	body {
		margin: 0px;
	}
	@font-face {
		font-family: Raleway;
		src: url("fonts/Raleway-Regular.ttf");
	}

	header {
		background-image: url("{{asset('images/4.jpg')}}");
		background-size: cover;
		width: 100%;
		height: 700px;
	}

	div.header {
		background: rgba(255, 255, 255, 0.03);
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		backdrop-filter: blur(10px);
		width: 100%;
		height: 80px;
		margin: 0px;
	}

	p {
		font-family: Raleway;
	}

	p.log1 {
		margin-top: 26px;
		height: 29px;
		font-size: 25px;
		line-height: 29px;
		color: #616161;
		font-weight: bold;
		margin-right: 200px;
		float: right;
		margin-right: 54px;
	}

	div.log {
		border: 3px solid #616161;
		box-sizing: border-box;
		border-radius: 10px;
		margin: 0px;
		width: 175px;
		height: 51px;
		float: right;
		margin-right: 140px;
		margin-top: 15px;
		text-align: center;
	}

	p.log2 {	
		font-family: Raleway;
		font-style: normal;
		font-weight: bold;
		font-size: 25px;
		line-height: 29px;
		color: #FFFEFE;
		margin: 0px;
		padding-top: 11px;
	}

	p.p1 {
		width: 545px;
		font-family: Raleway;
		font-style: normal;
		font-weight: bold;
		font-size: 45px;
		line-height: 59px;
		letter-spacing: 0.12em;
		color: #6383D6;
		margin-top: 145px;
		margin-left: 160px;
	}

	div.about1 {
		width: 50%;
		height: 300px;
		float: left;
		margin-top: 50px;
	}

	div.abboutt {
		width: 85%;
		height: 1050px;
		margin: auto;
		margin-top: 50px;
	}

	p.about1 {
		margin: 0px;
		font-weight: bold;
		font-size: 25px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #6383D6;
		margin-bottom: 16px;
	}

	div.block1 {
		width: 2px;
		height: 190px;
		background: #4A4A4A;
		margin: 0px;
		margin-left: 68px;
		float: left;
	}

	img.img11 {
		width: 50px;
		height: 50px;
		float: left;
		margin-top: 20%; 
	}

	p.about2 {
		width: 60%;
		font-weight: bold;
		font-size: 15px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #4A4A4A;
		margin: 0px;
		float: left;
		margin-left: 25px;
	}

	p.zagolovok1 {
		text-align: center;
		margin-top: 50px;
		margin-bottom: 50px;
		font-weight: bold;
		font-size: 35px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #000000;
	}

	div.remont1 {
		width: 100%;
		height: 500px;
		background: #EFEFEF;
		box-shadow: 0px -4px 4px rgba(0, 0, 0, 0.25);
		margin-bottom: 77px;
	}

	div.remont2 {
		width: 100%;
		height: 500px;
		margin-bottom: 77px;
	}

	div.inremont {
		width: 85%;
		height: 500px;
		margin: auto;
	}

	div.inremont1 {
		margin-top: 10px;
		border-radius: 10px 10px 0px 0px;
		width: 30%;
		height: 477px;
		background-image: url("{{asset('images/5.jpg')}}");
		background-size: cover;
		float: left;
	}

	div.inremont1-remont2 {
		margin-top: 10px;
		border-radius: 10px 10px 0px 0px;
		width: 30%;
		height: 477px;
		background-image: url("{{asset('images/3.jpg')}}");
		background-size: cover;
		float: right;
	}

	div.inremont1-remont3 {
		margin-top: 10px;
		border-radius: 10px 10px 0px 0px;
		width: 30%;
		height: 477px;
		background-image: url("{{asset('images/1.jpg')}}");
		background-size: cover;
		float: left;
	}

	div.inremont11 {
		background: rgba(255, 255, 255, 0.03);
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		backdrop-filter: blur(20px);
		border-radius: 10px 10px 0px 0px;
		height: 85px;
		margin-top: 0px;
	}

	p.inremont11 {
		font-weight: bold;
		font-size: 25px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #FFFFFF;
		padding-top: 26px;
		padding-left: 14px;
		margin: 0px
	}

	div.inremont2 {
		width: 68%;
		height: 500px;
		float: left;
		margin-left: 2%;
	}

	div.inremont2-remont2 {
		width: 68%;
		height: 500px;
		float: right;
		margin-right: 2%;
	}

	p.inremont2 {
		margin-top: 10px;
		font-weight: bold;
		font-size: 25px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #000000;
		margin-bottom: 0px;
	}

	p.inremont22 {
		margin-top: 16px;
		font-weight: bold;
		font-size: 15px;
		line-height: 35px;
		letter-spacing: 0.12em;
		color: #4A4A4A;
		margin-bottom: 0px;
	}

	p.inremont23 {
		margin-top: 50px;
		font-weight: bold;
		font-size: 25px;
		line-height: 130.9%;
		letter-spacing: 0.12em;
		color: #1A831E;
		float: left;
	}

	div.form {
		width: 85%;
		height: 500px;
		margin: auto;
	}

	div.form1 {
		width: 50%;
		height: 500px;
		margin: 0px;
		float: left;
		text-align: center;
	}
	div.form2 {
		width: 50%;
		height: 500px;
		margin: 0px;
		float: left;
		background-image: url("{{asset('images/7.png')}}");
		background-size: cover;
	}

	p.form1, p.form2, p.form3 {
		font-weight: bold;
		font-size: 20px;
		line-height: 43px;
		letter-spacing: 0.12em;
		color: #000000;
		margin-bottom: 0px;
	}

	p.form1 {
		margin-top: 20px;
	}

	p.form2 {
		width: 100%;
		margin: auto;
		margin-top: 31px;
	}

	p.form3 {
		width: 360px;
		margin: auto;
		margin-top: 31px;
	}

	input.input1 {
		width: 250px;
		height: 35px; 
		border: 2px solid #737373;
		box-sizing: border-box;
		filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
		border-radius: 20px; 
		margin: auto; 
		text-align: center; 
		margin-top: 20px;
	}

	input.input2 {
		width: 250px;
		height: 35px; 
		background: #737373;
		border: 2px solid #737373;
		box-sizing: border-box;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		border-radius: 20px; 
		margin: auto; 
		text-align: center; 
		font-weight: bold;
		font-size: 15px;
		line-height: 130.9%;
		text-align: center;
		letter-spacing: 0.12em;
		color: #FFFFFF; margin-top: 20px;
	}

	footer {
		background: #737373;
		width: 100%;
		height: 80px;
		margin-top: 100px;
	}

	p.footer1, p.footer2 {
		font-weight: bold;
		letter-spacing: 0.12em;
		color: #FFFFFF;
	}

	p.footer1 {
		margin-top: 20px;
		height: 30px;
		font-size: 25px;
		float: left;
		margin-left: 50px;
	}

	p.footer2 {
		font-size: 25px;
		margin-top: 25px;
		float: left;
		margin-left: 50px;
		margin-bottom: 0px;
		text-align: center;
	}
}







        
    </style>
	<header> 
	@extends('layouts.app')

	@section('content')
		</div>
		<p class="p1">«Reparacion» - 
			<font style="color: white; font-size: 42px;">воплощаем ваши 
				мечты об уютной квартире 
				в реальность
			</font></p>
	</header>

	<div class="abboutt">
		<div class="about1">
			<p class="about1">О компании:</p>
			<div class="block1"></div>
			<p class="about2">Компания «Reparacion» выполняет косметический, улучшенный и высококачественный ремонт квартир, домов, комнат, административных и коммерческих помещений в Ижевске под ключ по выгодным ценам. </p>
			<img src="{{asset('images/home.svg')}}" class="img11">
		</div>
		<div class="about1" style="
		float: right; width: 50%;
		height: 300px;">
			<p class="about1" style="
		text-align: right;">Почему выбирают нас?</p>
			<div class="block1" style="
		float: right;"></div>
			<p class="about2" style="
		float: right;">Планируя ремонт квартиры или дома, отдают предпочтение опытным специалистам и проверенным строительным материалам. С каждым клиентом компании мы выстраиваем максимально доверительные отношения.</p>
			<img src="{{asset('images/foto.svg')}}" class="img11" style="
		float: right;">
		</div>
		<div class="about1">
			<p class="about1">Преимущество №1</p>
			<div class="block1"></div>
			<p class="about2"> Каждый работник нашей компании своевременно повышает свою квалификацию. Это значит, что во время работы с нами вы не встретитесь с некачественным исполнением ремонта. </p>
			<img src="{{asset('images/img1.svg')}}" class="img11">
		</div>
		<div class="about1" style="
		float: right; width: 50%;
		height: 300px;">
			<p class="about1" style="
		text-align: right;">Преимущество №2</p>
			<div class="block1" style="
		float: right;"></div>
			<p class="about2" style="
		float: right;">Многие думают, что заказывать ремонт у профессионалов - это очень дорого, поэтому большинство отказываются от такого удобства. Но в нашей компании вы убедитесь, что цены меньше, чем у конкурентов.</p>
			<img src="{{asset('images/img2.svg')}}" class="img11" style="
		float: right;">
		</div>
		<div class="about1">
			<p class="about1">Преимущество №3</p>
			<div class="block1"></div>
			<p class="about2">К каждому клиенту мы подходим с полной самоотдачей и стараемся сделать дизайн макимально привлекательным и уникальным. Благодаря этому ваша квартира будет выглядеть новой и весьма преображенной. </p>
			<img src="{{asset('images/img3.svg')}}" class="img11">
		</div>
		<div class="about1" style="
		float: right; width: 50%;
		height: 300px;">
			<p class="about1" style="
		text-align: right;">Преимущество №4</p>
			<div class="block1" style="
		float: right;"></div>
			<p class="about2" style="
		float: right;">В работе мы используем только сертифицированные материалы у лучших производителей. Теперь вам не нужно будет переживать за качество. Также материалы поставляемые нам материалы проходят проверку на экологичность.</p>
			<img src="{{asset('images/img4.svg')}}" class="img11" style="
		float: right;">
		</div>
	</div>

	<p class="zagolovok1">Виды ремонта</p>
	<div class="remont1">
		<div class="inremont">
			<div class="inremont1">
				<div class="inremont11">
					<p class="inremont11">Косметический</p>
				</div>
			</div>
			<div class="inremont2">
				<p class="inremont2">Что входит в ремонт:</p>
				<p class="inremont22">- Демонтаж старых обоев со стен, расчистка стен, потолков от старой краски, частичный ремонт, штукатурка стен <br>
- Оклейка стен обоями, покраска потолков, стен<br>
- Замена чистового покрытия пола: ламината, ковролина, линолеума без замены чернового пола<br>
- Кладка кафельной плитки на полу в санузле, покраска стен<br>
- Замена электрических точек, розеток, выключателей, без замены эл. проводки и стаканов<br>
- Монтаж сантехнических приборов, без замены труб<br>
- Покраска дверных блоков</p>
				<p class="inremont23">Стоимость: от 50 000 р.</p>
			</div>
		</div>
	</div>

	<div class="remont2">
		<div class="inremont">
			<div class="inremont1-remont2">
				<div class="inremont11">
					<p class="inremont11">Капитальный</p>
				</div>
			</div>
			<div class="inremont2-remont2">
				<p class="inremont2">Что входит в ремонт:</p>
				<p class="inremont22">- Демонтаж старых обоев со стен, расчистка стен, потолков от старой краски, частичный ремонт, штукатурка стен <br>
- Оклейка стен обоями, покраска потолков, стен<br>
- Замена чистового покрытия пола: ламината, ковролина, линолеума без замены чернового пола<br>
- Кладка кафельной плитки на полу в санузле, покраска стен<br>
- Замена электрических точек, розеток, выключателей, без замены эл. проводки и стаканов<br>
- Монтаж сантехнических приборов, без замены труб<br>
- Покраска дверных блоков</p>
				<p class="inremont23">Стоимость: от 250 000 р.</p>
			</div>
		</div>
	</div>

	<div class="remont1">
		<div class="inremont">
			<div class="inremont1-remont3">
				<div class="inremont11">
					<p class="inremont11">Эксклюзивный</p>
				</div>
			</div>
			<div class="inremont2">
				<p class="inremont2">Что входит в ремонт:</p>
				<p class="inremont22">- Демонтаж старых обоев со стен, расчистка стен, потолков от старой краски, частичный ремонт, штукатурка стен <br>
- Оклейка стен обоями, покраска потолков, стен<br>
- Замена чистового покрытия пола: ламината, ковролина, линолеума без замены чернового пола<br>
- Кладка кафельной плитки на полу в санузле, покраска стен<br>
- Замена электрических точек, розеток, выключателей, без замены эл. проводки и стаканов<br>
- Монтаж сантехнических приборов, без замены труб<br>
- Покраска дверных блоков</p>
				<p class="inremont23">Стоимость: от 350 000 р.</p>
			</div>
		</div>
	</div>
	<div class="form">
		<div class="form1">
			<p class="form1">Наши контакты:</p>
			<p class="form2">E-mail: reparacion@gmail.com<br>
Телефон: +7(912)-912-12-13<br>
Наш адрес: г. Ижевск, ул. Ленина 152</p>
			<p class="form3">Для заказа звонка заполните поля ниже:</p>
			<form>
				<input type="tel" name="" placeholder="+7-912-888-88-88" class="input1"> <br>
				<input type="submit" name="" value="Позвонить мне" class="input2">
			</form>
		</div>
		<div class="form2">
		</div>
	</div>

	<footer>
		<p class="footer1">www.reparacion.ru</p>
		<p class="footer2">+7(912)-912-12-13</p>
		<img src="{{asset('images/vk.png')}}" style="float: right; margin-top: 16px; margin-right: 20px;">
		<img src="{{asset('images/inst.png')}}" style="float: right; margin-top: 16px; margin-right: 20px;">
		<img src="{{asset('images/twit.png')}}" style="float: right; margin-top: 16px; margin-right: 20px;">
		<img src="{{asset('images/face.png')}}" style="float: right; margin-top: 16px; margin-right: 20px;">
	</footer>
</body>
</html>
@endsection