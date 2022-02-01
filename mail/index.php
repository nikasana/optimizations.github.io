<?php 
if(isset($_POST['submit'])){
    $to = "nikoloz.sanakoevi@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $last_name = $_POST['company'];
    $subject = "Form submission";
    //$subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Expanding Cards</title>
</head>

<body>

    <form  action="" method="post">
        <div class="main-containter">
            <!-- main inputs -->
            <div class="inputs-row">
                <input type="text" name="name" class="" placeholder="NAME">
                <input type="text" name="email" class="" placeholder="EMAIL">
                <input type="text" name="company" class="" placeholder="COMPANY">
                <input type="text" name="number" class="" placeholder="NUMBER">
            </div>
            <!-- everything below in puts -->
            <div class="container">
                <!-- first column -->
                <div class="left">
                    <div class="menu-item" id="blog">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/blog.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="call">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/Call button.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="contact">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/contact us.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="coupons">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/coupons.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="Delivery">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/Delivery.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="email">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/email.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="events">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/events.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="FAQ">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/FAQ.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="Hours">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/Hours.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="info">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/info.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="loyalty">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/loyalty card.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="menu">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/menu.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="music">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/music.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="News">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/News.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="pdf">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/pdf.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="people">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/people.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="pictures">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/pictures.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="POI">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/POI.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="products">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/products.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="QR">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/QR Scanner.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="radio">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/radio.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="reviews">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/reviews.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="rss">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/rss news.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="Shop_Weblink_">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/Shop_Weblink_.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="tip">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/tip.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item" id="URl">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/URl list.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                    <div class="menu-item no-border" id="videos">
                        <div class="menu-text">
                            <h1 class="feature-name">
                                Feature Name
                            </h1>
                            <p class="feature-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium facilis nobis
                                suscipit
                                accusamus

                            </p>
                        </div>
                        <div class="menu-img" draggable="true">
                            <img src="img/videos.png" alt="" class="img" draggable="false">
                        </div>
                    </div>
                </div>
                <!-- second column -->
                <div class="right">
                    <div class="mobile">
                        <div class="mobile-screen">
                            <div class="screen-inner">
                                <div class="items-list">
                                    <div class="list-item">
                                        <div class="feature-img"></div>
                                        <h3 class="feature-title">MENU FEATURE <span class="colorize">1</span></h3>
                                        <img src="img/more.png" alt="" class="more">
                                    </div>
                                    <div class="list-item">
                                        <div class="feature-img"></div>
                                        <h3 class="feature-title">MENU FEATURE <span class="colorize">2</span></h3>
                                        <img src="img/more.png" alt="" class="more">
                                    </div>
                                    <div class="list-item">
                                        <div class="feature-img"></div>
                                        <h3 class="feature-title">MENU FEATURE <span class="colorize">3</span></h3>
                                        <img src="img/more.png" alt="" class="more">
                                    </div>
                                    <div class="list-item">
                                        <div class="feature-img"></div>
                                        <h3 class="feature-title">MENU FEATURE <span class="colorize">4</span></h3>
                                        <img src="img/more.png" alt="" class="more">
                                    </div>
                                    <div class="list-item">
                                        <div class="feature-img"></div>
                                        <h3 class="feature-title">MENU FEATURE <span class="colorize">5</span></h3>
                                        <img src="img/more.png" alt="" class="more">
                                    </div>
                                    <div class="list-item">
                                        <div class="feature-img"></div>
                                        <h3 class="feature-title">MENU FEATURE <span class="colorize">6</span></h3>
                                        <img src="img/more.png" alt="" class="more">
                                    </div>
                                </div>
                                <div class="bottom-menu">
                                    <div class="bottom-menu-item-left">
                                        <div class="left-inner">

                                        </div>
                                    </div>
                                    <div class="bottom-menu-item-middle">
                                        <div class="middle-inner">

                                        </div>
                                    </div>
                                    <div class="bottom-menu-item-middle">
                                        <div class="middle-inner">

                                        </div>
                                    </div>
                                    <div class="bottom-menu-item-middle">
                                        <div class="middle-inner">

                                        </div>
                                    </div>
                                    <div class="bottom-menu-item-right">
                                        <div class="right-inner">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="botton-container">
                        <!-- <div class="button"> -->
                        <input type="submit" class="submit" value="Button">
                        <div class="hiddeninputs">
                            <input type="text" id="i1" name="input1" value="">
                            <input type="text" id="i2" name="input2" value="">
                            <input type="text" id="i3" name="input3" value="">
                            <input type="text" id="i4" name="input4" value="">
                            <input type="text" id="i5" name="input5" value="">
                            <input type="text" id="i6" name="input6" value="">
                            <input type="text" id="i7" name="input7" value="">
                            <input type="text" id="i8" name="input8" value="">
                            <input type="text" id="i9" name="input9" value="">
                            <input type="text" id="i10" name="input10" value="">
                            <input type="text" id="i11" name="input11" value="">
                        </div>

                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="script.js"></script>
</body>

</html>
