<div class="footer">
    <div class="container">
        <p class="text-center p-2 footer-text">&copy; All right reserved | Developed By <a href="https://www.arifuzzamantusar.com">Arifuzzaman Tusar</a></p>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="js/jquery-3.1.1.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $(document).on('click', '.like', function() {
            var id = $(this).val();
            var $this = $(this);
            $this.toggleClass('like');
            if ($this.hasClass('like')) {
                // $this.text('Appreciate');
            } else {
                // $this.text('Appreciated');
                $this.addClass("unlike");

            }
            $.ajax({
                type: "POST",
                url: "appreciate.php",
                data: {
                    id: id,
                    like: 1,
                },
                success: function() {
                    showLike(id);
                }
            });
            // document.getElementById("like").style.color = "blue";
        });

        $(document).on('click', '.unlike', function() {
            var id = $(this).val();
            var $this = $(this);
            $this.toggleClass('unlike');
            if ($this.hasClass('unlike')) {
                // $this.text('Appreciated');

            } else {
                // $this.text('Appreciate');
                $this.addClass("like");

            }
            $.ajax({
                type: "POST",
                url: "appreciate.php",
                data: {
                    id: id,
                    like: 1,
                },
                success: function() {
                    showLike(id);
                }
            });
            // document.getElementById("unlike").style.color = "Red";
        });

    });

    function showLike(id) {
        $.ajax({
            url: 'show_like.php',
            type: 'POST',
            async: false,
            data: {
                id: id,
                showlike: 1
            },
            success: function(response) {
                $('#show_like' + id).html(response);

            }
        });
    }
</script>





<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>