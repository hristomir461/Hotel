let id = $("input[name*='room_id']")
id.attr("readonly","readonly");


$(".btnedit").click( e =>{
    let textvalues = displayData(e);

    ;
    let room_name = $("input[name*='room_name']");
    let room_price = $("input[name*='room_price']");
    let bed_price = $("input[name*='bed_price']");
    let breakfast_price = $("input[name*='breakfast_price']");
    let halfBoard_price = $("input[name*='halfBoard_price']");
    let fullBoard_price = $("input[name*='fullBoard_price']");

    id.val(textvalues[0]);
    room_name.val(textvalues[1]);
    room_price.val(textvalues[2].replace("$", ""));
    bed_price.val(textvalues[3].replace("$", ""));
    breakfast_price.val(textvalues[4].replace("$", ""));
    halfBoard_price.val(textvalues[5].replace("$", ""));
    fullBoard_price.val(textvalues[6].replace("$", ""));
});


function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
        if(value.dataset.id == e.target.dataset.id){
           textvalues[id++] = value.textContent;
        }
    }
    return textvalues;

}