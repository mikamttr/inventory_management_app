let tabProduits = new DataTable('#tabProduits', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/fr-FR.json',
        search : '', // Empty to remove the label
        searchPlaceholder: 'Rechercher',
    },
    
});

let tabFournisseurs = new DataTable('#tabFournisseurs', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/fr-FR.json',
        search : '', // Empty to remove the label
        searchPlaceholder: 'Rechercher',
    },
});