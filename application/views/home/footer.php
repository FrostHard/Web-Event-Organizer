<footer class="probootstrap-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-lg mb-4">
                        <h2 class="probootstrap-heading"><a href="#">OrganizePro</a></h2>
                    </div>
                    <div class="col-lg">
                        <div class="probootstrap-footer-widget mb-4">
                            <h2 class="probootstrap-heading-2">Company</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">About</a></li>
                                <li><a href="#" class="py-2 d-block">Jobs</a></li>
                                <li><a href="#" class="py-2 d-block">Press</a></li>
                                <li><a href="#" class="py-2 d-block">News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="probootstrap-footer-widget mb-4">
                            <h2 class="probootstrap-heading-2">Communities</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">Support</a></li>
                                <li><a href="#" class="py-2 d-block">Sharing is Caring</a></li>
                                <li><a href="#" class="py-2 d-block">Better Web</a></li>
                                <li><a href="#" class="py-2 d-block">News</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="probootstrap-footer-widget mb-4">
                    <ul class="probootstrap-footer-social list-unstyled float-md-right float-lft">
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md text-left">
                <ul class="list-unstyled footer-small-nav">
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Cookies</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="col-md text-md-right text-left">
                <p><small>&copy; OrganizePro 2019. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>


<script src="js/<?= base_url(); ?>assets/jquery-3.2.1.slim.min.js"></script>
<script src="js/<?= base_url(); ?>assets/popper.min.js"></script>
<script src="js/<?= base_url(); ?>assets/bootstrap.min.js"></script>
<script src="js/<?= base_url(); ?>assets/main.js"></script>

<script>
    (function() {
        var preload = document.getElementById("preload");
        var loading = 0;
        var id = setInterval(frame, 64);

        function frame() {
            if (loading == 100) {
                clearInterval(id);
                window.open("<?= base_url('home/index')  ?>", "_self");
            } else {
                loading = loading + 1;
                if (loading == 90) {
                    preload.style.animation = "fadeout 1s ease";
                }
            }
        }
    })();
</script>
</body>

</html>