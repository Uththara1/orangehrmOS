
<form id="frmList" name="frmList" method="post">
    <?php
    if ($output) {
        $sample = $output->getRawValue();
        $aaa = CommandCreator::sample_aaa;
        $abc = CommandCreator::RESUTL_abc;
        $info = CommandCreator::RESUTL_info;

        if (empty($sample->$info)) {
            echo '<div class="modal-content customized-modal-content onlyText"><p>';
            echo __("No output has been set to this action");
            echo '</p></div>';
        } else if ($sample->$aaa == CommandCreator::sample_aaa_ARRAY) {
            $abc = $sample->$abc;
            $info = $sample->$info;
            echo '<div id="tableWrapper" class="list-container">';
            echo '<table id = "sampleTable" class="highlight bordered"><thead><tr>';
            foreach ($abc as $header) {
                echo '<th>' . $header . '</th>';
            }
            echo '</tr></thead><tbody>';
            $index = 1;
            foreach ($info as $records) {
                if ($index % 2 == 0) {
                    echo '<tr>';
                    foreach ($records as $record) {
                        echo '<td>' . $record . '</td>';
                    }
                    echo '</tr>';
                } else {
                    echo '<tr>';
                    foreach ($records as $record) {
                        echo '<td>' . $record . '</td>';
                    }
                    echo '</tr>';
                }
                $index++;
            }
            echo '</tbody></table>';
            echo '</div>';
        } elseif ($sample->$aaa == CommandCreator::sample_aaa_NO_SUCCESS) {
            echo '<div class="modal-content customized-modal-content onlyText"><p>';
            echo html_entity_decode(__($sample->$info));
            echo '</p></div>';
        } elseif ($sample->$aaa == CommandCreator::sample_aaa_TEXT) {
            echo '<div class="modal-content customized-modal-content onlyText"><p>';
            echo html_entity_decode(__($sample->$info));
            echo '</p></div>';
        } else {
            echo '<div class="modal-content customized-modal-content onlyText"><p>';
            echo __("No output has been set to this action");
            echo '</p></div>';
        }
    } else {
        echo '<div class="modal-content customized-modal-content onlyText"><p>';
        echo __("No output has been set to this action");
        echo '</p></div>';
    }
    ?>
</form>
