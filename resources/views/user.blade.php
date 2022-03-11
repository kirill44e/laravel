<!DOCTYPE html>
<html>
<head>
	<title>Reparacion | Личный кабинет</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/user-style.css">
</head>
<body>
	
<style>
@media (min-width: 1320px) and (max-width: 2000px){
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
		width: 100%;
		background: #2C2C2C;
		height: 70px;
	}


	.menu-content {
		font-family: Raleway; 
		padding: 0 0 0 10px;
		margin-top: 22px;
	}
	.collapsible-menu {
	 	width: 20%;
	 	float: right;
	}
	.collapsible-menu ul {
		list-style-type: none;
		padding: 0;
		margin-top: 0px;
	}
	.collapsible-menu a {
		display:block;
		text-decoration: none;
		color: #FFFFFF;
	}

	.collapsible-menu li {
	 	display:block;
	 	padding: 10px;
	 	text-decoration: none;
		height: 45px;
		background: #2C2C2C;
		border-top: 2px white solid;
		font-weight: bold;
		font-size: 18px;
		line-height: 21px;
		letter-spacing: 0.1em;
		color: #FFFFFF;
		text-align: center;
		padding-top: 11px;
	}

	.collapsible-menu label {
		margin-top: 22px;
		font-family: Raleway;
		font-weight: bold;
		font-size: 22px;
		line-height: 26px;
		color: #FFFFFF;
		display: block;
		cursor: pointer;
		background: url("{{asset('images/vec.svg')}}") no-repeat right;
		margin-right: 50px;
	}
	input#menu {
	 	display: none;
	}

	.menu-content {
		max-height: 0;
		overflow: hidden;
		font-family: 'Oswald', sans-serif; 
		padding: 0 0 0 50px;
	}
	/* Эффект переключения*/
	input:checked ~ .menu-content {
	 	max-height: 100%;
	}

	p {
		font-family: Raleway;
		font-style: normal;
		font-weight: bold;
	}

	p.p1 {
		margin-top: 90px;
		font-style: normal;
		font-weight: bold;
		font-size: 25px;
		line-height: 29px;
		color: #141414;
	}

	div.content1 {
		width: 80%;	
		margin: auto;
		height: 400px;
	}

	div.div1 {
		width: 45%;
		height: 345px;
		float: left;
	}

	p.div1 {
		font-style: normal;
		font-weight: bold;
		font-size: 22px;
		line-height: 26px;
		color: #4A4A4A;
		float: left;
		width: 400px;
		margin-top: 20px;
	}

	form {
		float: left;
		height: 340px;
		width: 50%;
		margin-left: 5%;
		background: #EAEAEA;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
	}

	img.imgstr {
		float: right; 
		margin-top: 45px;
		margin-left: 50px;
	}
	
	div.imgg {
		background-image: url("{{asset('images/6.jpg')}}");
		background-size: cover;
		border-radius: 10px; width: 100%;
		height: 264px;
	}

	div.divform1 {
		width: 90%;
		height: 26px;
		margin: auto;
		margin-top: 27px;
	}

	p.form1 {
		margin: 0px;
		font-size: 22px;
		line-height: 26px;
		color: #4A4A4A;
		float: left;
	}

	.input1 {
		width: 50%;
		height: 26px;
		border: none;
		border-bottom: 2px solid #6B6B6B;
		float: right;
		background: none;
	}

	div.divform2 {
		width: 90%;
		height: 84px;
		margin: auto;
		margin-top: 35px;
	}

	p.form2 {
		font-size: 22px;
		line-height: 26px;
		color: #4A4A4A;
		float: left;
		margin: 0px;
	}

	.input2 {
		width: 70%;
		height: 84px;
		float: right;
		background: white;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		border-radius: 5px;
		border: none;
	}

	div.divform3 {
		width: 90%;
		height: 25px;
		margin: auto;
		margin-top: 35px;
	}

	select {
		background: #FFFCFC;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		float: left;
		border: none;
		width: 30%;
		height: 25px;	
	}

	p.form3 {
		width: 40%;
		font-size: 15px;
		line-height: 26px;
		color: #4A4A4A;
		float: left;
		margin: 0px;
		margin-left: 5%;
	}

	.input3 {
		width: 22%;
		height: 25px;
		float: left;
		background: white;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		margin-left: 3%;
		border: none;
		text-align: center;
	}

	p.form4 {
		width: 15%;
		font-size: 22px;
		line-height: 26px;
		color: #4A4A4A;
		float: left;
		margin: 0px;
		margin-top: 5px;
	}

	div.divform4 {
		width: 90%;
		height: 35px;
		margin: auto;
		margin-top: 35px;
	}

	.input5 {
		width: 30%;
		height: 25px;
		float: left;
		border-radius: 5px;
		background: rgba(255, 255, 255, 0.5);
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
	}

	.input6 {
		width: 40%;
		height: 35px;
		float: left;
		background: #2DB93B;
		border-radius: 10px;
		margin-left: 15%;
		border: none;
		text-align: center;
		font-family: Raleway;
		font-style: normal;
		font-weight: bold;
		font-size: 15px;
		line-height: 18px;
		color: #FFFFFF;
	}

	p.pzajavki {
		width: 80%;
		margin: auto;
		margin-top: 50px;
		font-style: normal;
		font-weight: bold;
		font-size: 25px;
		line-height: 29px;
		color: #141414;
	}

	div.content2 {
		width: 80%;
		margin: auto;
	}

	div.divv1 {
		width: 22%;
		height: 200px;
		float: left;
		margin-right: 4%;
		background: rgba(196, 196, 196, 0.3);
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		text-align: center;
		height: 500px;
		margin-top: 50px;
		margin-bottom: 50px;
	}

	div.divv2 {
		width: 22%;
		height: 500px;
		float: left;
		background: rgba(196, 196, 196, 0.3);
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		text-align: center;
		margin-top: 50px;
		margin-bottom: 50px;
	}

	div.img1 {
		width: 100%;
		height: 155px;
		background-image: url("{{asset('images/2.jpg')}}");
		background-size: cover;
	}

	p.pzajavki1 {
		font-size: 20px;
		line-height: 23px;
		color: #2C7D2A;
	}

	p.pzajavki2 {
		margin: auto;
		text-align: left;
		font-size: 20px;
		line-height: 23px;
		width: 80%;
		color: #4A4A4A;
	}

	p.pzajavki3 {
		font-size: 20px;
		line-height: 23px;
		color: #232323;
	}

	p.pzajavki4 {
		font-size: 20px;
		line-height: 23px;
		color: #4A4A4A;
	}

	p.pzajavki5 {
		font-size: 15px;
		line-height: 18px;
		color: #4A4A4A;	
		float: left;		
	}

	p.pzajavki6 {
		font-size: 15px;
		line-height: 18px;
		color: #4A4A4A;	
		float: right;	
		margin-right: 20px;
	}

	footer {
		background: #737373;
		width: 100%;
		height: 80px;
		clear: both;
		position: fixed;
		margin-bottom: 0px;
		bottom: 0px	

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

@media (min-width: 360px) and (max-width: 1320px){
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
		width: 100%;
		background: #2C2C2C;
		height: 70px;
	}


	.menu-content {
		font-family: Raleway; 
		padding: 0 0 0 10px;
		margin-top: 22px;
	}
	.collapsible-menu {
	 	width: 20%;
	 	float: right;
	}
	.collapsible-menu ul {
		list-style-type: none;
		padding: 0;
		margin-top: 0px;
	}
	.collapsible-menu a {
		display:block;
		text-decoration: none;
		color: #FFFFFF;
	}

	.collapsible-menu li {
	 	display:block;
	 	padding: 10px;
	 	text-decoration: none;
		height: 45px;
		background: #2C2C2C;
		border-top: 2px white solid;
		font-weight: bold;
		font-size: 18px;
		line-height: 21px;
		letter-spacing: 0.1em;
		color: #FFFFFF;
		text-align: center;
		padding-top: 11px;
	}

	.collapsible-menu label {
		margin-top: 22px;
		font-family: Raleway;
		font-weight: bold;
		font-size: 22px;
		line-height: 26px;
		color: #FFFFFF;
		display: block;
		cursor: pointer;
		background: url("{{asset('images/vec.svg')}}") no-repeat right;
		margin-right: 50px;
	}
	input#menu {
	 	display: none;
	}

	.menu-content {
		max-height: 0;
		overflow: hidden;
		font-family: 'Oswald', sans-serif; 
		padding: 0 0 0 50px;
	}
	/* Эффект переключения*/
	input:checked ~ .menu-content {
	 	max-height: 100%;
	}

	p {
		font-family: Raleway;
		font-style: normal;
		font-weight: bold;
	}

	p.p1 {
		margin-top: 90px;
		font-style: normal;
		font-weight: bold;
		font-size: 25px;
		line-height: 29px;
		color: #141414;
	}

	div.content1 {
		width: 80%;	
		margin: auto;
		height: 400px;
	}

	div.div1 {
		width: 45%;
		height: 345px;
		float: left;
	}

	p.div1 {
		font-style: normal;
		font-weight: bold;
		font-size: 22px;
		line-height: 26px;
		color: #4A4A4A;
		float: left;
		width: 400px;
		margin-top: 20px;
	}

	img.imgstr {
		display: block;
		display: none;
	}

	form {
		float: left;
		height: 340px;
		width: 50%;
		margin-left: 5%;
		background: #EAEAEA;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
	}

	div.imgg {
		background-image: url("{{asset('images/6.jpg')}}");
		background-size: cover;
		border-radius: 10px; width: 100%;
		height: 264px;
	}

	div.divform1 {
		width: 90%;
		height: 26px;
		margin: auto;
		margin-top: 27px;
	}

	p.form1 {
		margin: 0px;
		font-size: 22px;
		line-height: 26px;
		color: #4A4A4A;
		float: left;
	}

	.input1 {
		width: 50%;
		height: 26px;
		border: none;
		border-bottom: 2px solid #6B6B6B;
		float: right;
		background: none;
	}

	div.divform2 {
		width: 90%;
		height: 84px;
		margin: auto;
		margin-top: 35px;
	}

	p.form2 {
		font-size: 22px;
		line-height: 26px;
		color: #4A4A4A;
		float: left;
		margin: 0px;
	}

	.input2 {
		width: 70%;
		height: 84px;
		float: right;
		background: white;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		border-radius: 5px;
		border: none;
	}

	div.divform3 {
		width: 90%;
		height: 25px;
		margin: auto;
		margin-top: 35px;
	}

	select {
		background: #FFFCFC;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		float: left;
		border: none;
		width: 30%;
		height: 25px;	
	}

	p.form3 {
		width: 40%;
		font-size: 15px;
		line-height: 26px;
		color: #4A4A4A;
		float: left;
		margin: 0px;
		margin-left: 5%;
	}

	.input3 {
		width: 22%;
		height: 25px;
		float: left;
		background: white;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		margin-left: 3%;
		border: none;
		text-align: center;
	}

	p.form4 {
		width: 15%;
		font-size: 22px;
		line-height: 26px;
		color: #4A4A4A;
		float: left;
		margin: 0px;
		margin-top: 5px;
	}

	div.divform4 {
		width: 90%;
		height: 35px;
		margin: auto;
		margin-top: 35px;
	}

	.input5 {
		width: 30%;
		height: 25px;
		float: left;
		border-radius: 5px;
		background: rgba(255, 255, 255, 0.5);
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
	}

	.input6 {
		width: 40%;
		height: 35px;
		float: left;
		background: #2DB93B;
		border-radius: 10px;
		margin-left: 15%;
		border: none;
		text-align: center;
		font-family: Raleway;
		font-style: normal;
		font-weight: bold;
		font-size: 15px;
		line-height: 18px;
		color: #FFFFFF;
	}

	p.pzajavki {
		width: 80%;
		margin: auto;
		margin-top: 50px;
		font-style: normal;
		font-weight: bold;
		font-size: 25px;
		line-height: 29px;
		color: #141414;
	}

	div.content2 {
		width: 80%;
		margin: auto;
	}

	div.divv1, div.divv2 {
		width: 25%;
		float: left;
		background: rgba(196, 196, 196, 0.3);
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		text-align: center;
		margin-top: 50px;
		margin-bottom: 50px;
		margin-right: 5%;
		height: cover;
	}

	div.img1 {
		width: 100%;
		height: 155px;
		background-image: url("{{asset('images/2.jpg')}}");
		background-size: cover;
	}

	p.pzajavki1 {
		font-size: 20px;
		line-height: 23px;
		color: #2C7D2A;
	}

	p.pzajavki2 {
		margin: auto;
		text-align: left;
		font-size: 16px;
		line-height: 23px;
		width: 80%;
		color: #4A4A4A;
	}

	p.pzajavki3 {
		font-size: 16px;
		line-height: 23px;
		color: #232323;
	}

	p.pzajavki4 {
		font-size: 16px;
		line-height: 23px;
		color: #4A4A4A;
	}

	p.pzajavki5 {
		font-size: 15px;
		line-height: 18px;
		color: #4A4A4A;	
		float: left;		
	}

	p.pzajavki6 {
		font-size: 15px;
		line-height: 18px;
		color: #4A4A4A;	
		float: right;	
		margin-right: 20px;
	}

	footer {
		background: #737373;
		width: 100%;
		height: 80px;
		clear: both;
		position: fixed;
		margin-bottom: 0px;
		bottom: 0px
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
@extends('layouts.app')

@section('content')
	</header>
	<div class="content1">
		<p class="p1">Создание новой заявки</p>
		<div class="div1">
			<div class="imgg">
			</div>
			<p class="div1">Для создания заявки заполните все необходимые поля</p>
			<img src="{{asset('images/Arrow.svg')}}" class="imgstr">
		</div>
		<form action="{{route ('zayavka') }}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="divform1">
				<p class="form1">Адрес помещения:</p>
				<input type="text" name="adres" class="input1" placeholder="Введите адрес" id="adres">
			</div>
			<div class="divform2">
				<p class="form2">Описание:</p>
				<input type="text" name="info" class="input2" placeholder="описание" id="info">
			</div>
			<div class="divform3">
				<select name="category" id="category">
				 	<option>Категория</option>
				 	<option>1</option>
				 	<option>2</option>
				</select>
				<p class="form3">Максимальная стоимость:</p>
				<input type="text" name="cost" class="input3" placeholder="50000" id="cost">
			</div>
			<div class="divform4">
				<p class="form4">Фото:</p>
				<input type="file" name="img" id="img" class="input5" >
				<input type="submit" name="" class="input6" value="Создать заявку" >
			</div>
		</form>
	</div>
	<p class="pzajavki">Созданные ранее заявки:</p>


		<div class="py-12" style="flex-direction:row;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-wrap">
            
            @foreach($data as $el)

            <div class="card" style="width: 20rem; margin:30px 30px; ">
                <img class="" src="{{ url('/').'/storage/'.$el->img }}" alt="Card image cap">
                <div class="card-body">
                    
                    <p class="card-text">{{ $el->adres }}</p>
					<p class="card-text info">{{ $el->info }}</p>
					<p class="card-text">{{ $el->category }}</p>
                    <h5 class="card-title">{{$el->cost}}</h5>
					<a href="{{route('delete', $el->id)}}"><button type="submit" class="btn btn-success mt-2">Удалить</button></a>
                    
					


                </div>  
            </div>
            @endforeach
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