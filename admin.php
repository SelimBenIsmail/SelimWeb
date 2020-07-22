
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="flex1">
        <?php
            if (isset($_POST['pwd']) AND $_POST['pwd'] ==  "kangourou"){
        ?>
        <aside >
            <div class="photo" id="photo_aside" style="background-image:url(images/about.jpg)">
                <!-- <img src="images/about.jpg" alt="photo de Selim Ben Ismail" style="display:none"> -->
            </div>
        </aside>
    
        <div class="flex3"> 
                <section id="helloAdmin">
                    <h2>Hello Selim !</h2>
                    <p>You have successfully authentified </p>   
                </section>
                <section>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Quibusdam id eos at laudantium temporibus iusto, 
                        unde blanditiis provident quo, sint nulla 
                        facere consectetur aperiam ex architecto tenetur fuga quos rem!
                    </p>
                </section>
        </div class="flex3">
        <?php
            }
            else{
                echo '<p> Acces denied !</p>';
            }
        ?>
    </div class="flex1">
</body>
</html>