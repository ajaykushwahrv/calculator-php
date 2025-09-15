 <?php 
$rvMarketNewsdata = fetchDatasingleAPI('market-news');  
if (isset($rvMarketNewsdata['error']) || empty($rvMarketNewsdata) || !is_array($rvMarketNewsdata)) {
    echo "<marquee behavior='' direction=''   style='background: #000; display: flex; align-items: center; color:red;'>We're currently experiencing a temporary server issue. Don't worry, our team is already working on it, and the Tools will be back online shortly. Thank you for your patience.</marquee>";
} else { ?>
      
  <iframe src="<?= $rvMarketNewsdata['domainName']; ?>/<?= $rvMarketNewsdata['directoryName']; ?>/<?= $rvMarketNewsdata['toolscat']; ?>/<?= $rvMarketNewsdata['urlName']; ?>?apikey=<?= $rvMarketNewsdata['apikey']; ?>&primarycolor=293895&secondarycolor=a0cd3a&bgcolo=0000" frameBorder={0} height=510px; width="100%"></iframe>
<?php } ?>