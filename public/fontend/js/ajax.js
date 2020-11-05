$(document).ready(function(tinh) {
    $(".city").change(function() {
        var id = $(".city").val();
        $.post("moduls/dangtin/data.php", { id: id }, function(data) {
            $(".tinh").html(data);
        })
    })
})

$(document).ready(function(huyen) {
    $(".tinh").change(function() {
        var idqh = $(".tinh").val();
        $.post("moduls/dangtin/data.php", { idxa: idqh }, function(data) {
            $(".huyen").html(data);
        })
    })
})