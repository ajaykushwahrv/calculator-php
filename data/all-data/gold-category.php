<?php 
    if (isset($allCulatorsDaat['error']) || empty($allCulatorsDaat) || !is_array($allCulatorsDaat)) { ?>
        <marquee behavior='' direction=''   style='display: flex; align-items: center; color:red;'>We're currently experiencing a temporary server issue. Don't worry, our team is already working on it, and the website will be back online shortly. Thank you for your patience. </marquee>
    <?php } else {
?>
    <div class="calculatorlist-section">
        <div class="row">
            <div class="col-sm-12">
                <h3>Financial Calculators</h3>
                <ul class="calculator-list">
                    <!-- 
                //$allowedIds = [1, 8, 2, 11, 10, 17, 18, 19, 22,5,13, 14,12, 7, 6];
                //$i=1; foreach($allCulatorsDaat as $allCulators):
                //if (in_array($allCulators['id'], $allowedIds)){
                //calculator.php?tools=</?= $allCulators['urlName']; ?>
                -->

                    <?php
                        if (!empty($allCulatorsDaat)) {
                        $i=1; foreach($allCulatorsDaat as $allCulators):
                    if($allCulators['calculators_name'] == 2 && $allCulators['gcategory'] == 1){
                    ?>
                    <li>
                        <a href="#!" class="calculatorHendler"
                            data-titlename="<?= $allCulators['titleName']; ?>"
                            data-toolscat="<?= $allCulators['toolscat']; ?>"
                            data-urlname="<?= $allCulators['urlName']; ?>"
                            data-apikey="<?= $allCulators['apikey']; ?>"
                            data-rvsrcimg="<?= $allCulators['rvicone']; ?>"
                            data-rvdomain="<?= $allCulators['domainName']; ?>"
                            data-rvdirectory="<?= $allCulators['directoryName']; ?>"
                            data-rvminheight="<?= $allCulators['minHeight']; ?>"
                            data-rvmaxheight="<?= $allCulators['maxHeight']; ?>"
                            aria-label="<?= $allCulators['urlName'];?>">

                            <div class="image">
                                <img src="<?= $allCulators['rvicone'];?>"
                                    alt="<?= $allCulators['titleName'];?>">
                            </div>
                            <span> <?= $allCulators['titleName'];?></span>
                        </a>
                    </li>
                    <?php $i++; }  endforeach; } else { echo "<p>Currently calculators data not available. Please try again later.</p>"; } ?>
                </ul>
                <h3>MF Tools Calculators</h3>
                <ul class="calculator-list">
                    <?php
                        if (!empty($allCulatorsDaat)) {
                        $i=1; foreach($allCulatorsDaat as $allCulators):
                    if($allCulators['calculators_name'] == 1  && $allCulators['gcategory'] == 1){
                    ?>
                    <li>
                        <a href="#!" class="calculatorHendler"
                            data-titlename="<?= $allCulators['titleName']; ?>"
                            data-toolscat="<?= $allCulators['toolscat']; ?>"
                            data-urlname="<?= $allCulators['urlName']; ?>"
                            data-rvsrcimg="<?= $allCulators['rvicone']; ?>"
                            data-apikey="<?= $allCulators['apikey']; ?>"
                            data-rvdomain="<?= $allCulators['domainName']; ?>"
                            data-rvdirectory="<?= $allCulators['directoryName']; ?>"
                            data-rvminheight="<?= $allCulators['minHeight']; ?>"
                            data-rvmaxheight="<?= $allCulators['maxHeight']; ?>"
                            aria-label="<?= $allCulators['urlName'];?>">
                            <div class="image">
                                <img src="<?= $allCulators['rvicone'];?>"
                                    alt="<?= $allCulators['titleName'];?>">
                            </div>
                            <span> <?= $allCulators['titleName'];?></span>
                        </a>
                    </li>
                    <?php $i++; }  endforeach; } else { echo "<p>Currently calculators data not available. Please try again later.</p>"; } ?>
                </ul>
            </div>
            <div class="col-sm-12">
                <div class=" calculators_section ">
                    <div class="calculator-title"></div>
                    <div class="calculator-text">
                        <div class="rvcaliframe"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php  } ?>