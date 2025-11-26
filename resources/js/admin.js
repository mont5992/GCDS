

$(document).ready(function () {

    
    $('#userTable').DataTable({
        processing: true,
        serverSide: true,
        scrollX: true,

        ajax: {
            url: userdataRoute, 
            type: "GET"
        },

        columns: [
            { data: 'first_name' },
            { data: 'last_name' },
            { data: 'school_name' },
            { data: 'user_level' },
            { data: 'country' },
            { data: 'action', orderable: false, searchable: false }
        ],

        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf', 'print', 'colvis'
        ]
    });

});



$(document).on("click", ".editBtn", function () {

    $("#user_id").val($(this).data("id"));
    $("#first_name").val($(this).data("first"));
    $("#last_name").val($(this).data("last"));
    $("#school_name").val($(this).data("school"));
    $("#user_level").val($(this).data("level"));
    $("#country").val($(this).data("country"));

    $("#editModal").fadeIn();
});


$(".close-modal").click(function () {
    $("#editModal").fadeOut();
});


$("#updateForm").submit(function (e) {
    e.preventDefault();

    $.ajax({
        url: updateUserRoute, 
        type: "POST",
        data: {
            _token: csrfToken,
            user_id: $("#user_id").val(),
            first_name: $("#first_name").val(),
            last_name: $("#last_name").val(),
            school_name: $("#school_name").val(),
            user_level: $("#user_level").val(),
            country: $("#country").val(),
        },
        success: function (response) {
            if (response.status) {
                alert(response.message);
                $("#editModal").fadeOut();
                $('#userTable').DataTable().ajax.reload();
            } else {
                alert("Update failed!");
            }
        }
    });
});
