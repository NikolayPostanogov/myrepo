<!DOCTYPE html>
<HTML>
<HEAD>
<meta charset="UTF-8"/>
<TITLE>Задание №1</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
</HEAD>

<BODY>
Введите год 
<INPUT name="Year" type="text">
<BR><BR>
<button class="" id="button">Проверить високосный ли год</button>

<p class="out"></p>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).on('click', '#button', function(){
    var $data = {};
    $(document).find ('input, textearea, select').each(function() {
    $data[this.name] = $(this).val();
    });
    $.ajax({
        url: 'text.php',
        type: 'GET',
        data: $data,
        success: function(data){
            $('p.out').text(data);
        },
        error: function(){
            console.log('ERROR');
        }
    })
})
</script>

</BODY>
</HTML>