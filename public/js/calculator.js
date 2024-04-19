// Get references to HTML elements
const deal_size_input = document.getElementById('dealSize'); // Input field for deal size
const prospects_input = document.getElementById('prospects'); // Input field for number of prospects
const close_ratio_input = document.getElementById('closeRatio'); // Input field for close ratio
const appointments_span = document.getElementById('appointments'); // Span to display calculated appointments
const close_ratio_span = document.getElementById('closeRatioSpan'); // Span to display calculated close ratio
const value_lead_generation = document.getElementById('valueLeadGeneration'); // Span to display calculated value lead generation
const roi_span = document.getElementById('roi'); // Span to display calculated ROI
const deal_size_text = document.getElementById('dealSizeText'); // Span to display deal size
const prospects_text = document.getElementById('prospectsText'); // Span to display prospects
const close_ratio_text = document.getElementById('closeRatioText'); // Span to display close ratio

// Function to calculate appointments, value lead generation, and close ratio
function calculate_appointments() {
  
  // Parse input values as floats
  const deal_size =   parseFloat(deal_size_input.value); // Deal size
  const prospects =   parseFloat(prospects_input.value); // Number of prospects
  const close_ratio = parseFloat(close_ratio_input.value); // Close ratio
  
  // Calculate value lead generation (annual)
  const value_lead_generation_annual = (deal_size * 12).toFixed(2);
  value_lead_generation.textContent = value_lead_generation_annual;
  deal_size_text.textContent = deal_size;

  // Calculate appointments per month
  const appointments = (value_lead_generation_annual / prospects).toFixed(2);
  appointments_span.textContent = appointments;
  prospects_text.textContent = prospects;

  // Calculate close ratio percentage
  const close_ratio_percent =   (value_lead_generation_annual / close_ratio).toFixed(2);
  close_ratio_span.textContent = close_ratio_percent;
  close_ratio_text.textContent = close_ratio;
} 

// Call calculate_appointments function initially
calculate_appointments();

// Add event listeners to input fields to recalculate on input change
deal_size_input.addEventListener('input', calculate_appointments);
prospects_input.addEventListener('input', calculate_appointments);
close_ratio_input.addEventListener('input', calculate_appointments);
