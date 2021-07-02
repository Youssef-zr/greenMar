    <footer class="main-footer">
      <div class="pull-right hidden-xs" style="margin-left:15px">
        <b>اصدار</b> 0.1
        
        </div>
        جميع الحقوق محفوظة 
        <strong class="text-info" style="margin-right: 5px"> 
          Green Maroc
          {{ date('Y')}} 
        </strong>
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
{{-- {!! Html::script('adminlte/bower_components/jquery/dist/jquery.min.js') !!} --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
{!! Html::script('adminlte/dist/js/adminlte.min.js') !!}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- {!! Html::script('adminlte/dist/js/pages/dashboard2.js') !!} --}}
<!-- AdminLTE for demo purposes -->
{!! Html::script('adminlte/dist/js/demo.js') !!}

{{-- select 2 script --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
    $(function(){
        // preview image when the file is changed
        $(".avatar").on("change", function() {
            $parent = $(this).parents('.parent');
            if (this.files && this.files[0]) {
                var $reader = new FileReader();
                $reader.onload = function($e) {
                    $preview = $parent.next('div').children().find('img');
                    $preview.attr("src", $e.target.result);
                };
            }
            $reader.readAsDataURL(this.files[0]);
        });

        // init select2 plugin
        setTimeout(() => {
          $('[name="example_length"]').select2();
          $('.select2-container').animate({
            margin:"0 8px"
          },500)
        }, 100);
    })
</script>


{{--  stack used to handled the fire code raning   --}}
@stack('js')

</body>
</html>