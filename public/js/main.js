$(function() {

    $('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});

let lineChartData = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
        {
            label: "My First dataset",
            backgroundColor: 'rgb(230, 255, 0, 0.2)',
            pointHoverBorderColor: 'rgb(255, 238, 0)',
            data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
            label: "My Second dataset",
            backgroundColor: 'rgb(0, 255, 68, 0.2)',
            pointHoverBorderColor: 'rgb(38, 255, 0)',
            data: [28, 48, 40, 19, 86, 27, 90]
        }
    ]

};

let cline = document.getElementById("cline").getContext("2d");
new Chart(cline, {
    type: 'line',
    data: lineChartData,
    options: {
        responsive: true
    }
});


let pdata = {
    datasets: [{
        data: [
            200,
            500,
            300,
        ],
        backgroundColor: [
            'rgb(247, 69, 72)',
            'rgb(69, 191, 189)',
            'rgb(94, 211, 90)',
        ],
        hoverBackgroundColor: [
            'rgb(255, 92, 95)',
            'rgb(90, 211, 209)',
            'rgb(90, 211, 110)'
        ],
        label: 'Dataset 1'
    }],
    labels: [
        "Red",
        "Blue",
        "Green"
    ],
};

let cpie = document.getElementById("cpie").getContext("2d");
new Chart(cpie, {
    type: 'pie',
    data: pdata,
    options: {
        responsive: true
    }
});

let ddata = {
    datasets: [{
        data: [
            200,
            500,
            300,
        ],
        backgroundColor: [
            'rgb(247, 69, 72)',
            'rgb(69, 191, 189)',
            'rgb(94, 211, 90)',
        ],
        hoverBackgroundColor: [
            'rgb(255, 92, 95)',
            'rgb(90, 211, 209)',
            'rgb(90, 211, 110)'
        ],
        label: 'Dataset 1'
    }],
    labels: [
        "Red",
        "Blue",
        "Green"
    ],
};

let cdonut = document.getElementById("cdonut").getContext("2d");
new Chart(cdonut, {
    type: 'doughnut',
    data: ddata,
    options: {
        responsive: true
    }
});

let bdata = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
        {
            backgroundColor: "rgba(220,220,220,0.5)",
            borderColor: "rgba(220,220,220,0.8)",
            hoverBackgroundColor: "rgba(220,220,220,0.75)",
            hoverBorderColor: "rgba(220,220,220,1)",
            data: [130, 160, 95, 205, 170, 135, 200],
            label: 'One'
        },
        {
            backgroundColor: "rgba(151,187,205,0.5)",
            borderColor: "rgba(151,187,205,0.8)",
            hoverBackgroundColor: "rgba(151,187,205,0.75)",
            hoverBorderColor: "rgba(151,187,205,1)",
            data: [85, 90, 160, 145, 180, 130, 195],
            label: 'Two'
        },

    ]

};

let cbar = document.getElementById("cbar").getContext("2d");
new Chart(cbar, {
    type: 'bar',
    data: bdata,
    options: {
        responsive: true
    }
});
