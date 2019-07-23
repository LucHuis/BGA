<?php $__env->startSection('content'); ?>
    <div class="container">
        <br>
        <form action="/rondes" method="POST">
            <?php echo csrf_field(); ?>
            <button class="btn btn-primary" id="add">+</button>
            <div class="form-group">
                <label>Hoeveel tijd?</label>
                <input class="form-control" type="time" value="<?php echo e(date("h:i:s")); ?>" id="tijd" name="tijd">
            </div>
            <br>
            <div class="input">
                <div class="form-group">
                    <div class="input-group">
                        <label class="col-md-2">Battle naam</label>
                        <label class="col-md-2">Tot hoe laat</label>
                        <label class="col-md-2">Begin tijd</label>
                        <label class="col-md-2">Player #</label>
                    </div>
                    <div class="input-group">
                        <input class="form-control col-md-2" type="text" name="ronde1" value="Ronde 1">
                        <input class="form-control col-md-2 tijdinput" type="time" name="rondetijd_1">
                        <input class="form-control col-md-2" type="time" value="<?php echo e(date("h:i:s")); ?>" name="starttijd_1">
                        <input class="form-control col-md-2 tijdinput" type="number" name="rondetijd_1">
                    </div>

                </div>
            </div>
            <input type="text" id="rounds" name="rounds" value="" hidden>
            <button type="submit" id="submit" class=" btn btn-primary">Rondes aanmaken</button>





        </form>
    </div>
    <script>


        $(document).ready(function() {


            var i = 1;


            var tijd = $('#tijd').val();
            $('.tijdinput').val(tijd);

            $('#tijd').change(function(){
                var tijd = $('#tijd').val();
                $('.tijdinput').val(tijd);
            });



            $('.input').on('click','#remove', function(event){
                i--;
                event.preventDefault();
                $(".form-group").last().remove();
                $(".input-group").last().append("<div class=\"input-group-prepend\"><button class=\"btn btn-outline-secondary\" id=\"remove\">X</button></div>");

                $('#rounds').val(i);
            });



            $("#add").click(function (event) {

                i++;

                event.preventDefault();

                $(".input-group-prepend").remove();
                $(".input").append("<div class='form-group'><div class=\"input-group\">\n" +
                    "                <label class=\"col-md-2\">Ronde naam</label>\n" +
                    "                <label class=\"col-md-2\">Rondetijd</label>\n" +
                    "                    <label class=\"col-md-2\">Starttijd</label>\n" +
                    "                    <label class=\"col-md-2\">Speler #</label>\n" +
                    "                </div><div class=\"input-group mb-3\">\n" +
                    "        <input type=\"text\" class='form-control col-md-2' name=\"ronde"+ i +"\" value=\"Ronde "+ i +"\"><input class=\"form-control col-md-2 tijdinput\" type=\"time\" name=\"rondetijd_"+ i +"\"><input class=\"form-control col-md-2\" type=\"time\" value=\"00:00:00\" name=\"starttijd_"+ i +"\">\n" +
                    "       <div class=\"input-group-prepend\"><button type=\"button\" class=\"btn btn-outline-secondary \" id=\"remove\">X</button></div></div></div>");

                $('#rounds').val(i);

                $('.tijdinput').val(tijd);
            });

        });

    </script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>