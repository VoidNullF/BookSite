<?php
/* Выводим именно с тем title который нам нужен */
include("section/head.php");
$title = 'Главная BOOK.com';
printHeader($title);

?>

<body>
    <?
    /* Отрисовка хедера */
    include("section/header.php");
    ?>
    <main>
        <section class="slider1">
        <script src="/script/slider.js"></script>    
        <!-- Slider -->
            <div class="wrapper_slider">
                <div class="viewport_slider">
                    <div class="slider">
                        <img src="/src/slider1.jpg" alt="" class="rem">
                        <img src="/src/slider2.jpg" alt="">
                        <img src="/src/slider3.jpg" alt="">
                    </div>
                    <div class="btn">
                        <div class="btn-next"></div>
                        <div class="btn-prev"></div>
                    </div>
                    <div class="nav-btn">
                        <div class="navbtnslider"></div>
                        <div class="navbtnslider"></div>
                        <div class="navbtnslider"></div>
                    </div>

                </div>
            </div>
        </section>
        <section>
            <!-- Inform -->

        </section>
        <section>
            <!-- Galery -->

        </section>
        <section>
            <!-- Form -->

        </section>
    </main>
    <footer>
        <!-- Footer -->

    </footer>
</body>

</html>