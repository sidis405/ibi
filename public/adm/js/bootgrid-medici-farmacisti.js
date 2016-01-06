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

                            return "<button type=\"button\"  class=\"btn btn-icon command-edit\" data-row-ruolo=\"" + row.ruolo + "\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-edit\"></span></button> " + 
                                "<button type=\"button\"   class=\"btn btn-icon command-delete\" data-row-ruolo=\"" + row.ruolo + "\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-delete\"></span></button>";
                        }
                    }
                }).on("loaded.rs.jquery.bootgrid", function()
                {
                    /* Executes after data is loaded and rendered */
                    $("#data-table-command").find(".command-edit").on("click", function(e)
                    {
                        window.location.href = "/admin/medici-farmacisti/" + $(this).data("row-id");

                    }).end().find(".command-delete").on("click", function(e)
                    {

                            var ruolo = $(this).data("row-ruolo");
                            var id = $(this).data("row-id");
                            var rows = Array();
                            rows[0] = id;
                            
                            console.log(ruolo);

                            if(ruolo !== "Segreteria di Direzione" && ruolo !== 'Dev'){
                                swal({   
                                    title: "Sei sicuro di voler cancellare questo utente?",   
                                    text: "Non sarà possibile recuperare questo dato!",   
                                    type: "warning",   
                                    showCancelButton: true,   
                                    confirmButtonColor: "#DD6B55",   
                                    confirmButtonText: "Si. Cancella.",   
                                    closeOnConfirm: false ,
                                    showLoaderOnConfirm: true
                                }, function(){   
                                    swal("Cancellato!", "L'utente è stato cancellato con successo.", "success"); 
                                    deleteResource(id, 'medici-farmacisti');
                                    $("#data-table-command").bootgrid('remove', rows);
                                });
                            }else{
                                swal({   
                                    title: "Impossibile cancellare utente.",   
                                    text: "Non è possibile cancellare questo perchè di classe " + ruolo,   
                                    timer: 5000,   
                                    showConfirmButton: false 
                                });
                            }
                    });
            });
            });