let currentPage = 1;
const totalPages = 20;

// Function to update the progress bar
function updateProgressBar() {
  const progressBar = document.getElementById('progressBar');
  const progress = (currentPage / totalPages) * 100;
  progressBar.style.width = progress + '%';
  progressBar.textContent = Math.round(progress) + '%';
}

// Function to show the next page
function nextPage() {
  if (currentPage < totalPages) {
    document.getElementById(`page${currentPage}`).classList.add('hidden');
    currentPage++;
    document.getElementById(`page${currentPage}`).classList.remove('hidden');
    updateProgressBar();
  }
}

// Function to show the previous page
function prevPage() {
  if (currentPage > 1) {
    document.getElementById(`page${currentPage}`).classList.add('hidden');
    currentPage--;
    document.getElementById(`page${currentPage}`).classList.remove('hidden');
    updateProgressBar();
  }
}

// Initialize progress bar
updateProgressBar();

// Handle form submission
document.getElementById('surveyForm').addEventListener('submit', function(event) {
  event.preventDefault();
 

  gtag('event', 'form_submission', {
    'event_category': 'Survey',
        'event_label': 'FMCG Survey',
        'age': document.querySelector('input[name="age"]').value,
        'gender': document.querySelector('input[name="gender"]').value,
        'income': document.querySelector('input[name="income"]').value,
        'location': document.querySelector('input[name="location"]').value,
        'occupation': document.querySelector('input[name="occupation"]').value,
        'education': document.querySelector('input[name="education"]').value,
        'marital_status': document.querySelector('input[name="marital_status"]').value,
        'adRecall': document.querySelector('input[name="adRecall"]').value,
        'brands': document.querySelector('input[name="brands"]').value,
        'adRecall1': document.querySelector('input[name="addRecall1"]').value,
        'influence': document.querySelector('input[name="influence"]').value,
        'products': document.querySelector('input[name="products"]').value,
        'products1': document.querySelector('input[name="products1"]').value,
        'familiar': document.querySelector('input[name="familiar"]').value,
        'sources': document.querySelector('input[name="sources"]').value,
        'familiarity': document.querySelector('input[name="familiarity"]').value,
        'purchase_regularly' :document.querySelector('input[name="familiarity"]').value,
        'beverageBrandAttitude': document.querySelector('input[name="beverageBrandAttitude"]').value,
        'describe' :document.querySelector('input[name="describe"]').value,
        'beverageBrand': document.querySelector('input[name="beverageBrand"]').value,
        'purchase_regularly' :document.querySelector('input[name="purchase_regularly"]').value,
        'familiarity': document.querySelector('input[name="familiarity"]').value,
        'preferredBeverageBrand' :document.querySelector('input[name="preferredBeverageBrand"]').value,
        'preferredToothpasteBrand' :document.querySelector('input[name="preferredToothpasteBrand"]').value,
        'preferredMilkBrand' :document.querySelector('input[name="preferredMilkBrand"]').value,
        'preferredBeverageBrand1' :document.querySelector('input[name="preferredBeverageBrand1"]').value,
        'preferredToothpasteBrand1' :document.querySelector('input[name="preferredToothpasteBrand1"]').value,
        'purchasing_consideration' :document.querySelector('input[name="purchasing_consideration"]').value,
        'purchase_timing' :document.querySelector('input[name="purchasing_timing"]').value,
        'purchase_frequency' :document.querySelector('input[name="purchase_frequency"]').value,
        'purchase_prevention' :document.querySelector('input[name="purchase_prevention"]').value,
        'ad_medium' :document.querySelector('input[name="ad_medium"]').value,
        'ad_influence_frequency' :document.querySelector('input[name="ad_influence_frequency"]').value,
        'ad_influence_frequency1' :document.querySelector('input[name="ad_influence_frequency1"]').value,
        'beverageBrand1' :document.querySelector('input[name="beverageBrand1"]').value,
        'decision_making' :document.querySelector('input[name="decision_making"]').value,
        'awareness' :document.querySelector('input[name="awareness"]').value,
        'social_media_engagement' :document.querySelector('input[name="social_media_engagement"]').value,
        'purchase_social_media' :document.querySelector('input[name="purchase_social_media"]').value,
        'digital_ads' :document.querySelector('input[name="digital_ads"]').value,
        'social_media_engagement1' :document.querySelector('input[name="social_media_engagement1"]').value,
        'purchase_social_media1' :document.querySelector('input[name="purchase_social_media1"]').value,
        'productquality' :document.querySelector('input[name="productquality"]').value,
        'brandloyality' :document.querySelector('input[name="brandloyality"]').value,
        'preferredBeverageBrand2' :document.querySelector('input[name="preferredBeverageBrand2"]').value,
        'television' :document.querySelector('input[name="television"]').value,
        'social_media' :document.querySelector('input[name="social_media"]').value,
        'online_ads' :document.querySelector('input[name="online_ads"]').value,
        'radio' :document.querySelector('input[name="radio"]').value,
        'cultural_relevance' :document.querySelector('input[name="cultural_relevance"]').value,
        'digital_vs_traditional' :document.querySelector('input[name="digital_vs-traditional"]').value,
        'memorable_factors' :document.querySelector('input[name="memorable_factors"]').value,
        'recommendations' :document.querySelector('input[name="recommendations"]').value,
        'notice_ads' :document.querySelector('input[name="notice_ads"]').value,
        'purchasing_channels' :document.querySelector('input[name="purchasing_channels"]').value,
        'television_effectiveness' :document.querySelector('input[name="television_effectiveness"]').value,
        'radio_effectiveness' :document.querySelector('input[name="radio_effectiveness"]').value,
        'social_media_effectiveness' :document.querySelector('input[name="social_media_effectiveness"]').value,
        'online_ads_effect' :document.querySelector('input[name="online_ads_effect"]').value,
        'billboards_effectiveness' :document.querySelector('input[name="billboards_effectiveness"]').value,
        'printmedia_effect' :document.querySelector('input[name="printmedia_effect"]').value,
        'advertising_strategies' :document.querySelector('input[name="advertising_strategies"]').value,
        'advertising_messages' :document.querySelector('input[name="advertising_strategies"]').value,
        'cultural_relevant_engagement' :document.querySelector('input[name="cultural_relevant_engagement"]').value,
        'newproduct' :document.querySelector('input[name="newproduct"]').value,
        'repeatbuyer' :document.querySelector('input[name="repeatbuyer"]').value,
        'ad_leads' :document.querySelector('input[name="ad_leads"]').value,
        'purchase_fmcg_products' :document.querySelector('input[name="purchase_fmcg_products"]').value,
        'typesofproducts' :document.querySelector('input[name="typesofproducts"]').value,
        'ads_influence' :document.querySelector('input[name="ads_influence"]').value,
        'fmcgbrand' :document.querySelector('input[name="fmcgbrand"]').value,
        'content_type' :document.querySelector('input[name="content_type"]').value,
        'cultural_relevance1' :document.querySelector('input[name="cultural_relevance1"]').value,
        'informative_ads' :document.querySelector('input[name="informative_ads"]').value,
        'fmcg_ads' :document.querySelector('input[name="fmcg_ads"]').value,
        'influencial_ads' :document.querySelector('input[name="influencial_ads"]').value,
        'advertising_leads' :document.querySelector('input[name="advertising_leads"]').value,
        'influence_purchase' :document.querySelector('input[name="influence_purchase"]').value,
        'television_effectiveness1' :document.querySelector('input[name="television_effectiveness1"]').value,
        'radio_effectiveness1' :document.querySelector('input[name="radio_effectiveness1"]').value,
        'social_effectiveness2' :document.querySelector('input[name="social_effectiveness2"]').value,
        'online_effectiveness' :document.querySelector('input[name="online_effectiveness"]').value,
        'billboards_effectiveness2' :document.querySelector('input[name="billboards_effectiveness2"]').value,
        'printmedia_effect2' :document.querySelector('input[name="printmedia_effect2"]').value,
        'social_media_influence' :document.querySelector('input[name=social_media_influence"]').value,
        'marketshares' :document.querySelector('input[name="marketshares"]').value,
        'ad_strategy' :document.querySelector('input[name="ad_strategy"]').value,
        'cultural_relevance_ads' :document.querySelector('input[name="cultural_relevance_ads"]').value,
        'switch_brands' :document.querySelector('input[name="switch_brands"]').value,
        'brandloyality1' :document.querySelector('input[name="brandloyality1"]').value,
        'advertisement' :document.querySelector('input[name="advertisement"]').value,
        'online_purchase' :document.querySelector('input[name="online_purchase"]').value,
        'aboutnewproducts' :document.querySelector('input[name="aboutnewproducts"]').value,
        'appealing_ads' :document.querySelector('input[name="appealing_ads"]').value,
        'advertising_channels' :document.querySelector('input[name="advertising_channels"]').value
  });

  this.submit();
});