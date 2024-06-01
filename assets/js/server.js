$(function () {
  //Clear all text fields
  function clearFields(className = "", Id = "") {
    $(`.${className}`).val("");

    $(`#${Id}`).val("");

    $(`#${Id}`).focus();
  }

  //
  $(".select_classroom").load("Core/select_loaders.php");

  //
  $("#btn_save_new_classroom").click(function () {
    let classroom_name = $("#new_classroom_name").val();
    let classroom_size = $("#new_classroom_size").val();

    $.post(
      "controllers/classroom/store.php",
      { classroom_name, classroom_size },
      function (data) {
        let response = JSON.parse(data);

        if (response.code == 200) {
          alert(response.message);
          clearFields("form-control", "new_classroom_name");
        } else {
          alert(response.message);
        }
      }
    );
  });

  //
  $("#btn_set_admission_fee").click(function () {
    let classrom_id = $("#select_classroom_admission_fee :selected").attr("id");
    let amount = $("#txt_admission_fee_amount").val();

    //alert(`${classrom_id}  ${amount}`)
  });

  //
  $("#btn_new_Student_registatrion").click(function () {
    let full_name = $("#new_student_fullname").val();
    let dob = $("#new_student_dob").val();
    let residence = $("#new_student_residence_address").val();
    let last_school = $("#new_student_last_school_attended").val();
    let parent_name = $("#new_student_parent_guardian_name").val();
    let parent_telno = $("#new_student_parent_guardian_telno").val();
    let class_admiitted = $("#new_student_class_admitted :selected").attr("id");

    let q = confirm("Save student records?");

    if (q) {
      $.post(
        "controllers/student/store.php",
        {
          full_name,
          dob,
          residence,
          last_school,
          parent_name,
          parent_telno,
          class_admiitted,
        },
        function (data) {

          let response = JSON.parse(data);

          alert(response.message);
        }
      );
    }
  });


  //
  $('#btn_set_admission_fee').click(function(){
    let classroom_id = $("#select_classroom_admission_fee :selected").attr("id");
    let fee = $('#txt_admission_fee_amount').val();

    $.post('/map_admission_fee',{classroom_id, fee},function(response){
      let data = JSON.parse(response)

      if(data.status_code==200){
        alert(data.message);
        $('#txt_admission_fee_amount').val('');
        return false;
      }
      
      alert(data.message);
    })
  });

  //
  $('#btn_set_school_fee').click(function(){
    let classroom_id = $("#select_classroom_school_fee :selected").attr("id");
    let fee = $('#txt_school_fee_amount').val();

    $.post('/map_aschool_fee',{classroom_id, fee},function(response){
      let data = JSON.parse(response)


      if(data.status_code==200){
        alert(data.message);
        $('#txt_school_fee_amount').val('');
        return false;
      }
      
      alert(data.message);
    })
  });


  //
});
