//Get P/L
function GetPL() {
    $.ajax("{{url('/dashboard/getpl').'/'.Auth::user()->id}}", {
        type: 'GET',
        success: function(response) {
            var pl = document.getElementById('p_l');

            if (response < 0) {
                $("#p_l").css("color", 'red')
            }
            if (response > 0) {
                $("#p_l").css("color", 'green')
            }

            pl.innerHTML = "{{$settings->currency}}" + response;
        }
    });
}