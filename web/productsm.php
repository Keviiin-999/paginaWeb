<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumes Dossier</title>
    <link rel="stylesheet" href="stylesm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="top-banner">
            <span>¡Obtén hasta un 20% de descuento! <a href="#">Ver detalles</a></span>
            <span>¡Estás a 3 productos de recibir un 10% menos + ENVÍO GRATIS!</span>
            <span>La oferta termina en <span id="countdown">00h:59m:49s</span></span>
        </div>

    </header>

    <article class="header-second">
            <nav>
                <ul>
                    <li><a href="../index.php">INICIO</a></li>
                    <li><a href="#">SOBRE NOSOTROS</a></li>
                    <li><a href="contacto.php">CONTACTO</a>
                    <li><a href="products.php">PERFUMES DE HOMBRE</a>
                </ul>
            </nav>

            <div class="user-actions">
                <a href="register.php" id="login-b">Iniciar Sesión</a>
                <div class="cart">
                    <a href="web/cart.php"><i class="fa-solid fa-cart-shopping"></i></a>

                    <span id="cart-count">0</span>

                </div>


                </div>
    </article>
    <main>
        <section class="bestsellers">
            <h2>Colección de fragrances</h2>
            <div class="product-list">
                <div class="product">
                    <img src="../img/pm/coco.png" alt="Woody Sandalwood">
                    <div class="product-details">
                        <h3>CHANEL COCO MADEMOISELLE</h3>
                        <p> Eau de parfum intense 100ml</p>
                        <p class="price">MX$3,400 <span>(Precio Minorista: $3,200)</span></p>
                        <br>
                        <button class="btn add-to-cart" data-product="CHANEL COCO MADEMOISELLE" data-price="3,400">AGREGAR AL CARRITO</button>
                    </div>
                </div>
                <div class="product">
                    <img src="../img/pm/bc.png" alt="Woody Sandalwood">
                    <div class="product-details">
                        <h3>VERSACE BRIGHT CRYSTALS</h3>
                        <p>Eau de toilette 90ml</p>
                        <p class="price">MX$2,700 <span>(Precio Minorista: $2,480)</span></p>
                        <br>
                        <button class="btn add-to-cart" data-product="VERSACE BRIGHT CRYSTALS " data-price="2,700">AGREGAR AL CARRITO</button>
                    </div>
                </div>
                                <div class="product">
                    <img src="../img/pm/ch.png" alt="Woody Sandalwood">
                    <div class="product-details">
                        <h3>CAROLINA HERRERA GOOD GIRL</h3>
                        <p>Eau de parfum 80ml</p>
                        <p class="price">MX$2,250 <span>(Precio Minorista: $2,050)</span></p>
                        <br>
                        <button class="btn add-to-cart" data-product="CAROLINA HERRERA GOOD GIRL" data-price="2,250">AGREGAR AL CARRITO</button>
                    </div>
                </div>

                <div class="product">
                    <img src="../img/pm/ckm.png" alt="Woody Sandalwood">
                    <div class="product-details">
                        <h3>CALVIN KLEIN WOMEN
                            <br></h3>
                        <p>Eau de parfum 100ml</p>
                        <p class="price">MX$1,800 <span>(Precio Minorista: $1,620)</span></p>
                        <br>
                        <br>
                        <button class="btn add-to-cart" data-product="CALVIN KLEIN WOMEN" data-price="1,800">AGREGAR AL CARRITO</button>
                    </div>

                </div>
                                <div class="product">
                    <img src="../img/pm/cm.png" alt="Woody Sandalwood">
                    <div class="product-details">
                        <h3>MAC CLUB DE NUIT</h3>
                        <p>Eau de parfum 100ml</p>
                        <p class="price">MX$800 <span>(Precio Minorista: $600)</span></p>
                        <br>
                        <br>
                        <br>
                        <button class="btn add-to-cart" data-product="MAC CLUB DE NUIT" data-price="800">AGREGAR AL CARRITO</button>
                    </div>
                    
                </div>
                                <div class="product">
                    <img src="../img/pm/jpd.png" alt="Woody Sandalwood">
                    <div class="product-details">
                        <h3>JEAN PAUL GAULTIER DIVINE </h3>
                        <p>Eau de parfum 100ml</p>
                        <p class="price">MX$3,220 <span>(Precio Minorista: $3,000)</span></p>
                        <br>

                        <button class="btn add-to-cart" data-product="JEAN PAUL GAULTIER DIVINE" data-price="3,220">AGREGAR AL CARRITO</button>
                    </div>
                    
                </div>
                                <div class="product">
                    <img src="../img/pm/lv.png" alt="Woody Sandalwood">
                    <div class="product-details">
                        <h3>LANCOME LA VIE EST BELLE</h3>
                        <p>Eau de parfum 100ml</p>
                        <p class="price">MX$2,540 <span>(Precio Minorista: $2,300)</span></p>
                        <br>
                        <button class="btn add-to-cart" data-product="LANCOMELA VIE EST BELLE" data-price="2,540">AGREGAR AL CARRITO</button>
                    </div>
                    
                </div>
                                <div class="product">
                    <img src="../img/pm/std.png" alt="Woody Sandalwood">
                    <div class="product-details">
                        <h3>BECAUSE ITS YOU </h3>
                        <p>Eau de parfum 100ml</p>
                        <p class="price">MX$2,920 <span>(Precio Minorista: $2,700)</span></p>
                        <br>
                        <br>
                        <button class="btn add-to-cart" data-product="BECAUSE ITS YOU" data-price="2,920">AGREGAR AL CARRITO</button>
                    </div>
                    
                </div>
                                <div class="product">
                    <img src="../img/pm/ms.png" alt="Woody Sandalwood">
                    <div class="product-details">
                        <h3>MISS DIOR</h3>
                        <p>Eau de parfum 100ml</p>
                        <p class="price">MX$3,400 <span>(Precio Minorista: $3,100)</span></p>
                        <br>
                        <br>
                        <button class="btn add-to-cart" data-product="MISS DIOR" data-price="3,400">AGREGAR AL CARRITO</button>
                    </div>
                    
                </div>
                                <div class="product">
                    <img src="../img/pm/va.png" alt="Woody Sandalwood">
                    <div class="product-details">
                        <h3>VALENTINO BORN IN ROMA</h3>
                        <p>Eau de parfum 100ml</p>
                        <p class="price">MX$3,200 <span>(Precio Minorista: $2,900)</span></p>
                        <br>
                        <button class="btn add-to-cart" data-product="VALENTINO BORN IN ROMA" data-price="3,200">AGREGAR AL CARRITO</button>
                    </div>
                    
                </div>
                                <div class="product">
                    <img src="../img/pm/do.png" alt="Woody Sandalwood">
                    <div class="product-details">
                        <h3>DOLCE Y GABBANA THE ONLY ONE</h3>
                        <p>Eau de parfum 100ml</p>
                        <p class="price">MX$3,100 <span>(Precio Minorista: $2,800)</span></p>
                        <br>
                        <button class="btn add-to-cart" data-product="DOLCE Y GABBANA THE ONLY ONE" data-price="3,100">AGREGAR AL CARRITO</button>
                    </div>
                    
                </div>
                                <div class="product">
                    <img src="../img/pm/sm.png" alt="Ambery Saffron">
                    <div class="product-details">
                        <h3>JEAN PAUL GAULTIER SCANDAL</h3>
                        <p>Eau de parfum 8Oml</p>
                        <p class="price">MX$1,750 <span>(Precio Minorista: $1,550)</span></p>
                        <br>
                        <button class="btn add-to-cart" data-product="JEAN PAUL GAULTIER SCANDAL" data-price="1,750">AGREGAR AL CARRITO</button>
                    </div>
                    
                </div>
                                <div class="product">
                    <img src="../img/pm/stm.png" alt="Ambery Saffron">
                    <div class="product-details">
                        <h3>IN LOVE WHIT YOU</h3>
                        <p>Eau de parfum 100ml</p>
                        <p class="price">MX$2,900 <span>(Precio Minorista: $2,500)</span></p>
                        <br>
                        <br>
                        <button class="btn add-to-cart" data-product="IN LOVE WHIT YOU" data-price="2,900">AGREGAR AL CARRITO</button>
                    </div>
                    
                </div>
                                <div class="product">
                    <img src="../img/pm/jpr.png" alt="Ambery Saffron">
                    <div class="product-details">
                        <h3>JEAN PAUL GAULTIER LA BELLE LE PERFUM</h3>
                        <p>Eau de parfum 100ml</p>
                        <p class="price">MX$3,020 <span>(Precio Minorista: $2,700)</span></p>
                        <br>
                        <button class="btn add-to-cart" data-product="JEAN PAUL GAULTIER LA BELLE LE PERFUM" data-price="3,020">AGREGAR AL CARRITO</button>
                    </div>
                    
                </div>
                                <div class="product">

                    <img src="../img/li.png" alt="Ambery Saffron">
                    <div class="product-details">
                        <h3>YVES SAINT LAURENT LIBRE</h3>
                        <p>90ML EDP Spray Women</p>
                        <p class="price">MX$2,600 <span>(Precio Minorista: $2,480)</span></p>
                        <br>
                        <button class="btn add-to-cart" data-product="YVES SAINT LAURENT LIBRE" data-price="2,600">AGREGAR AL CARRITO</button>
                    </div>
                    
                </div>
                                <div class="product">
                    <img src="../img/pm/tbm.png" alt="Ambery Saffron">
                    <div class="product-details">
                        <h3>MOSCHINO TOY PARA MUJER</h3>
                        <p>Eau de toilette 100ml</p>
                        <p class="price">MX$2,100 <span>(Precio Minorista: $1,830)</span></p>
                        <br>
                        <button class="btn add-to-cart" data-product="MOSCHINO TOY" data-price="2,100">AGREGAR AL CARRITO</button>
                    </div>
                    
                </div>

            </div>
                <footer>
        <p>&copy; 2024 Perfumes de Lujo. Todos los derechos reservados.</p>
    </footer>
        </section>
    </main>
        <script src="scripts.js"></script>

</body>
</html>
