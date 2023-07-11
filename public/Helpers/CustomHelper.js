function render(props) {
    const { URL, tagID } = props;
    const ajax = $.ajax({
        url: URL,
        type: "get",
        dataType: "html",
        success: function (html) {
            $(`#${tagID}`).html(html);
        },
        error: function () {
            alert("Error");
        },
    });
    return ajax;
}

function singleDatePicker(props) {
    const { tagID, format } = props;
    $(`#${tagID}`).daterangepicker(
        {
            singleDatePicker: true,
            showDropdowns: true,
            viewMode: "years",
            minViewMode: "years",
            applyButtonClasses: "btn-info",
            timePicker24Hour: false,
            autoApply: false,
            drops: "auto",
            timePicker: false,
            setDate: new Date(),
            locale: {
                format: format,
                separator: " - ",
                applyLabel: "Pilih",
                cancelLabel: "Cancel",
                fromLabel: "From",
                toLabel: "To",
                customRangeLabel: "Custom",
                weekLabel: "W",
                daysOfWeek: ["Ming", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"],
                monthNames: [
                    "Januari",
                    "Februari",
                    "Maret",
                    "April",
                    "Mei",
                    "Juni",
                    "Juli",
                    "Agustus",
                    "September",
                    "Oktober",
                    "November",
                    "Desember",
                ],
                firstDay: 1,
            },
        },
        function (start, end) {
            // console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        }
    );
}

function nowDate(format) {
    var currentDate = new Date(); // create a new Date object
    var day = currentDate.getDate(); // get the day of the month (1-31)
    var month = currentDate.getMonth() + 1; // get the month (0-11)
    var year = currentDate.getFullYear(); // get the year (4 digits)

    if (day < 10) {
        day = "0" + day;
    }
    if (month < 10) {
        month = "0" + month;
    }

    var nowDate = day + "-" + month + "-" + year;

    return nowDate;
}

function formatDate(dateString, format) {
    var date = new Date(dateString);

    var year = date.getFullYear();
    var month = date.getMonth() + 1;
    var day = date.getDate();

    var formattedDate = format
        .replace(/yyyy/g, year)
        .replace(/mm/g, month.toString().padStart(2, "0"))
        .replace(/dd/g, day.toString().padStart(2, "0"));

    return formattedDate;
}

function dateDB(dateString) {
    var dateArray = dateString.split("-");
    var dbDate = dateArray[2] + "-" + dateArray[1] + "-" + dateArray[0];
    return dbDate;
}
function formatNumber(val){
    var number = parseFloat(val);
    if (Number.isInteger(number)) {
        hasil = number;
    } else {
        hasil = number.toFixed(2);
    }
    var temp = hasil.toString().replace('.',',');
    var ribuan = temp.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
    return ribuan;
}