const dealSizeInput = document.getElementById('dealSize');
const prospectsInput = document.getElementById('prospects');
const closeRatioInput = document.getElementById('closeRatio');
const appointmentsSpan = document.getElementById('appointments');
const closeRatioSpan = document.getElementById('closeRatioSpan');
const valueLeadGeneration = document.getElementById('valueLeadGeneration');
const roiSpan = document.getElementById('roi');

function calculateAppointments() {
  const dealSize = parseFloat(dealSizeInput.value);
  const prospects = parseFloat(prospectsInput.value);
  const closeRatio = parseFloat(closeRatioInput.value); 
  

  const value_lead_generation = (dealSize * 12).toFixed(2);
  valueLeadGeneration.textContent = value_lead_generation;


  const appointments = (value_lead_generation / prospects).toFixed(2);
  appointmentsSpan.textContent = appointments;

  const close_ratio_perct = (value_lead_generation / closeRatio).toFixed(2);
  closeRatioSpan.textContent = close_ratio_perct;

} 

calculateAppointments();
dealSizeInput.addEventListener('input', calculateAppointments);
prospectsInput.addEventListener('input', calculateAppointments);
closeRatioInput.addEventListener('input', calculateAppointments);
