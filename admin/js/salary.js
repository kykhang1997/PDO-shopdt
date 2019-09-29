$('.salary').on('click', () => {
    var giadexuat = document.getElementById('giadexuat').value;
    var giamgia = document.getElementById('giamgia').value;
    var gia = giadexuat / giamgia;
    var gia_str = fun_format(gia);
    document.getElementById('gia').value = gia;
})


function fun_format(money) {
    var mn_str = money.toString();
    var mn_arr = mn_str.split(".");
    var d_f = mn_arr[0].length % 3;
    var d_c = mn_arr[0].length / 3;
    Math.floor(d_c);
    return null;
}