    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/datatable.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
    <script src="assets/js/pay.js"></script>
    <script src="assets/js/pay-customized.js"></script>
    <script src="assets/js/pay-coaching.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/delete.js"></script>
    <script src="assets/js/view.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/660807b3a0c6737bd1267a8e/1hq7ls5s0';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script>
        //Greet User
        var time = new Date().getHours();
        if (time < 4) {
            xgreeting = "You should be in bed 🙄!";
        } else if (time < 12) {
            xgreeting = "Good morning 🌤"; //wash your hands
        } else if (time < 16) {
            xgreeting = "It's lunch 🍛 time "; //what's on the menu!
        } else {
            xgreeting = "Good Evening 🌙 "; //how was your day?
        }
        document.getElementById("greet").innerHTML = xgreeting;
    </script>


    <script>
        const btn = document.querySelector(".button");

        btn.classList.add("button--loading");
        btn.classList.remove("button--loading");
    </script>

    <script>
        new DataTable('#subscription');
    </script>

    <?php
    if (isset($_SESSION['sub_error_message'])) {
    ?>
        <script>
            Swal.fire({
                text: "<?php echo $_SESSION['sub_error_message']; ?>",
                icon: "error",
                showCancelButton: false,
                showConfirmButton: true,
                confirmButtonText: 'Upgrade Now',
                confirmButtonColor: '#FF3366',
                timer: 6000
            }).then(function() {
                window.location = "./subscription";
            });
        </script>
    <?php
        unset($_SESSION['sub_error_message']);
    }
    ?>

    </body>

    </html>