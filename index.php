<?php include_once __DIR__ . '/inc/header.php'; ?>
<?php include_once __DIR__ . '/inc/menu.php'; ?>

<body class="home">

    <?php include_once __DIR__ . '/inc/frame.php'; ?>

    <div class="container-fluid purple">
    	<div class="vcenter text-center mobile-no-pad">
	        <div class="col-xs-12">
                <audio id="aisling" src="images/aisling.wav"></audio>
                <h1 class="me">
                    <input type="button" class="pronounce" value="Aisling" onClick="Pronounce('aisling')"> Foley
                </h1>

                <h3 class="grn">a curious & empathetic product designer</h3>
	        </div>
    	</div>


        <div class="pink">
            <div class="container text-center">
                <div class="col-xs-4">
                    <img class="floater" src="images/circle.svg">
                </div>
                <div class="col-xs-4">
                    <img class="floater" src="images/polygon2.svg">
                </div>
                <div class="col-xs-4">
                    <img class="floater" src="images/triangle.svg">
                </div>
            </div>

            <div class="container-fluid">
                <div class="col-xs-2">
                    <img class="floater" src="images/triangle2.svg">
                </div>
                <div class="col-xs-2">
                    <img class="floater" src="images/polygon2.svg">
                </div>
                <div class="col-xs-2">
                    <img class="floater" src="images/triangle2.svg">
                </div>
                <div class="col-xs-2">

                </div>
                <div class="col-xs-2">
            <img class="floater" src="images/circle2.svg">
                </div>
                <div class="col-xs-2">
                    <img class="floater" src="images/polygon2.svg">
                </div>

            </div>
            <div class="container hide-xs">
                <div class="col-xs-3">
                    <img class="floater" src="images/circle2.svg">
                </div>
                <div class="col-xs-3">

                </div>
                <div class="col-xs-3">
                    <img class="floater" src="images/circle.svg">
                </div>
                <div class="col-xs-3" style="text-align:right";>
                    <img class="floater" src="images/circle2.svg">
                </div>
            </div>

            <div class="container hide-xs">
                <div class="col-xs-4 text-center">
                    <img class="floater" src="images/triangle.svg">
                </div>
                <div class="col-xs-4">
                    <img class="floater" src="images/polygon.svg">
                </div>
                <div class="col-xs-4">
                    <img class="floater" src="images/triangle.svg">
                </div>
            </div>

            <a href="../work">
                <div class="work-btn">
                    <h3 class="underline">Work</h3>
                </div>
            </a>

            <a href="../about">
                <div class="about-btn">
                    <h3 class="underline">About</h3>
                </div>
            </a>
        </div>

    </div>

<?php include_once __DIR__ . '/inc/footer.php'; ?>

</body>
</html>