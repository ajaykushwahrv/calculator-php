 <?php 
$rvcaliFundPerformancedata = fetchDatasingleAPI('fund-performance'); 
if (isset($rvcaliFundPerformancedata['error']) || empty($rvcaliFundPerformancedata) || !is_array($rvcaliFundPerformancedata)) {
    echo "<marquee behavior='' direction=''   style='background: #000; display: flex; align-items: center; color:red;'>We're currently experiencing a temporary server issue. Don't worry, our team is already working on it, and the Tools will be back online shortly. Thank you for your patience. </marquee>";
} else { ?>
        <iframe src="<?= $rvcaliFundPerformancedata['domainName']; ?>/<?= $rvcaliFundPerformancedata['directoryName']; ?>/<?= $rvcaliFundPerformancedata['toolscat']; ?>/<?= $rvcaliFundPerformancedata['urlName']; ?>?apikey=<?= $rvcaliFundPerformancedata['apikey']; ?>&primarycolor=293895&secondarycolor=a0cd3a&bgcolo=0000&primaryactive=fff" frameBorder={0} height=480px; width="100%"></iframe>
<?php } ?>