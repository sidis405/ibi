$(document).ready(function(){
                
                //Command Buttons
                $("#data-table-command").bootgrid({
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-module',
                        iconDown: 'zmdi-expand-more',
                        iconRefresh: 'zmdi-refresh',
                        iconUp: 'zmdi-expand-less'
                    },
                    formatters: {

                        "commands": function(column, row) {

                            return "<button type=\"button\"  class=\"btn btn-icon command-edit\" data-row-prodotti=\"" + row.prodotti + "\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-edit\"></span></button> " + 
                                "<button type=\"button\"   class=\"btn btn-icon command-delete\" data-row-prodotti=\"" + row.prodotti + "\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-delete\"></span></button>";
                        }
                    }
                }).on("loaded.rs.jquery.bootgrid", function()
                {
                    /* Executes after data is loaded and rendered */
                    $("#data-table-command").find(".command-edit").on("click", function(e)
                    {
                        window.location.href = "/admin/fascie/" + $(this).data("row-id") + "/modifica";

                    }).end().find(".command-delete").on("click", function(e)
                    {

                            var prodotti = $(this).data("row-prodotti");

                            if(prodotti == 0){
                                var rows = Array();
                                rows[0] = $(this).data("row-id");
                                swal({   
                                    title: "Sei sicuro di voler cancellare questa fascia?",   
                                    text: "Non sarà possibile recuperare questo dato!",   
                                    type: "warning",   
                                    showCancelButton: true,   
                                    confirmButtonColor: "#DD6B55",   
                                    confirmButtonText: "Si. Cancella.",   
                                    closeOnConfirm: false ,
                                    showLoaderOnConfirm: true
                                }, function(){   
                                    swal("Cancellato!", "La fascia e stata cancellata con successo.", "success"); 

                                    $("#data-table-command").bootgrid('remove', rows);
                                });
                            }else{
                                swal({   
                                    title: "Impossibile cancellare fascia.",   
                                    text: "Non è possibile cancellare questa fascia perchè è associata a " + prodotti + " prodotti.",   
                                    timer: 5000,   
                                    showConfirmButton: false 
                                });
                            }
                    });
            });
            });