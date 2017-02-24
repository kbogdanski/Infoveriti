$(document).ready(function(){
    
    var appendRegion = $('#append_region');
    var removeRegion = $('#remove_region');
    var appendBranch = $('#append_branch');
    var removeBranch = $('#remove_branch');
    var addRegions = $('#regions');
    var branches = $('#branches');
    var subbranches = $('#subbranches');
    var selectedRegions = $('#selected_regions');
    var selectedBranches = $('#selected_branches');
    
    var loadSubbranches = function (subbranchesList) {
        subbranches.empty();
        var newElement = $("<option value='0'>-- wybierz --</option>");
        newElement.appendTo(subbranches);
        var selectedBranchesChildren = selectedBranches.children();
        for (i=0; i<subbranchesList.length; i++) {
            newElement = $("<option value='" + subbranchesList[i].cpv + "'>" + subbranchesList[i].podbranza + "</option>");
            newElement.appendTo(subbranches);
            for (j=0; j<selectedBranchesChildren.length; j++) {
                if (selectedBranchesChildren.eq(j).val() === subbranchesList[i].cpv) {
                    newElement.addClass('itemSelected');
                }
            }
        }
    };
    
    branches.on('change', function(event) {
        var chosenBranche = $('#branches option:selected');
        var branche_id = chosenBranche.attr('data-id');
        
        $.ajax({
            url: "/getSubbranches",
            method: "POST",
            data: {branche_id: branche_id}
        })
                .done(function (data) {
                    //do when will be OK
                    podbranze = JSON.parse(data);
                    loadSubbranches(podbranze);
                })
                .fail(function () {
                    //do when will be  NOT OK
                    console.log('Błąd podczas odbierania danych JSON');
                })
                .always(function () {
                    //do always
                });
    });
    
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
    
    appendBranch.on('click', function(event) {
        if (branches.val() !== '0' ) {
            if (subbranches.val() === '0') {
                addBranch = $('#branches option:selected');
                if (!addBranch.hasClass('itemSelected')) {
                    selectedBranches.append("<option value='" + addBranch.val() + "'>" + addBranch.html() + "</option>");
                    addBranch.addClass('itemSelected');          
                }
            } else {
                addSubbranche = $('#subbranches option:selected');
                if (!addSubbranche.hasClass('itemSelected')) {
                    selectedBranches.append("<option value='" + addSubbranche.val() + "'>- " + addSubbranche.html() + "</option>");
                    addSubbranche.addClass('itemSelected');
                }
            }
        }
    });
    
    removeBranch.on('click', function(event) {
        var branchesChildren = branches.children();
        var subbranchesChildren = subbranches.children();
        var deleteBranch = $('#selected_branches option:selected');
        var del = false;
        if (deleteBranch.val().length < 3) {
            for (i=0; i<branchesChildren.length; i++) {
                if (branchesChildren.eq(i).val() === deleteBranch.val()) {
                    branchesChildren.eq(i).removeClass('itemSelected');
                    deleteBranch.remove();
                    del = true;
                    break;
                }
            }
        } else {
            for (i=0; i<subbranchesChildren.length; i++) {
                if (subbranchesChildren.eq(i).val() === deleteBranch.val()) {
                    subbranchesChildren.eq(i).removeClass('itemSelected');
                    deleteBranch.remove();
                    del = true;
                    break;
                }
            }
            if (del === false) {
                deleteBranch.remove();
            }
        }
    });
   
    
});
