/**
* Theme: Moltran Admin Template
* Author: Coderthemes
* Component: Datatable
* 
*/

var handleDataTableButtons=function(){"use strict";0!==$("#datatable-buttons").length&&$("#datatable-buttons").DataTable({dom:"Bfrtip",buttons:[{extend:"copy",className:"btn-sm"},{extend:"csv",className:"btn-sm"},{extend:"excel",className:"btn-sm"},{extend:"pdf",className:"btn-sm"},{extend:"print",className:"btn-sm"}],responsive:!0})},TableManageButtons=function(){"use strict";return{init:function(){handleDataTableButtons()}}}();
var handleDataTableButtons1=function(){"use strict";0!==$("#datatable-buttons1").length&&$("#datatable-buttons1").DataTable({dom:"Bfrtip",buttons:[{extend:"copy",className:"btn-sm"},{extend:"csv",className:"btn-sm"},{extend:"excel",className:"btn-sm"},{extend:"pdf",className:"btn-sm"},{extend:"print",className:"btn-sm"}],responsive:!0})},TableManageButtons=function(){"use strict";return{init:function(){handleDataTableButtons()}}}();