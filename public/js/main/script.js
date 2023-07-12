$('.owl-automation').owlCarousel({
    rtl:true,
    loop:true,
    margin:5,
    nav:false,
    dots: true,
    navText: ["<span class='fas fa-chevron-right'></span>","<span class='fas fa-chevron-left'></span>"],
    autoplay: true,
    autoplayTimeout: 10000,
    autoplaySpeed:5000,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:4,
            dots: true,
            nav: false
        },
        1000:{
            items:7,
            dots: false,
            nav: true
        }
    }
});
$('.owl-honors').owlCarousel({
    rtl:true,
    loop:true,
    navText: ["<span class='fas fa-chevron-right'></span>","<span class='fas fa-chevron-left'></span>"],
    margin:10,
    dots: true,
    autoplay: false,
    autoplayTimeout: 15000,
    autoplaySpeed:3000,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3,
            dots: true,
            nav: false
        },
        1000:{
            items:4,
            dots: false,
            nav: true
        }
    }
});

$('.owl-advantages').owlCarousel({
    rtl:true,
    loop:true,
    navText: ["<span class='fas fa-chevron-right'></span>","<span class='fas fa-chevron-left'></span>"],
    margin:10,
    dots: true,
    autoplay: false,
    autoplayTimeout: 15000,
    autoplaySpeed:3000,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2,
            dots: true,
            nav: false
        },
        1000:{
            items:3,
            dots: false,
            nav: true
        }
    }
});
$('.owl-suppliers').owlCarousel({
    rtl:true,
    loop:true,
    margin:5,
    nav:false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplaySpeed:5000,
    responsive:{
        0:{
            items:4
        },
        600:{
            items:4
        },
        1000:{
            items:6
        }
    }
});

$('.owl-work-samples').owlCarousel({
    rtl:true,
    loop:true,
    margin:5,
    nav:false,
    dots: true,
    navText: ["<span class='fas fa-chevron-right'></span>","<span class='fas fa-chevron-left'></span>"],
    autoplay: true,
    autoplayTimeout: 10000,
    autoplaySpeed:5000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2,
            dots: true,
            nav: false
        },
        1000:{
            items:3,
            dots: false,
            nav: true
        }
    }
});


let chrt1 = document.getElementById("graph1");
let graph1 = new Chart(chrt1, {
    type: 'bar',
    data: {
        labels: ["82", " 87", "90", "95", "99", "1400","1402"],
        datasets: [{
            label: "تعداد مشتریان شرکت ایران تکنولوژی",
            data: [20, 100, 300, 350, 410, 500,630],
            backgroundColor: ['#850707', '#850707', '#850707', '#850707', '#850707', '#850707'],
            borderColor: ['red', 'blue', 'fuchsia', 'green', 'navy', 'black'],
            pointRadius: 50,
        }],
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false,
                labels: {
                    // This more specific font property overrides the global property
                    font: {
                        size: 16,
                        family: "yekanbakhBold",
                    },
                }
            },
            tooltip:{
                titleFont:{
                    family: "yekanbakhBold",
                },
                bodyFont:{
                    family: "yekanbakhBold",
                }
            },
            customCanvasBackgroundColor: {
                color: 'red',
            }
        }
    },
});



let chrt2 = document.getElementById("graph2");
let graph2 = new Chart(chrt2, {
    type: 'line',
    data: {
        labels: ["82", " 87", "90", "95", "99", "1400","1402"],
        datasets: [{
            label: "تامین کنندگان شرکت ایران تکنولوژی",
            data: [20, 24, 30, 50, 75, 80,110,120],
            // backgroundColor: ['#850707', '#850707', '#850707', '#850707', '#850707', '#850707'],
            // borderColor: ['red', 'blue', 'fuchsia', 'green', 'navy', 'black'],
            pointRadius: 5,
            fill: false,
            lineTension: 0,
            backgroundColor: "#850707",
            borderColor: "#850707",
        }],
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false,
                labels: {
                    // This more specific font property overrides the global property
                    font: {
                        size: 16,
                        family: "yekanbakhBold",
                    },
                }
            },
            tooltip:{
                titleFont:{
                    family: "yekanbakhBold",
                },
                bodyFont:{
                    family: "yekanbakhBold",
                }
            },
            customCanvasBackgroundColor: {
                color: 'red',
            }
        }
    },
});

let chrt3 = document.getElementById("graph3");
let graph3 = new Chart(chrt3, {
    type: 'bar',
    data: {
        labels: ["82", " 87", "90", "95", "99", "1400","1402"],
        datasets: [{
            label: "تعداد مشتریان شرکت ایران تکنولوژی",
            data: [1000, 2500, 10000, 15000, 25000, 40000,41000],
            backgroundColor: ['#850707', '#850707', '#850707', '#850707', '#850707', '#850707'],
            borderColor: ['red', 'blue', 'fuchsia', 'green', 'navy', 'black'],
            pointRadius: 50,
        }],
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false,
                labels: {
                    // This more specific font property overrides the global property
                    font: {
                        size: 16,
                        family: "yekanbakhBold",
                    },
                }
            },
            tooltip:{
                titleFont:{
                    family: "yekanbakhBold",
                },
                bodyFont:{
                    family: "yekanbakhBold",
                }
            },
            customCanvasBackgroundColor: {
                color: 'red',
            }
        }
    },
});

let chrt4 = document.getElementById("graph4");
let graph4 = new Chart(chrt4, {
    type: 'line',
    data: {
        labels: ["آلمان", " عراق", "دبی", "قطر", "سوریه", "هلند","ترکیه"],
        datasets: [{
            label: "تعداد مشتریان شرکت ایران تکنولوژی",
            data: [20, 15, 12, 20, 3, 28,19],
            // backgroundColor: ['#850707', '#850707', '#850707', '#850707', '#850707', '#850707'],
            // borderColor: ['red', 'blue', 'fuchsia', 'green', 'navy', 'black'],
            pointRadius: 5,
            fill: false,
            lineTension: 0,
            backgroundColor: "#850707",
            borderColor: "#850707",
        }],
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false,
                labels: {
                    // This more specific font property overrides the global property
                    font: {
                        size: 16,
                        family: "yekanbakhBold",
                    },
                }
            },
            tooltip:{
                titleFont:{
                    family: "yekanbakhBold",
                },
                bodyFont:{
                    family: "yekanbakhBold",
                }
            },
            customCanvasBackgroundColor: {
                color: 'red',
            }
        }
    },
});

let chrt5 = document.getElementById("graph5");
let graph5 = new Chart(chrt5, {
    type: 'line',
    data: {
        labels: ["طراحی سایت", " اتوماسیون حسابداری", "طراحی سایت آژانس مسافرتی", "طراحی سایت هتل", "باشگاه مسافران", "طراحی سایت این کامینگ","رزواسیون آنلاین هتل","وب سرویس پرواز داخلی","وب سرویس پرواز خارجی","طراحی وب سرویس آمادئوس","وب سرویس بیمه","وب سرویس اتوبوس","وب سرویس هتل داخلی و خارجی","وب سرویس قطار","وب سرویس گشت و ترانسفر","وب سرویس سپهر و چارتر 724","رزرواسیون آنلاین تور","رزرواسیون آنلاین ویزا","رزرواسیون آنلاین تفریحات"],
        datasets: [{
            label: "تعداد مشتریان شرکت ایران تکنولوژی",
            data: [20, 15, 12, 20, 3, 28,19],
            // backgroundColor: ['#850707', '#850707', '#850707', '#850707', '#850707', '#850707'],
            // borderColor: ['red', 'blue', 'fuchsia', 'green', 'navy', 'black'],
            // pointRadius: 50,
            pointRadius: 5,
            fill: false,
            lineTension: 0,
            backgroundColor: "#850707",
            borderColor: "#850707",
            font: {
                size: 16,
                family: "yekanbakhBold",
            },
        }],
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false,
                labels: {
                    // This more specific font property overrides the global property
                    font: {
                        size: 16,
                        family: "yekanbakhBold",
                    },
                }
            },
            tooltip:{
                titleFont:{
                    family: "yekanbakhBold",
                },
                bodyFont:{
                    family: "yekanbakhBold",
                }
            },
        },
    },
});





function openCity(evt, cityName) {
    let i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}