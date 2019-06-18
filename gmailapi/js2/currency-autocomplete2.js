$(function(){
  var currencies = [
    
  
    { value:'Anantpura kota'},
    { value:'Bajrang Nagar kota'},
    { value:'Bargaon kota'},
    { value:'Bhimganj Mandi kota'},
    { value:'Borkhera kota '},
    { value:'Bundi Road kota'},
    { value:'Chawani kota'},
    { value:'Civil Lines kota'},
    { value:'Dadabari kota'},
    { value:'Dadwara kota'},
    { value:'Dhanmandi kota'},
    { value:'Electricity Board Area kota'},
    { value:'Engineering college kota'},
    { value:'Ganesh Nagar kota'},
    { value:'Gaytri Vihar kota'},
    { value:'Girdharpura kota'},
    { value:'Gudla kota'},
    { value:'Gumanpura kota'},
    { value:'Indraprastha Industrial Area kota'},
    { value:'Keshavpura kota'},
    { value:'Kishorepura kota'},
    { value:'Kota Industrial Area kota'},
    { value:'Kunhari kota'},
    { value:'Ladpura kota'},
    { value:'Laxmi Pura kota'},
    { value:'Mahaveer Colony kota'},
    { value:'Mahaveer Nagar kota'},
    { value:'Mandana kota'},
    { value:'Nanta kota'},
    { value:'Naya Gaon kota'},
    { value:'Nayapura kota'},
    { value:'New Railway Colony kota'},
    { value:'Police Line kota'},
    { value:'Railway Station Area kota'},
    { value:'Raipura kota'},
    { value:'Rama Krishna Puram kota'},
    { value:'Ramganj Mandi kota'},
    { value:'Rampura kota'},
    { value:'Rangbari kota'},
    { value:'Ranpur kota'},
    { value:'Rawatbhata Road kota'},
    { value:'Sakat Pura kota'},
    { value:'Sawaimadhopur Road kota'},
    { value:'Shashtri Nagar kota'},
    { value:'shivpura kota'},
    { value:'Shrinath Puram kota'},
    { value:'Shripura kota'},
    { value:'Shubhash Nagar kota'},
    { value:'Shyam Nagar Kota'},
    { value:'Sultanpur kota'},
    { value:'Swami Vivekananda Nagar kota'},
    { value:'Talwandi kota'},
    { value:'Transport Nagar kota'},
    { value:'Vigyan Nagar kota'},

     ];
  
  // setup autocomplete function pulling from currencies[] array
  $('#autocomplete').autocomplete({
    lookup: currencies,
    onSelect: function (suggestion) {
      var thehtml = '<strong>Currency Name:</strong> ' + suggestion.value + ' <br> <strong>Symbol:</strong> ' + suggestion.data;
    
    }
  });
  

});