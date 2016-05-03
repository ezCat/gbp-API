$(document).ready(function() {
var table = $('.datatable').not('.initialized').addClass('initialized').show().DataTable({
"columnDefs": [
    { "visible": false, "targets": 0 }
],
"order": [[ 0, 'asc' ]],
"stateSave": false,
"stateDuration": 60*60*24*365,
"displayLength": 100,
"sScrollX": "100%",
"dom": 'lfTrtip',
"drawCallback": function ( settings ) {
    var api = this.api();
    var rows = api.rows( {page:'current'} ).nodes();
    var last=null;
    var colonne = api.row(0).data().length;
    var total = new Array();
    total['Total']= new Array();
    var groupid = -1;
    var subtotal = new Array();

        
    api.column(0, {page:'current'} ).data().each( function ( group, i ) {     
        if ( last !== group ) {
            groupid++;
            $(rows).eq( i ).before(
                '<tr class="group"><td>'+group+'</td></tr>'
            );
            last = group;
        }
        
                        
        val = api.row(api.row($(rows).eq( i )).index()).data();      //current order index
        $.each(val,function(index2,val2){
                if (typeof subtotal[groupid] =='undefined'){
                    subtotal[groupid] = new Array();
                }
                if (typeof subtotal[groupid][index2] =='undefined'){
                    subtotal[groupid][index2] = 0;
                }
                if (typeof total['Total'][index2] =='undefined'){ total['Total'][index2] = 0; }
                
                valeur = Number(val2.replace('€',"").replace('.',"").replace(',',"."));
                subtotal[groupid][index2] += valeur;
                total['Total'][index2] += valeur;
        });
        
        
        
    } );                
$('tbody').find('.group').each(function (i,v) {
            var rowCount = $(this).nextUntil('.group').length;
        $(this).find('td:first').append($('<span />', { 'class': 'rowCount-grid' }).append($('<b />', { 'text': ' ('+rowCount+')' })));
                var subtd = '';
                for (var a=2; a < colonne; a++)
                { 
                    subtd += '<td>'+subtotal[i][a]+'</td>';
                }
                $(this).append(subtd);
        });
                
}
} );

// Order by the grouping
$('.datatable tbody').on( 'click', 'tr.group', function () {
var currentOrder = table.order()[0];
if ( currentOrder[0] === 0 && currentOrder[1] === 'asc' ) {
    table.order( [ 0, 'desc' ] ).draw();
}
else {
    table.order( [ 0, 'asc' ] ).draw();
}
});
} );