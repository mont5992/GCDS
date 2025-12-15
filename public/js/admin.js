

    $(document).ready(function() {
        $('#userTable').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,

            
            lengthMenu: [
                [10, 25, 50, 100, 250, 500, -1],
                [10, 25, 50, 100, 250, 500, "All"]
            ],

            ajax: {
                url: userdataRoute,
                type: "GET",
                data: function(d) {
                    d.school_name = $('#schoolFilter').val();
                }
            },

            columns: [
                { data: 'first_name' },
                { data: 'last_name' },
                { data: 'school_name' },
                { data: 'user_level' },
                { data: 'account_level' },
                { data: 'country' },
                { data: 'action', orderable: false, searchable: false },
                { data: 'export_students', orderable: false, searchable: false }
            ],

            

           
            dom: 'lBfrtip', 
            buttons: ['copy', 'excel', 'pdf', 'print']
        });

        $('#schoolFilter').on('change', function() {
            $('#userTable').DataTable().ajax.reload();
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
            
                Swal.fire({
                    icon: 'success',
                    title: 'Updated!',
                    text: response.success,
                    timer: 2000,
                    showConfirmButton: false
                });

                // Close modal & reload DataTable
                $("#editModal").fadeOut();
                $('#userTable').DataTable().ajax.reload();
            },
            error: function (xhr, status, error) {
            
                let message = "Update failed!";
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    // Collect validation errors if any
                    message = Object.values(xhr.responseJSON.errors).flat().join("\n");
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: message
                });
            }
        });
    });

