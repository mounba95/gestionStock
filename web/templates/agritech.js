function dataTable(id, nomObjet) {
    $(id).DataTable({
    responsive: true,
        "aaSorting": [[0, "asc"]],
        oLanguage: {
            sLengthMenu: "Afficher: _MENU_ " + nomObjet + "s par page ",
            sSearch: "Rechercher : ",
            sZeroRecords: "Aucune valeur trouvee",
            sInfo: "Afficher page _PAGE_ sur _PAGES_",
            sInfoFiltered: "(Filtres sur _MAX_ )",
            sInfoEmpty: "Aucun " + nomObjet + " trouve",
            oPaginate: {
                sFirst: "<<",
                sPrevious: "<",
                sNext: ">",
                sLast: ">>"
            }
        },
        "pagingType": "full_numbers",
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
  }
 
$(document).ready(function() {
    dataTable("#table_client", "Client");
    dataTable("#table_fournisseur", "Fournisseur");
    dataTable("#table_stock", "Stock");
    dataTable("#table_produit", "Produit");
    dataTable("#table_typeProduit", "Type produit");
    dataTable("#table_approvisionnement", "Approvisionnement");
    dataTable("#table_vente", "Vente");
    dataTable("#table_devis", "Devis");
    dataTable("#table_rapport", "Vente");
    dataTable("#table_tva", "Tva");

});