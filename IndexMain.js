/*
CST8285 Assignment_2 external JavaScript
Code by Chengran Sun (041053216)
This JavaScript file is especially for the functions of sort bar and search bar
*/


let roomsArray = [
    {
        id_room: 5, id_price: 60, price: "$60.00", type_room: "single", src: "./images/element_single.jpg", alt: "element single room image", h3: "Element single room",
        p: "Group Eleven Hotel is a hotel located in the recently revitalised centre of Ottawa, Canada. Each hotel " +
            "room features Egyptian cotton bedding.Free Wi- Fi is available in all guest rooms, along with a " +
            "flat - screen television and a desk.Each room has an en - suite bathroom with a shower."
    },
    {
        id_room: 3, id_price: 80, price: "$80.00", type_room: "double", src: "./images/element_double_1.jpg", alt: "element double-1 room image", h3: "Element double-1 room",
        p: "Group Eleven Hotel is a hotel located in the recently revitalised centre of Ottawa, Canada. Each hotel " +
            "room features Egyptian cotton bedding.Free Wi- Fi is available in all guest rooms, along with a " +
            "flat - screen television and a desk.Each room has an en - suite bathroom with a shower."
    },
    {
        id_room: 4, id_price: 90, price: "$90.00", type_room: "double", src: "./images/element_double_2.jpg", alt: "element double-2 room image", h3: "Element double-2 room",
        p: "Group Eleven Hotel is a hotel located in the recently revitalised centre of Ottawa, Canada. Each hotel " +
            "room features Egyptian cotton bedding.Free Wi- Fi is available in all guest rooms, along with a " +
            "flat - screen television and a desk.Each room has an en - suite bathroom with a shower."
    },
    {
        id_room: 6, id_price: 350, price: "$350.00",type_room: "double", src: "./images/executive_suite.jpg", alt: "executive suite image", h3: "Executive suite room",
        p: "Settle in to your Executive Suite. This corner space is your contemporary hotel retreat with " +
            "floor-to-ceiling windows, natural light and impressive views of downtown Ottawa, Rideau Canal and " +
            "Parliament Hill. The living area offers a loveseat, two wing chairs and a comfortable king Murphy bed."
    },
    {
        id_room: 7, id_price: 300, price: "$300.00", type_room: "single", src: "./images/junior_suite.jpg", alt: "junior suite image", h3: "Junior suite",
        p: "Gatineau Hills and Byward Market spread out before you from the vantage of your Junior Suite. " +
            "Located on the corners of the hotel, these bright and airy suites offer exhilarating panoramic views " +
            "of Ottawa seen through dramatic floor-to-ceiling windows."
    },
    {
        id_room: 9, id_price: 220, price: "$220.00", type_room: "double", src: "./images/traditional_2.jpg", alt: "traditional-2 room image", h3: "Traditional-2 room",
        p: "Enter a personal oasis of relaxation, designed to elevate your mood and enhance productivity. Our " +
            "Traditional Rooms feature expansive floor-to-ceiling windows that look out over the historic Byward " +
            "Market while letting natural light illuminate the room."
    },
    {
        id_room: 8, id_price: 200, price: "$200.00", type_room: "double", src: "./images/traditional_1.jpg", alt: "traditional-1 room image", h3: "Traditional-1 room",
        p: "Enter a personal oasis of relaxation, designed to elevate your mood and enhance productivity. Our " +
            "Traditional Rooms feature expansive floor-to-ceiling windows that look out over the historic Byward " +
            "Market while letting natural light illuminate the room."
    },
    {
        id_room: 2, id_price: 150, price: "$150.00", type_room: "double", src: "./images/deluxe.jpg", alt: "Deluxe room image", h3: "Deluxe room",
        p: "Spacious, bright, and equipped with all you need to feel your best, Deluxe Rooms are personal havens " +
            "of relaxed productivity. Gaze out over the city through floor-to-ceiling windows, or recline in a " +
            "plush, upholstered chair and read the paper."
    },
    {
        id_room: 1, id_price: 100, price: "$100.00", type_room: "single", src: "./images/corner.jpg", alt: "Corner room image", h3: "Corner room",
        p: " Striking panoramic views make our Corner Rooms bright, airy havens that instantly uplift your " +
            "spirits. With floor-to-ceiling windows framing Rideau Canal or city views, relax in one of two wing " +
            "chairs, stretch your legs out on an ottoman."
    }
]

refreshCSS = () => {
    let links = document.getElementsByTagName('link');
    for (let i = 0; i < links.length; i++) {
        if (links[i].getAttribute('rel') == 'stylesheet') {
            let href = links[i].getAttribute('href')
                .split('?')[0];

            let newHref = href + '?version='
                + new Date().getMilliseconds();

            links[i].setAttribute('href', newHref);
        }
    }
}

function showList(room) {
    for (item of room) {
        let listItem = document.createElement("div");
        if (item.type_room == "double") {
            listItem.setAttribute("class", "room show double");
        } else {
            listItem.setAttribute("class", "room show single");
        }
        
        let img = document.createElement("img");
        img.setAttribute("src", item.src);
        img.setAttribute("alt", item.alt);
        let h3 = document.createElement("h3");
        h3.textContent = item.h3;
        let p = document.createElement("p");
        p.textContent = item.p;
        let inside_div = document.createElement("div");
        inside_div.setAttribute("class", "inside_div");
        let span = document.createElement("span");
        span.textContent = item.price;

        let bookingButton = document.createElement("input");
        bookingButton.type = "button";
        bookingButton.id = item.id_room;
        changeButton(bookingButton);

        document.querySelector(".room_list").appendChild(listItem);
        listItem.appendChild(img);
        listItem.appendChild(h3);
        listItem.appendChild(p);
        listItem.appendChild(inside_div);
        inside_div.appendChild(span);

        inside_div.appendChild(bookingButton);
    }
}

function sortList() {

    if (document.getElementById("name").selected) {

        roomsArray.sort((item1, item2) => { return item1.id_room - item2.id_room });
        document.querySelector(".room_list").innerHTML = "";
        showList(roomsArray);
        refreshCSS();

    }
    else {

        roomsArray.sort((item1, item2) => { return item1.id_price - item2.id_price });
        document.querySelector(".room_list").innerHTML = "";
        showList(roomsArray);
        refreshCSS();

    }
}

let sortButton = document.querySelector("#sort_button");
sortButton.addEventListener("click", sortList);


let searchButton = document.querySelector("#search_button");
searchButton.addEventListener("click", sortList_2);

let searchEnter = document.getElementById("search_text");
searchEnter.addEventListener("keydown", sortList_2);

function sortList_2() {

    const index = roomsArray.findIndex(object => {
        return object.h3.toLowerCase() === document.querySelector("#search_text").value.toLowerCase();
    });
    console.log(index);

    let room = roomsArray[index];
    console.log(room.id_room);

    document.querySelector(".room_list").innerHTML = "";
    let listItem = document.createElement("div");
    listItem.setAttribute("class", "room one_room show");
    let img = document.createElement("img");
    img.setAttribute("src", room.src);
    img.setAttribute("alt", room.alt);
    let h3 = document.createElement("h3");
    h3.textContent = room.h3;
    let p = document.createElement("p");
    p.textContent = room.p;
    let inside_div = document.createElement("div");
    inside_div.setAttribute("class", "inside_div");
    let span = document.createElement("span");
    span.textContent = room.price;
    document.querySelector(".room_list").appendChild(listItem);
    listItem.appendChild(img);
    listItem.appendChild(h3);
    listItem.appendChild(p);
    listItem.appendChild(inside_div);
    inside_div.appendChild(span);

    refreshCSS();
}