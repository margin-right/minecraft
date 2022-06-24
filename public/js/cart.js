function cartAdd(id){
    let count = document.getElementById(id).value;
    $.ajax({
        type: "POST",
        url: "/cart/add",
        dataType: 'text',
        data:{"id": id, "count": count, "_token": document.getElementsByName('_token')[0].value},
        success: function(data) {
            document.getElementById('alert').innerHTML = `
            <div class="rounded-0 alert alert-success">
                <div class="container">${data}</div>
            </div>
            `
            setTimeout(()=>{document.getElementById('alert').innerHTML = ''}, 3000)
        }
    })
}
