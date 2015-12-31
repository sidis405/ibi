$(document).ready(function(){
                
                //Command Buttons
                $("#data-table-command").bootgrid({
                    caseSensitive: false,
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-module',
                        iconDown: 'zmdi-expand-more',
                        iconRefresh: 'zmdi-refresh',
                        iconUp: 'zmdi-expand-less'
                    },
                    formatters: {

                        "commands": function(column, row) {

                            return "<button type=\"button\"  class=\"btn btn-icon command-edit\" data-row-utenti=\"" + row.utenti + "\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-edit\"></span></button> " + 
                                "<button type=\"button\"   class=\"btn btn-icon command-delete\" data-row-utenti=\"" + row.utenti + "\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-delete\"></span></button>";
                        }
                    }
                }).on("loaded.rs.jquery.bootgrid", function()
                {
                    /* Executes after data is loaded and rendered */
                    $("#data-table-command").find(".command-edit").on("click", function(e)
                    {
                        window.location.href = "/admin/utenti/ruoli/" + $(this).data("row-id") + "/modifica";

                    }).end().find(".command-delete").on("click", function(e)
                    {

                            var utenti = $(this).data("row-utenti");
                            var id = $(this).data("row-id");
                            var rows = Array();
                            rows[0] = id;

                            if(utenti == 0){
                                swal({   
                                    title: "Sei sicuro di voler cancellare questo permesso?",   
                                    text: "Non sarà possibile recuperare questo dato!",   
                                    type: "warning",   
                                    showCancelButton: true,   
                                    confirmButtonColor: "#DD6B55",   
                                    confirmButtonText: "Si. Cancella.",   
                                    closeOnConfirm: false ,
                                    showLoaderOnConfirm: true
                                }, function(){   
                                    swal("Cancellato!", "Il permesso è stata cancellata con successo.", "success"); 
                                    deleteResource(id, 'utenti/utenti');
                                    $("#data-table-command").bootgrid('remove', rows);
                                });
                            }else{
                                swal({   
                                    title: "Impossibile cancellare permesso.",   
                                    text: "Non è possibile cancellare questo permesso perchè è associato a " + utenti + " utenti.",   
                                    timer: 5000,   
                                    showConfirmButton: false 
                                });
                            }
                    });
            });
            });