var nbaTeams = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  prefetch: 'pub/js/data/patients.json'
});

patients.initialize();

$('#search-patient-create .typeahead').typeahead({
  highlight: true
},
{
  name: 'patients',
  displayKey: 'name',
  source: patients.ttAdapter()
}
});
