function display() {
    $.ajax({
      type: "POST",
      url: "/display.php",
      dataType: "text",
    }).done(function (result) {
      $("#table_body").html(result);
    });
  }

display()

function add_product(val){
    $.ajax({
        type: "POST",
        url: "/add_product.php",
        data: "value=" + val,
        dataType: "text",
      }).done(function (result) {
        display()
      });
}

// DELETE TODO FUNCTION 
function deletes(val) {
    $.ajax({
      type: "POST",
      url: "/delete.php",
      data: "id=" + val,
      dataType: "text",
    }).done(function (result) {
      display();
    // console.log(result);
    });
  }