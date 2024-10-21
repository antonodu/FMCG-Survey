<?php

session_start();

// collect form data
$responses = array(
    // Page 1 //
    'age' => $_POST['age'],
    'gender' => $_POST['gender'],
    'income' => $_POST['income'],
    'location' => $_POST['location'],
    'occupation' => $_POST['occupation'],
    'education' => $_POST['education'],
    'marital_status' => $_POST['marital_status'],

    // Page 2
    'adRecall' => $_POST['adRecall'],
    'brands' => $_POST['brands'],
    'adRecall1' => $_POST['adRecall1'],
    'influence' => $_POST['influence'],
    'products' => $_POST['products'],
    'products1' => $_POST['products1'],
    'familiar' => $_POST['familiar'],
    'sources' => $_POST['sources'],
    'familiarity' => $_POST['familiarity'],
    'purchase_regularly' => $_POST['purchase_regularly']

    // Page 3
    'beverageBrandAttitude' => $_POST['beverageBrandAttitude'],
    'describe' =>  $_POST['describe'],
    'beverageBrand' => $_POST['beverageBrand'],

    // Page 4
    'preferedBeverageBrand' => $_POST['prefferedBeverageBrand'],
    'preferedToothpasteBrand' => $_POST['prefferedToothpasteBrand'],
    'preferedMilkBrand' => $_POST['preferedMilkBrand'],
    'preferedBeverageBrand1' => $_POST['prefferedBeverageBrand1'],
    'preferedToothpasteBrand1' => $_POST['prefferedToothpasteBrand1'],

    // Page 5
    'purchasing_consideration' => $_POST['purchasing_consideration'],
    'purchasing_timing' => $_POST['purchase_timing'],
    'purchase_frequency' => $_POST['purchase_frequency'],
    'purchase_prevention' => $_POST['purchase_prevention'],

    // Page 6
    'ad_medium' => $_POST['ad_medium'],
    'ad_influence_frequency' => $_POST['ad_influence_frequency'],
    'ad_influence_frequency1' => $_POST['ad_influence_frequency1'],
    'beverageBrand1' => $_POST['beverageBrand1'],
    'decision_making' => $_POST['decision_making'],
    'awareness' => $_POST['awareness'],

    // Page 7
    'social_media_engagement' => $_POST['social_media_engagement'],
    'purchase_social_media' => $_POST['purchase_social_media'],
    'digital_ads' => $_POST['digital_ads'],

    // Page 8
    'social_media_engagement1' => $_POST['social_media_engagement1'],
    'purchase_social_media1' => $_POST['purchase_social_media1'],
    'productquality' => $_POST['productquality'],
    'brandloyality' => $_POST['brandloyality'],
    'prefferedBeverageBrand2' => $_POST['preferredBeverage2'],

    // Page 9
    'television' => $_POST['television'],
    'social_media' => $_POST['social_media'],
    'online_ads' => $_POST['online_ads'],
    'radio' => $_POST['radio'],
    'cultural_relevance' => $_POST['cultural_relevance'],
    'digital_vs_traditional' => $_POST['digital_vs_traditional'],
    'memorable_factors' => $_POST['memorable_factors'],
    'recommendations' => $_POST['recommendations'],

    // Page 10
    'notice_ads' => $_POST['notice_ads'],
    'purchasing_channels' => $_POST['purchasing_channels'],
    'television_effectiveness' => $_POST['television_effectiveness'],
    'radio_effectiveness' => $_POST['radio_effectiveness'],
    'social_media_effectiveness' => $_POST['social_media_effectiveness'],
    'online_ads_effect' => $_POST['online_ads_effectiveness'],
    'billboards_effectiveness' => $_POST['billboards_effectiveness'],
    'printmedia_effect' => $_POST['printmedia_effect'],

    // Page 11
    'advertising_strategies' => $_POST['advertising_strategies'],
    'advertising_messages' => $_POST['advertising_messages'],
    'cultural_relevance_engagement' => $_POST['cultural_relevant_engagement'],

    // Page 12
    'newproduct' => $_POST['newproduct'],
    'repeatbuyer' => $_POST['repeatbuyer'],
    'ad_leads' => $_POST['ad_leads'],

    // Page 13
    'purchase_fmcg_products' => $_POST['purchase_fmcg_products'],
    'typesofproducts' => $_POST['typesofproducts'],
    'ads_influence' => $_POST['ads_influence'],
    'fmcgbrand' => $_POST['fmcgbrand'],

    // Page 14
    'content_type' => $_POST['content_type'],
    'cultural_relevance1' => $_POST['cultural_relevance1'],
    'informative_ads' => $_POST['informative_ads'],

    // Page 15
    'fcmg_ads' => $_POST['fcmg_ads'],
    'influencial_ads' => $_POST['influencial_ads'],
    'advertising_leads' => $_POST['advertising_leads'],

    // Page 16
    'influence_purchase' => $_POST['influence_purchase'],
    'television_effectiveness1' => $_POST['television_effectiveness'],
    'radio_effectiveness' => $_POST['radio_effectiveness'],
    'social_effectiveness2' => $_POST['social_effectiveness2'],
    'online_effectiveness' => $_POST['online_effectiveness'],
    'billboards_effectiveness2' => $_POST['billboards_effectiveness2'],
    'printmedia_effect2' => $_POST['printmedia_effect2'],
    'social_media_influence' => $_POST['social_media_influence'],
    'marketshares' => $_POST['marketshares'],

    // Page 17
    'ad_strategy' => $_POST['ad_strategy'],
    'cultural_relevance_ads' => $_POST['cultural_relevance_ads'],

    // Page 18
    'switch_brands' => $_POST['switch_brands'],
    'brandloyality1' => $_POST['brandloyality1'],

    // Page 19
    'advertisements' => $_POST['advertisements'],

    // Page 20
    'online_purchase' => $_POST['online_purchase'],
    'aboutnewproducts' => $_POST['aboutnewproducts'],
    'appealing_ads' => $_POST['appealing_ads'],
    'advertising_channels' => $_POST['advertising_channels']
);

if(empty($_POST['age'])) {

}

$_SESSION['survey_responses'] = $responses;

// Measurement protocol URL
$ga_url = 'https://www.google-analytics.com/mp/collect?measurement_id=G-ZH6WGRTV7G=&api_secret=PeAMqSBCQpGWA3fbNzkcaw';


// Prepare the data to send to Google Analytics
$ga_data = array(
    'client_id' => $_SESSION['client_id'],
    'events' => array(
        array(
            'name' => 'form_submission',
            'params' => array(
     // Page 1 //
    'age' => $_POST['age'],
    'gender' => $_POST['gender'],
    'income' => $_POST['income'],
    'location' => $_POST['location'],
    'occupation' => $_POST['occupation'],
    'education' => $_POST['education'],
    'marital_status' => $_POST['marital_status'],

    // Page 2
    'adRecall' => $_POST['adRecall'],
    'brands' => $_POST['brands'],
    'adRecall1' => $_POST['adRecall1'],
    'influence' => $_POST['influence'],
    'products' => $_POST['products'],
    'products1' => $_POST['products1'],
    'familiar' => $_POST['familiar'],
    'sources' => $_POST['sources'],
    'familiarity' => $_POST['familiarity'],
    'purchase_regularly' => $_POST['purchase_regularly']

    // Page 3
    'beverageBrandAttitude' => $_POST['beverageBrandAttitude'],
    'describe' =>  $_POST['describe'],
    'beverageBrand' => $_POST['beverageBrand'],

    // Page 4
    'preferedBeverageBrand' => $_POST['prefferedBeverageBrand'],
    'preferedToothpasteBrand' => $_POST['prefferedToothpasteBrand'],
    'preferedMilkBrand' => $_POST['preferedMilkBrand'],
    'preferedBeverageBrand1' => $_POST['prefferedBeverageBrand1'],
    'preferedToothpasteBrand1' => $_POST['prefferedToothpasteBrand1'],

    // Page 5
    'purchasing_consideration' => $_POST['purchasing_consideration'],
    'purchasing_timing' => $_POST['purchase_timing'],
    'purchase_frequency' => $_POST['purchase_frequency'],
    'purchase_prevention' => $_POST['purchase_prevention'],

    // Page 6
    'ad_medium' => $_POST['ad_medium'],
    'ad_influence_frequency' => $_POST['ad_influence_frequency'],
    'ad_influence_frequency1' => $_POST['ad_influence_frequency1'],
    'beverageBrand1' => $_POST['beverageBrand1'],
    'decision_making' => $_POST['decision_making'],
    'awareness' => $_POST['awareness'],

    // Page 7
    'social_media_engagement' => $_POST['social_media_engagement'],
    'purchase_social_media' => $_POST['purchase_social_media'],
    'digital_ads' => $_POST['digital_ads'],

    // Page 8
    'social_media_engagement1' => $_POST['social_media_engagement1'],
    'purchase_social_media1' => $_POST['purchase_social_media1'],
    'productquality' => $_POST['productquality'],
    'brandloyality' => $_POST['brandloyality'],
    'prefferedBeverageBrand2' => $_POST['preferredBeverage2'],

    // Page 9
    'television' => $_POST['television'],
    'social_media' => $_POST['social_media'],
    'online_ads' => $_POST['online_ads'],
    'radio' => $_POST['radio'],
    'cultural_relevance' => $_POST['cultural_relevance'],
    'digital_vs_traditional' => $_POST['digital_vs_traditional'],
    'memorable_factors' => $_POST['memorable_factors'],
    'recommendations' => $_POST['recommendations'],

    // Page 10
    'notice_ads' => $_POST['notice_ads'],
    'purchasing_channels' => $_POST['purchasing_channels'],
    'television_effectiveness' => $_POST['television_effectiveness'],
    'radio_effectiveness' => $_POST['radio_effectiveness'],
    'social_media_effectiveness' => $_POST['social_media_effectiveness'],
    'online_ads_effect' => $_POST['online_ads_effectiveness'],
    'billboards_effectiveness' => $_POST['billboards_effectiveness'],
    'printmedia_effect' => $_POST['printmedia_effect'],

    // Page 11
    'advertising_strategies' => $_POST['advertising_strategies'],
    'advertising_messages' => $_POST['advertising_messages'],
    'cultural_relevance_engagement' => $_POST['cultural_relevant_engagement'],

    // Page 12
    'newproduct' => $_POST['newproduct'],
    'repeatbuyer' => $_POST['repeatbuyer'],
    'ad_leads' => $_POST['ad_leads'],

    // Page 13
    'purchase_fmcg_products' => $_POST['purchase_fmcg_products'],
    'typesofproducts' => $_POST['typesofproducts'],
    'ads_influence' => $_POST['ads_influence'],
    'fmcgbrand' => $_POST['fmcgbrand'],

    // Page 14
    'content_type' => $_POST['content_type'],
    'cultural_relevance1' => $_POST['cultural_relevance1'],
    'informative_ads' => $_POST['informative_ads'],

    // Page 15
    'fcmg_ads' => $_POST['fcmg_ads'],
    'influencial_ads' => $_POST['influencial_ads'],
    'advertising_leads' => $_POST['advertising_leads'],

    // Page 16
    'influence_purchase' => $_POST['influence_purchase'],
    'television_effectiveness1' => $_POST['television_effectiveness'],
    'radio_effectiveness' => $_POST['radio_effectiveness'],
    'social_effectiveness2' => $_POST['social_effectiveness2'],
    'online_effectiveness' => $_POST['online_effectiveness'],
    'billboards_effectiveness2' => $_POST['billboards_effectiveness2'],
    'printmedia_effect2' => $_POST['printmedia_effect2'],
    'social_media_influence' => $_POST['social_media_influence'],
    'marketshares' => $_POST['marketshares'],

    // Page 17
    'ad_strategy' => $_POST['ad_strategy'],
    'cultural_relevance_ads' => $_POST['cultural_relevance_ads'],

    // Page 18
    'switch_brands' => $_POST['switch_brands'],
    'brandloyality1' => $_POST['brandloyality1'],

    // Page 19
    'advertisements' => $_POST['advertisements'],

    // Page 20
    'online_purchase' => $_POST['online_purchase'],
    'aboutnewproducts' => $_POST['aboutnewproducts'],
    'appealing_ads' => $_POST['appealing_ads'],
    'advertising_channels' => $_POST['advertising_channels']
            )
            )
          )
        );

$ga_payload = json_encode($ga_data);

// Send the data to Google Analytics via Measurement Protocol
$ch = curl_init($ga_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $ga_payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$responses = curl_exec($ch);
$curl_close($ch);

header('Location: thank_you.php');
exit();

?>