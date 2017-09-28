
                <footer class="row aukstis100 fonas-yellow">
                    <div class="col-md-12">
                        <button id="button" type="button" name="button">Ajax</button>
                    </div>
                </footer>
        </div>
        <!-- END container -->

        <!-- js script'tai visada dedami i puslapio apacia!!!! -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- ARBA -->
        <!-- <script src="js/jquery-3.2.1.min.js"></script> -->

        <!-- mano js failas visada zemiau -->
         <script  src="./main.js" ></script>

        <script type="text/javascript">
            // This is our actual script
            $(document).ready(function(){
                $('#button').click(send());
            });

            function send() {
                console.log("labas");
                $.ajax({
                    url: this.href,
                    type: 'GET',
                    // dataType: 'html',
                    dataType: 'testuoju',
                    success: function (data) {
                        $('aside').html(data);
                    }
                });
            }
      </script>
    </body>
</html>
