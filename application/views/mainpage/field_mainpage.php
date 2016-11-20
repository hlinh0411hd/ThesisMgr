<div id="content" class="center">
    <div class="container">
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách lĩnh vực nghiên cứu</div>
                <div class="panel-body">
                    <ul class="menu-sidebar list-group">
                        <?php
                            foreach ($fieldList as $field){
                                echo "<li class='list-group-item'><a data-toggle='collapse' data-target='#level$field[fieldId]'>$field[fieldName]</a></li>";
                                echo "<div id='level$field[fieldId]' class='collapse'>";
                                foreach ($subfieldList[$field['fieldName']] as $subfield){
                                    echo "<li class='list-group-item'>";
                                    echo "<a><span>&nbsp;&nbsp;&nbsp;&nbsp;$subfield[subfieldName]</span></a>";
                                    echo "</li>";
                                }
                                echo "</div>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div id="intro" class="col-sm-8">

        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#list-nghien-cuu li > a').click(function(){
            var $ul = $(this).next();
            var $visible = $('#list-nghien-cuu li ul:visible');
            $visible.slideToggle();
            $ul.slideToggle();
            return false;
        });
    });
</script>