
$(function () {
	$('input').iCheck({
		checkboxClass: 'icheckbox_square-blue',
		radioClass: 'iradio_square-blue',
		increaseArea: '20%' // optional
	});

	$('#login_form').submit(function (event){
        var username = $('#username').val();
        var password = $('#password').val();

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange=function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText == "ok"){
                    window.location.replace("mainpage");
                }
            }
        };
        xhttp.open("GET", "user/login/" + username + "/" + password, true);
        xhttp.send();

		event.preventDefault();
	});
});
function load(content, page){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange=function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById(content).innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", page, true);
	xhttp.send();
}


function enableInput(){
	$("input").prop('disabled', false);
	$("textarea").prop('disabled', false);
	$("form button").css("display","block");
}

beforeElement="";
function clicked(element){
	$(beforeElement).css("background","#ffffff");
	$(element).css("background","#e7e7e7");
	beforeElement = element;
}


function addBranch() {
    $.get("researchfunctionteacher/addBranch", function(data, status){
        $('#research_direction').append(data);
    });
}

function addFieldBranch(branch){
    $.get("researchfunctionteacher/addFieldBranch", function(data, status){
        $(branch).append(data);
    });
}

function addSubfieldBranch(branch, fieldId){
    $.get("researchfunctionteacher/addSubfieldBranch/"+fieldId, function(data, status){
        $(branch).append(data);
    });
}

function enableInputTree(id){
    $(id + ' input').prop('disabled', false);
    $(id + ' select').prop('disabled', false);
    $(id + ' button').css('display','');
    $(id + ' .form-group').css('display','');
    $(id + ' #edit').css('display','none');
}

function deleteBranch(branch){
    $(branch).remove();
}

function createNew(form){
    var idNewForm = form + " #researchDirectionName";
    var researchDirectionName = $(idNewForm).val();

}

function changeField(subfield,field){
    $(subfield).empty();
    $(subfield + "+button").attr("onclick","addSubfieldBranch('"+subfield+"',"+$(field).val()+")");
}

function saveTree(researchDirection){
    var researchDirectionName = $(researchDirection + " #researchDirectionName").val();
    var fieldList = [];
    var subfieldList = [];
    $(researchDirection + ' .field').each(function(){
        var id = $(this).val();
        fieldList.push({id:id});
        $('#' + $(this).attr('id') + ' .subfield').each(function () {
            subfieldList.push({id:$(this).val()});
        });
    });
    var data = {
        'researchDirectionName': researchDirectionName,
        'fieldList': fieldList,
        'subfieldList': subfieldList
    };
    console.log(JSON.stringify(data));
    $.post("researchfunctionteacher/saveTree", data, function(data, status){
        load('main','researchfunctionteacher');
    });
}
function updateTree(researchDirection, researchDirectionId){
    var researchDirectionName = $(researchDirection + " #researchDirectionName").val();
    var fieldList = [];
    var subfieldList = [];
    $(researchDirection + ' .field').each(function(){
        var id = $(this).val();
        fieldList.push({id:id});
        $('#' + $(this).attr('id') + ' .subfield').each(function () {
            subfieldList.push({id:$(this).val()});
        });
    });
    var data = {
        'researchDirectionName': researchDirectionName,
        'researchDirectionId': researchDirectionId,
        'fieldList': fieldList,
        'subfieldList': subfieldList
    };
    console.log(JSON.stringify(data));
    $.post("researchfunctionteacher/updateTree", data, function(data, status){
        load('main','researchfunctionteacher');
    });
}

function deleteBranchTree(researchDirectionId){
    var data = {
        'researchDirectionId': researchDirectionId
    };
    alert(researchDirectionId);
    $.post("researchfunctionteacher/deleteTree", data, function(data, status){
        load('main','researchfunctionteacher');
    });
}