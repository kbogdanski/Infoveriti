$(document).ready(function(){
    
    var appendRegion = $('#append_region');
    var removeRegion = $('#remove_region');
    var addRegions = $('#regions');
    var selectedRegions = $('#selected_regions');
    
    appendRegion.on('click', function(event) {
        if (addRegions.val() !== '0') {
            if (!$('#regions option:selected').hasClass('itemSelected')) {
                selectedRegions.append("<option value='" + addRegions.val() + "'>" + addRegions.val() + "</option>");
                $('#regions option:selected').addClass('itemSelected');          
            }
        }
    });
    
    removeRegion.on('click', function(event) {
        var addRegionsChildren = addRegions.children();
        var deleteRegion = $('#selected_regions option:selected');
        for (i=0; i<addRegionsChildren.length; i++) {
            if (addRegionsChildren.eq(i).val() === deleteRegion.val()) {
                addRegionsChildren.eq(i).removeClass('itemSelected');
                deleteRegion.remove();
            }
        }
    });
    
    
});
