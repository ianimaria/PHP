
$(document).ready(function(){

    $("#txtFromDate").datepicker({

        numberOfMonths: 1,
        dateFormat: 'yy-mm-dd',
        minDate: 0,

        onSelect: function(selected) {

          $("#txtToDate").datepicker("option","minDate", selected)

        }

    });

    $("#txtToDate").datepicker({

        numberOfMonths: 1,
        dateFormat: 'yy-mm-dd',

        onSelect: function(selected) {

           $("#txtFromDate").datepicker("option","maxDate", selected)

        }

    }); 
});
