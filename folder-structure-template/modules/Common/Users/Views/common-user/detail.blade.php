<div id="assigned-role-detail">
    
    <div id="assigned-role-grid" class="mt-3"></div>
</div>

<script type="text/x-kendo-template" id="partnew-status-template">
	<div class="editable-fields text-inputs">
		Test
		<span class="k-icon k-i-arrow-s" style="float:right"></span>
	</div>
</script>

<script type="text/x-kendo-template" id="active-cost-center-template">
    <table>
        <tr>
            <td width=100px>#= data.cost_center_code #</td>
            <td width=100px>#= data.cost_center_desc #</td>
        </tr>
    </table>
</script>

<script> var main_url = "assigned-role"; </script>

@include('assigned-role.assets.observable')
@include('assigned-role.assets.grid')

<script>
	kendo.bind($('#assigned-role-detail'), vm);
</script>