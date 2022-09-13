<table class="table table-striped table-bordered table-condensed">
    <thead>
    <tr>
        <th>Название</th>
        <th>Ссылка</th>
        <th>&nbsp</th>
    </tr>
    </thead>
    <tbody>
        <?php
        foreach($pages as $page) {
            echo '<tr>
                    <td>'.$page->name.'</td>
                    <td>'.$page->slug.'</td>
                    <td><button type="button" pagelink="/contenido/'.$page->slug.'" class="SelectLink btn btn-primary" data-dismiss="modal"  onclick="selectPage(this)">выбрать</button>
                    </td>
                 </tr>';
        }

        ?>
    </tbody>
</table>

<script>
    function selectPage(pageelement) {
        var pagelink = $( pageelement ).attr('pagelink');
        console.log(pagelink);
        $( "input#menu-link" ).val( pagelink );
    }
</script>