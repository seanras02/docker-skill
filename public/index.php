<html>
    <head>
        <title>Coole Library</title>
    </head>

    <body>
        <section class="nav">
            mijn menu
        </section>

        <section class="container">
            Elementen
        </section>

        <section>
            <?php 
            for($i=0; $i<10; $i++) {
                //iets keer 10


                //include card.php hier
                include('../source/views/card.php');
            }
            ?>
        </section>    
    </body>
</html>