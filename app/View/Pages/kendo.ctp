<?php
	$this->Html->script(array('libs/kendo/kendo.web.min'), array('inline' => false));
	$this->Html->css(array('libs/kendo/kendo.common.min','libs/kendo/kendo.default.min'), null, array('inline' => false));
?>
            <script src="http://canvas-app/app/webroot/js/people.js"></script>

        <div id="example" class="k-content">
            <div id="clientsDb">

                <div id="grid" style="height: 380px"></div>

            </div>

            <style scoped>
                #clientsDb {
                    width: 692px;
                    height: 413px;
                    margin: 30px auto;
                    padding: 51px 4px 0 4px;
                    background: url('http://canvas-app/app/webroot/js/content/web/grid/clientsDb.png') no-repeat 0 0;
                }
            </style>
            
        </div>