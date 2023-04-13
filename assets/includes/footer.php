
    
    <!-- j Query  -->
        <!-- fixed-nav  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- javascript -->
        <!-- bootstrap  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- fixed-nav  -->
        <script>
            $(window).scroll(function(){
                if ($(this).scrollTop() > 900) {
                $('.dynamic').addClass('fixed-nav');
                } else {
                $('.dynamic').removeClass('fixed-nav');
                }
            });
        </script>
</body>
</html>