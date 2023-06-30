//lazy image
function lazyImage() {
    var lazyImages = $('img[data-src]');
    lazyImages.each(function () {
        var lazyImage = $(this);
        var lazyImageObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    lazyImage.attr('src', lazyImage.data('src'));
                    lazyImage.removeClass('lazy');
                    lazyImageObserver.unobserve(lazyImage[0]);
                }
            });
        });

        lazyImageObserver.observe(lazyImage[0]);
    });
}

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

//indonesian date function
function idnDate() {
    var bulan = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    $("span[id=idn-date]").each(function() {
        var tanggal = $(this).text();
        var tanggal_arr = tanggal.split(" ");
        var date_arr = tanggal_arr[0].split("-");
        var waktu = tanggal_arr[1];
        $(this).text(date_arr[2] + "-" + bulan[date_arr[1]-1] + "-" + date_arr[0] + " " + waktu);
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

function convertPhoneNumber(phoneNumber) {
    phoneNumber = phoneNumber.replace(/\s+/g, '');
    phoneNumber = phoneNumber.replace(/-/g, '');

    if (phoneNumber.charAt(0) === '+') {
        phoneNumber = phoneNumber.substring(1);
    } else if (phoneNumber.charAt(0) === '0') {
        phoneNumber = '62' + phoneNumber.substring(1);
    }

    return phoneNumber;
}

function formatTel() {
    $('span[id=tel]').each(function () {
        let nomorTelepon = $(this).text();
        nomorTelepon = '+' + nomorTelepon;
        nomorTelepon = nomorTelepon.substring(0, 3) + ' ' + nomorTelepon.substring(3, 6) + ' ' + nomorTelepon.substring(6, 10) + ' ' + nomorTelepon.substring(10);
        $(this).text(nomorTelepon);
    });
}

function openPage(page) {
    loaderOn();
    let url = 'main/' + page + '.php';
    // alert(url);
    $.ajax({
        url: url,
        method: 'POST',
        success: function (response) {
            setTimeout(() => {
                loaderOff()
                main.html(response);
            }, 1000);
        }
    })
}

function generateUUID() {
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
        var r = Math.random() * 16 | 0,
            v = c === 'x' ? r : (r & 0x3 | 0x8);
        return v.toString(16);
    });
}

