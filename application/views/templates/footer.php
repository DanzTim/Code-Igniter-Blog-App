        </div>
        <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
        <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    </body>
    <script type="text/javascript">
        $(document).on('click', 'ul.navbar-nav li.nav-item', function() {
            $("ul.navbar-nav li").removeClass("active");
            $(this).addClass("active");
        });

        CKEDITOR.replace( 'editor' );
    </script>
</html>