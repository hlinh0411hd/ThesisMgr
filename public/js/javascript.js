$(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
    });
});
$(function () {
	$('input').iCheck({
		checkboxClass: 'icheckbox_square-blue',
		radioClass: 'iradio_square-blue',
		increaseArea: '20%' // optional
	});

    $(document).on('click', function(event) {
        if (!$(event.target).closest('#login').length) {
            setTimeout(function(){
                load('login','index');
            }, 50);
        }
    });
    //
    // $('body').click(function(){
	 //    setTimeout(function(){
	 //        load('login','index');
    //     }, 500);
    // });
    //
    // $('#login').click(function(){
	 //    return false;
    // });
});



function login(){
    var username = $('#username').val();
    var password = $('#password').val();

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == "ok"){
                window.location.replace("mainpage");
            } else {
                document.getElementById("loginError").innerHTML = "Tên đăng nhập hoặc mật khẩu sai";
            }
        }
    };
    xhttp.open("GET", "user/login/" + username + "/" + password, true);
    xhttp.send();

};

function load(content, page){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange=function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById(content).innerHTML = this.responseText;
            $(document).ready(function(){
                $('#myTable').DataTable();
            });
		}
	};
	xhttp.open("GET", page, true);
	xhttp.send();
}


function enableInput(){
    $("#chinhsua-info").css("display","none");
    $("#luu-info").css("display","block");
	$("#btn-avatar").css("display","block");
    $("input").prop('disabled', false);
    $("textarea").prop('disabled', false);
    $("select").prop('disabled', false);
}

function findText(){
	var searchText = $('#searchText').val();
	if(searchText.toString().length > 0){
		load('content','Mainpage/result/' + searchText);
	}
}

function updateInfoTeacher(){
    var teacherName = $('#name').val();
    var facultyId = $('#facultyId').val();
    var departmentId = $('#departmentId').val();
    var laboratoryId = $('#laboratoryId').val();
    var teacherMail = $('#email').val();
    var teacherPhone = $('#phone').val();
    var teacherInfo = $('#info').val();
    var data = {
        'teacherName': teacherName,
        'facultyId': facultyId,
        'departmentId': departmentId,
        'laboratoryId': laboratoryId,
        'teacherMail': teacherMail,
        'teacherPhone': teacherPhone,
        'teacherInfo': teacherInfo
    };
    $.get("teacher/updateInfo", data, function(){
        load('main','Teacher/info');
    });
}

function updateInfoStudent(){
    var studentName = $('#name').val();
    var studentGender = $('input#gender:checked').val();
    var studentBirthday = $('#birthday').val();
    var studentClass = $('#class').val();
    var studentPhone = $('#phone').val();
    var studentMail = $('#mail').val();
    var facultyId = $('#facultyId').val();
    var consultant = $('#consultantId').val();
    var data = {
        'studentName': studentName,
        'studentGender': studentGender,
        'studentBirthday': studentBirthday,
        'studentClass': studentClass,
        'studentPhone': studentPhone,
        'studentMail': studentMail,
        'facultyId': facultyId,
        'consultant': consultant
    };
    console.log(JSON.stringify(data));
    $.get("student/updateInfo", data, function(){
        load('main','Student/info');
    });
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
        alert(data);
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
    $.post("researchfunctionteacher/deleteTree", data, function(data, status){
        load('main','researchfunctionteacher');
    });
}


function searchStudent(){
    var info = $('#info').val();
    var type = $('#type option:selected').val();
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange=function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("resultSearch").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "StudentFunctionFaculty/search/" + info + "/" + type, true);
    xhttp.send();

};

function allowStudent(studentId){
    if ($('#checkAllow'+studentId).prop("checked") == true){
        $.get("studentfunctionfaculty/addAnAllowedStudent/" + studentId,function(data,status){
            bootbox.alert({
                message: "Đã cho phép đăng ký",
                size: 'small'
            });
        });
    } else {
        $.get("studentfunctionfaculty/deleteAnAllowedStudent/" + studentId, function(data, status){
            bootbox.alert({
                message: "Đã hủy cho phép đăng ký",
                size: 'small'
            });
        });
    }
}


function checkPrinted(thesisId){
    if ($('#printed'+thesisId).prop("checked") == true){
        $.get("thesis/checkprinted/" + thesisId,function(data,status){
            bootbox.alert({
                message: "Đã nộp quyển",
                size: 'small'
            });
        });
    } else {
        $.get("thesis/uncheckprinted/" + thesisId, function(data, status){
            bootbox.alert({
                message: "Đã hủy nộp quyển",
                size: 'small'
            });
        });
    }
}
function saveTimeRegister(facultyId){
    var startDate = $('#startDate').val();
    var endDate = $('#endDate').val();
    var startTime = $('#startTime').val();
    var endTime = $('#endTime').val();
    var data = {
        'facultyId': facultyId,
        'startDate': startDate,
        'startTime': startTime,
        'endDate': endDate,
        'endTime': endTime
    };
    console.log(JSON.stringify(data));
    $.get("faculty/saveTimeRegister", data, function(data, status){
        bootbox.alert({
            message: "Đặt giờ thành công",
            size: 'small'
        });
        load('main', 'faculty/thesisregister');
    })
}
function showHint(id, controller){
    var teacherName = $("#" + id).val();
    $("#" + id + "Id").val("0");
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange=function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(id + "List").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", controller + "/searchByName/" + id + "/" + teacherName, true);
    xhttp.send();
}

function addValue(id, value, valueId){
    $("#" + id).val(value);
    $("#" + id + "Id").val(valueId);
}

function acceptThesis(thesisId){
    $.get("thesis/accept/" + thesisId, function (){
        bootbox.alert({
            message: "Đã chấp nhận",
            size: 'small'
        });
        load('main','pagination?page=thesis&condition=tethesis');
    });
}

function denyThesis(thesisId){
    $.get("thesis/deny/" + thesisId, function (){
        bootbox.alert({
            message: "Đặt không chấp nhận",
            size: 'small'
        });
        load('main','pagination?page=thesis&condition=tethesis');
    });
}

function exportRequest(requestId){
    $.get("request/exportRequest/" + requestId, function(){
        window.location.replace("faculty/exportThesis");
        load('main','request');
    });
}

function confirmRequest(requestId){
    $.get("request/confirmRequest/" + requestId, function(){
        load('main','request');
    });
}

function denyRequest(requestId){
    $.get("request/denyRequest/" + requestId, function(){
        load('main','request');
    });
}

function checkedProtectionFile(thesisId){
    $.get("thesis/checkedProtectionFile/" + thesisId);
}

function remindProtectionFile(){
    $.get("thesis/remindProtectionFile", function(){
        bootbox.alert({
            message: "Đã thông báo",
            size: 'small'
        });
    });
}

function addCouncilRow(){
    $.get("council/addCouncilRow", function (data, status){
        $('#main').append(data);
    });
}

function addCouncil(id){
    var teacherId = $("#" + id + " #teacherId").val();
    var position = $("#" + id + " #position").val();
    var note = $("#" + id + " #note").val();
    var data ={
        'teacherId':teacherId,
        'position':position,
        'note':note
    };
    $.get("council/addCouncil", data, function(){
        load('main','council');
    });
}

function addReviewerBranch(){
    $.get("reviewer/addReviewerBranch", function (data, status){
        $('#listTeacher').append(data);
    });
}


function addReviewer(id){
    var teacherId = $("#" + id + " #teacherId").val();
    var thesisId = $("#thesisId").val();
    var data ={
        'teacherId':teacherId,
        'thesisId':thesisId
    };
    $.get("reviewer/addReviewer", data, function(){
        load('main','Thesis/detail/'+thesisId);
    });
}

function deleteCouncil(councilId){
    $.get("council/deleteCouncil/"+councilId, function(){
        load('main','council');
    });
}

function deleteReviewer(reviewerId, thesisId){
    $.get("reviewer/deleteReviewer/"+reviewerId, function(){
        load('main','Thesis/detail/'+thesisId);
    });
}

function editReviewer(thesisId){
    var n = $('#reviewer textarea').length;
    for (var i = 0; i < n; i++){
        var data = {
            'reviewerId':$('#reviewer textarea')[i].id,
            'reviewer':$('#reviewer textarea')[i].value
        };
        $.get("reviewer/updateReviewer", data);
    }
    load('main','Thesis/detail/'+thesisId);
}

function addMark(){
    var thesisId = $('#thesisId').val();
    var reviewerMark = $('#reviewerMark').val();
    var councilMark = $('#councilMark').val();
    var teacherMark = $('#teacherMark').val();
    var data = {
        'thesisId': thesisId,
        'reviewerMark': reviewerMark,
        'councilMark': councilMark,
        'teacherMark': teacherMark
    };
    $.get("mark/add", data, function(){
        load('main','Thesis/detail/'+thesisId);
    })
}

function checkuser(){
    var ms = $('#ms').val();
    var pass = $('#pass').val();
    $.get('user/checkuser/' + ms + "/" + pass, function(data, status){
        alert(data);
        if (data == 0){
            bootbox.alert({
                message: "Mật khẩu sai",
                size: 'small'
            });
        } else
        load('main', 'user/changePass');
    });
}

function changePass(){
    var newpass = $('#newpass').val();
    if (newpass.length < 8 ) {
        bootbox.alert({
            message: "Mật khẩu ít nhất 8 ký tự",
            size: 'small'
        });
    } else {

        var repass = $('#repass').val();
        if (newpass != repass){
            bootbox.alert({
                message: "Nhập lại mật khẩu không trùng",
                size: 'small'
            });
        } else {
            $.get('user/changeNewPassword/' + newpass, function(data, status){
                bootbox.alert({
                    message: "Thay đổi thành công",
                    size: 'small'
                });
                window.location.replace("mainpage");
            });
        }
    }
}

function exportThesis(){
    window.location.replace("faculty/exportThesis");
}
function exportThesisList(){
    window.location.replace("faculty/exportThesis");
}

function protect(){
    $.get('faculty/protect', function(){
        bootbox.alert({
            message: "Đã gửi thông báo",
            size: 'small'
        });
    });
}
