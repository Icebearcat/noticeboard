<html>
    <head>
        <title>notice</title>
    </head>
    <body>
        <form action="./notice.php" method="POST">
        <?php
            session_start();
            if(isset($_SESSION['user_id'])){
        ?>
            <form action="./signout.php" method="post">
                <div id="head">
                    <button type="submit">logout</button>
                </div>
            </form>
            
        <?php
            } else{
        ?>
            <div id="head">
                <a href="../login/login.html"><button type="button">login</button></a>
            </div>
            </form>
        <?php
             }
         ?>

            <div id="body">
                
            </div>
        </form>
    </body>
</html>