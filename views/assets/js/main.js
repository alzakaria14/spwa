//PURE JS jQuery

//preloader assets for loader
var preloader = '<div class="loader-div"><lottie-player src="assets/img/animation/preloader.json" background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop autoplay></lottie-player></div>';
var loader = $('#loader');
var main = $('#main');
var lineCheck = $('#line-check');

function loaderOn() {
    loader.html(preloader);
}

function loaderOff() {
    loader.html('');
}


//rupiah on span function
function toRupiah() {
    $("span[id=rupiah]").each(function () {
        var angka = $(this).text();
        var rupiah = '';
        var angkarev = angka.toString().split('').reverse().join('');
        for (var i = 0; i < angkarev.length; i++) if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
        $(this).text('Rp' + rupiah.split('', rupiah.length - 1).reverse().join(''));
    });
}

function logout() {
    document.cookie = 'id_login' + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
    document.cookie = 'token' + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
    document.cookie = 'level' + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
    Swal.fire({
        icon: 'success',
        title: 'Sukses',
        text: 'Berhasil logout!'
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        window.location.href = 'login.php';
    })

}
