<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Film Bul</title>
    <!-- Google -->
	<meta name="copyright" content="Copyright © filmbul.webtehayat.net" />
	<meta name="application-name" content="Film Bul" />
	<meta http-equiv="Copyright" content="Copyright © filmbul.webtehayat.net">
	<meta name="keywords" content="film bul, film tavsiyeleri, film tavsiyesi, film izle, film incelemesi, film inceleme">
	<meta name="author" content="Webte Hayat">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="İstediğiniz türde istediğiniz kriterlerde film tavsiyesi ve film incelemesi.">
	<meta name="abstract" content="film tavsiye programıdır.">

	<meta name="content-language" content="tr">
	<meta http-equiv="content-language" content="tr">
    <meta name="theme-color" content="#f36a4a">
	<meta name="classification" content="Film bul">
	<meta name="rating" content="General" />
	<meta name="language" content="turkish, TR" />
	<meta name="distribution" content="Global" />
	
	<meta name="googlebot" content="NOODP" />
	<meta name="robots" content="all" />
	<meta name="robots" content="follow" />
	<meta name="robots" content="index" />
	<meta name="distribution" content="global" />
	<meta name="revisit-after" content="1 Day" />
	
	<!-- Facebook --> 
	<meta property="og:title" content="Film Bul" />
	<meta property="og:type" content="article" />
	<meta property="og:image" content="images/logo.png" />
	<meta property="og:url" content="https://www.facebook.com/kenthazirbeton" />
	<meta property="og:description" content="İstediğiniz türde istediğiniz kriterlerde film tavsiyesi ve film incelemesi." />

	<!-- Twitter --> 
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Film Bul" />
	<meta name="twitter:description" content="İstediğiniz türde istediğiniz kriterlerde film tavsiyesi ve film incelemesi." />
	
    
    <!-- css -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- google font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Jura:400,300,500,600' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- navbar -->
    <nav>
        <div class="nav-wrapper">
            <a href="javascript:void(0)" class="brand-logo center"><img src="images/logo.png" width="80px" style="float:left;" alt="film tavsiyeleri"> <h1>Film Bul</h1></a>
        </div>
    </nav>
    <!-- içerik -->
    <br>
    <div class="container">
        <div class="card-panel bar center-align">
            Film arayıpta bulamayanlar istediğiniz türdeki filmi sitemizde bulun!
        </div>
        <br>
        <form action="film.php" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-panel blok tur">
                        <h3>Tür Seç</h3>
                        <br>
                        <div class="box">
                            <div>
                                <input type="checkbox" class="filled-in" name="types[]" id="action" value="action" checked />
                                <label for="action">Aksiyon</label>
                            </div>
                            <div>
                                <input type="checkbox" class="filled-in" name="types[]" id="dram" value="dram" />
                                <label for="dram">Dram</label>
                            </div>
                            <div>
                                <input type="checkbox" class="filled-in" name="types[]" id="tension" value="tension" />
                                <label for="tension">Gerilim</label>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="box">
                            <div>
                                <input type="checkbox" class="filled-in" name="types[]" id="adventure" value="adventure" />
                                <label for="adventure">Macera</label>
                            </div>
                            <div>
                                <input type="checkbox" class="filled-in" name="types[]" id="biography" value="biography" />
                                <label for="biography">Biyografi</label>
                            </div>
                            <div>
                                <input type="checkbox" class="filled-in" name="types[]" id="crime" value="crime" />
                                <label for="crime">Suç</label>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="box">
                            <div>
                                <input type="checkbox" class="filled-in" name="types[]" id="comedy" value="comedy" />
                                <label for="comedy">Komedi</label>
                            </div>
                            <div>
                                <input type="checkbox" class="filled-in" name="types[]" id="romantic" value="romantic" />
                                <label for="romantic">Romantik</label>
                            </div>
                            <div>
                                <input type="checkbox" class="filled-in" name="types[]" id="bk" value="bk" />
                                <label for="bk">Bilim Kurgu</label>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="box">
                            <div>
                                <input type="checkbox" class="filled-in" name="types[]" id="fantastic" value="fantastic" />
                                <label for="fantastic">Fantastik</label>
                            </div>
                            <div>
                                <input type="checkbox" class="filled-in" name="types[]" id="fear" value="fear" />
                                <label for="fear">Korku</label>
                            </div>
                            <div>
                                <input type="checkbox" class="filled-in" name="types[]" id="animation" value="animation" />
                                <label for="animation">Animasyon</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-panel blok">
                        <h4>Yapım Yılı</h4>
                        <br>
                        <div class="box input-field">
                            <select name="film-date" id="film-date">
                                <option value="full">Full</option>
                                <option value="1990">1990+</option>
                                <option value="2000">2000+</option>
                                <option value="2007">2007+</option>
                                <option value="2012">2012+</option>
                            </select>
                        </div>
                        <br>
                        <h4>IMDB</h4>
                        <br>
                        <div class="box input-field">
                            <select name="imdb" id="imdb">
                                <option value="full">Full</option>
                                <option value="3">+3</option>
                                <option value="5">+5</option>
                                <option value="6">+6</option>
                                <option value="7">+7</option>
                                <option value="8">+8</option>
                                <option value="9">+9</option>
                            </select>
                        </div>
                        <br>
                        <h4>Köken</h4>
                        <br>
                        <div class="box">
                            <div>
                                <input checked name="origin" type="radio" value="foreign" id="foreign" />
                                <label for="foreign">Yabancı</label>
                            </div>
                            <div>
                                <input name="origin" type="radio" value="local" id="local" />
                                <label for="local">Yerli</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn-large waves-effect waves-light" type="submit">film bul</button>
            <br><br>
            <a href="#modal1" class="btn-large waves-effect waves-light modal-trigger">Rastgele Film ver</a>
        </form>
    </div>
    
    <!-- Modal content -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <h3>Sessiz Tepe (Silent Hill)</h3>
            <p>Quisque suscipit lobortis lacus et scelerisque. Fusce vehicula ut urna ut interdum. Sed odio turpis, tempus at mi ornare, gravida facilisis ipsum. Vivamus imperdiet quis sem non commodo. Vivamus fermentum finibus leo, et faucibus dolor fringilla in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae odio fermentum, vestibulum libero nec, placerat elit. </p>
            <div class="box center-align" style="font-weight:bold">
                <div>IMDB <br> 9</div>
                <div>Yıl <br> 2005</div>
                <div>Ülke <br> ABD</div>
            </div>
            <br>
            <iframe style="width:100%; height:350px" src="https://www.youtube.com/embed/WWMGZe6iucw" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Kapat</a>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $('select').material_select();
        $('.modal-trigger').leanModal();
    </script>
</body>

</html>