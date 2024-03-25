    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/datatable.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
    <script src="assets/js/pay.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/delete.js"></script>
    <script src="assets/js/view.js"></script>
    <script src="assets/js/switcher.js"></script>
   

    <script>
        const btn = document.querySelector(".button");

        btn.classList.add("button--loading");
        btn.classList.remove("button--loading");
    </script>

    <script>
        new DataTable('#subscription');
    </script>

    <?php
        if (isset($_SESSION['bookking_error_message']))
        {
    ?>
        <script>
            Swal.fire({
                text: "<?php echo $_SESSION['bookking_error_message']; ?>",
                icon: "error",
                showCancelButton: false,
                showConfirmButton: true,
                confirmButtonText: 'Subscribe Now',
                confirmButtonColor: '#FF3366',
                timer: 4000
            }).then(function() {
                    window.location = "./subscription";
                });
        </script>
    <?php
            unset($_SESSION['bookking_error_message']);
        }
    ?>

</body>

</html>