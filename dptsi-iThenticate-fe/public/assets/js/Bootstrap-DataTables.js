var mSortingString = [];

$(function() {
        var table = $('#example').dataTable({
            "paging": true,
            "ordering": true,
            "info": true,
            "aaSorting": [],
            "orderMulti": true,
            "aoColumnDefs": mSortingString

        });
});
