// Display Function  
function display() {
    $.ajax({
      type: "POST",
      url: "/display.php",
      dataType: "text",
    }).done(function (result) {
      $("#table_body").html(result);
    });
    $.ajax({
      type: "POST",
      url: "/display_foot.php",
      dataType: "text",
    }).done(function (result) {
      $("#table_foot").html(result);
    });
  }

// Add Product 
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

// DELETE FUNCTION 
function deletes(val) {
  $.ajax({
    type: "POST",
    url: "/delete.php",
    data: {id: val},
    dataType: "text",
  }).done(function (result) {
    console.log(result)
    display();
  });
}

// Decrease Button FUNCTION 
function dec_btn(val) {
    $.ajax({
      type: "POST",
      url: "/decrease.php",
      data: {id: val},
      dataType: "text",
    }).done(function (result) {
      // console.log(result);
      display();
    });
  }

// Increase Button FUNCTION 
function inc_btn(val) {
    $.ajax({
      type: "POST",
      url: "/increase.php",
      data: {id: val},
      dataType: "text",
    }).done(function (result) {
      // console.log(result);
      display();
    });
  }

// Empty Cart Function 
function empty(){
  $.ajax({
    type: "POST",
    url: "/empty.php",
    dataType: "text",
  }).done(function (result){
    display()
  })
}

