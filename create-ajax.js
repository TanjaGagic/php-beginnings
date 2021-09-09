$(document).ready(function () {
    $('a#button').click(function(){
    $("form").submit(function (event) {
      var formData = {
        author: $("#author").val(),
        book_title: $("#book_title").val(),
        category_id: $("#category_ID").val(),
        description: $("description").val(),
        price: $("price").val(),
        email: $("email").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "create.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        console.log(data);
      });
  
      event.preventDefault();
    });
  })});
