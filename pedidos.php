<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<title>Sr.Miyagi - Pedido</title>
	<link rel="stylesheet" type="text/css" href="style_login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
    
    
    </style>
</head>
<body>
 

    <img class="wave" src="wave.png">
  <form class="container">
      <div class="img"><br><br>
      <img src="undraw_eating_together_tjhx.svg">
      </div>
    <div class="col-sm-12" class="login-content">
      <center>
      <h1>Sr. Miyagi - Pedidos</h1>
      <img src="../logo_transp.png" width="100px"></center>
    <div class="form-group ">
      <label for="exampleFormControlInput1">Nome</label>
      <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
    </div>
    <div class="form-group ">
      <label for="exampleFormControlInput1">Endereço</label>
      <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Endereço">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">telefone</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Telefone">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Pedido</label>
      <!-- Search form -->
<div class="md-form mt-0">
  <input class="form-control" type="text" placeholder="Search" aria-label="Item">
</div>
<Br>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>20% OFF - Frango Xadrez 400gr</option>
        <option>25% OFF - Yakisoba 600g .</option>
        <option>45% OFF - Combinado Galera (200 peças)</option>
        <option>65% OFF - Super Combo de Sushi (64 peças)</option>
        <option>30% OFF - Sunomono 200g</option>
      </select>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">R$</span>
        </div>
        <input type="text" class="form-control" aria-label="Quantia">
        <div class="input-group-append">
          <span class="input-group-text">.00</span>
        </div>
      </div>
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <input type="checkbox" aria-label="Chebox para permitir input text">&emsp;Pago
        </div> &emsp;
        <div class="input-group-text">
          <input type="checkbox" aria-label="Chebox para permitir input text">&emsp;Troco
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Observações</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="button" class="btn btn-primary" onclick="print()" class="print">Imprimir</button>
  </div>
  </form>
 
	
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript" src="main.js"></script>

</html>
