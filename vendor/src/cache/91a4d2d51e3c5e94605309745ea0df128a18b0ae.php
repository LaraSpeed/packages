<?php echo "function get".(Berthe\Codegenerator\Utils\Helper::camelize($attrName))."Attribute($"."value){"; ?>


        <?php echo "if(strlen($"."value) > $length ) {"; ?>

            <?php echo "return substr($"."value, 0, $length).\"...\";"; ?>

        <?php echo "}"; ?>


        <?php echo "return $"."value;"; ?>

    <?php echo "}"; ?>