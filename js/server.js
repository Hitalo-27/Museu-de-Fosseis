function onOff() {
    document
        .querySelector("#modal")
        .classList
        /*Coloca e tira uma propriedade*/
        .toggle("hide")

    document 
        .querySelector("body")
        .classList
        .toggle("hideScroll")

    document
        .querySelector("#modal")
        .classList
        .toggle("addScroll")

}
