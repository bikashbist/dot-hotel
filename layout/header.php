<div class="header header--bg">
    <div class="header__inner header__inner--background">
        <div class="section-container">


            <div class="header__detail">
                <div class="header__contain header__contain--flex">
                    <div class="header__thumbnail">
                        <img src="images/main-logo.png" alt="logo">
                    </div>
                    <div class="header__nav">

                        <nav>

                            <ul>

                                <li>
                                    <a href="index.php" class="nav-link"> Home</a>
                                </li>

                                <li>
                                    <a href="#menu" class="nav-link">Menu</a>
                                </li>

                                <li>
                                    <a href="#contact" class="nav-link">Contact Us</a>
                                </li>

                                <li>
                                    <a href="#order-food" class="nav-link nav-link--order">Order Food</a>
                                </li>

                            </ul>

                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-container">
        <div class="slider slider--flex">
            
            <div class="slider__inner">
                <span>Just Type Message</span>
                <h1>ONE ORDER, WE WILL PROVIDE YOU DELICIOUS FOOD </h1>
            </div>


        </div>


    </div>
</div>




<div class="hekk" id="menu">
    <h1>hello bikash</h1>

</div>

<div class="hekk" id="contact">
    <h1>hi</h1>
</div>

<script>
    $(document).ready(function () {
        // Add smooth scrolling to all links
        $("a").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
</script>