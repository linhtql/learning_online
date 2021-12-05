$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id, url) {
    if (confirm("Bạn có thực sự muốn xoá ?")) {
        $.ajax({
            type: "DELETE",
            datatype: "JSON",
            data: { id },
            url: url,
            success: function (result) {
                if (result.error === false) {
                    alert(result.message);
                    location.reload();
                } else {
                    alert("Xoá không thành công!");
                }
            },
        });
    }
}

$("#image").change(function () {
    const form = new FormData();
    form.append("file", $(this)[0].files[0]);

    $.ajax({
        processData: false,
        contentType: false,
        type: "POST",
        data: "JSON",
        data: form,
        url: "/upload/services",
        success: function (res) {
            if (res.error === false) {
                $("#image_show").html(
                    '<a href="' +
                        res.url +
                        '" target="_blank">' +
                        '<img src="' +
                        res.url +
                        '" width="100px"></a>'
                );

                $("#thumb").val(res.url);
            } else {
                alert("Hình như ảnh này có rồi, bạn kiếm ảnh khác đi!");
            }
        },
    });
});