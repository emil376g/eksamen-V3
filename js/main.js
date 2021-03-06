$(document).ready(function () {
    //on click function
    $(".nav-item").on("click", function (event) {
        //prevent the jump to top event
        event.preventDefault();
        //looking for the class active
        if ($(".nav-item").hasClass("active")) {
            $(".nav-item").removeClass("active");
        }
        $(this).addClass("active");
    })

    //on click function
    $(".nav-link").on("click", function (event) {

        //looking if the link is logout because then we dont want to prevent default event
        if ($(this).text() != "logout") {
            //else we are assuming that it is a ajax element
            //then we prevent the jump to top event
            event.preventDefault();
            if ($(this).text() == "Produkter") {
                var scrolling = $("main").height();
                window.scrollTo(0, scrolling)
            } else {
                //ajax load function
                //the load i am using takes us into the folder include then it takes what i have taped on and then ajax it
                $("#ajax-content").load("include/" + this.text + "-ajax.php", function (responseTxt, statusTxt, xhr) {
                    //if it success
                    if (statusTxt == "success") {}
                    //and if there are an error
                    else if (statusTxt == "error") {
                        console.log("Error: " + xhr.status + ": " + xhr.statusText);
                    }
                });
            }
        } else {
            console.log($(this).text());
            console.log(event.isDefaultPrevented())
            window.location.href = "include/logout.php"

        }
    });

    //update menu
    $("button").click(function (event) {
        //prevent the jump top event
        event.preventDefault();
        //finden children .update and slide it down
        $(this).children(".update").slideDown("slow");
    });
    $(".rediger").hide();
    $(".læs-mere").on("click", function (event) {
        event.preventDefault();
        $(this).siblings(".rediger").slideToggle();
        if ($(this).siblings(".card-text").height() == 70) {
            $(this).siblings(".card-text").css("height", "auto");
        } else {
            $(this).siblings(".card-text").css("height", "70px");
        }
    })
})  
