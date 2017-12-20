(function() {

    "use strict";

    var toggles = document.querySelectorAll(".cmn-toggle-switch");

    for (var i = toggles.length - 1; i >= 0; i--) {
        var toggle = toggles[i];
        toggleHandler(toggle);
    };

    function toggleHandler(toggle) {
        toggle.addEventListener( "click", function(e) {
            e.preventDefault();
            (this.classList.contains("active") === true) ? this.classList.remove("active") : this.classList.add("active");
        });
    }

})();


//Волновой Аффект на кнопке
var buttons = document.getElementsByClassName('control_heading_btn'),
    forEach = Array.prototype.forEach;

forEach.call(buttons, function (b) {
    b.addEventListener('click', addElement);
});

function addElement(e) {
    var addDiv  = document.createElement('div'),
        mValue  = Math.max(this.clientWidth, this.clientHeight),
        rect    = this.getBoundingClientRect();
    sDiv    = addDiv.style,
        px      = 'px';

    sDiv.width  = sDiv.height = mValue + px;
    sDiv.left  = e.clientX - rect.left - (mValue / 2) + px;
    sDiv.top   = e.clientY - rect.top - (mValue / 2) + px;

    addDiv.classList.add('pulse');
    this.appendChild(addDiv);
}


//
//
// //Волновой Аффект на пунктах меню
// var buttons = document.getElementsByClassName('menu_bl9_button_1'),
//     forEach = Array.prototype.forEach;
//
// forEach.call(buttons, function (b) {
//     b.addEventListener('click', addElement);
// });
//
// function addElement(e) {
//     var addDiv  = document.createElement('div'),
//         mValue  = Math.max(this.clientWidth, this.clientHeight),
//         rect    = this.getBoundingClientRect();
//     sDiv    = addDiv.style,
//         px      = 'px';
//
//     sDiv.width  = sDiv.height = mValue + px;
//     sDiv.left  = e.clientX - rect.left - (mValue / 2) + px;
//     sDiv.top   = e.clientY - rect.top - (mValue / 2) + px;
//
//     addDiv.classList.add('pulse');
//     this.appendChild(addDiv);
// }
//
// var buttons = document.getElementsByClassName('menu_bl9_button_2'),
//     forEach = Array.prototype.forEach;
//
// forEach.call(buttons, function (b) {
//     b.addEventListener('click', addElement);
// });
//
// function addElement(e) {
//     var addDiv  = document.createElement('div'),
//         mValue  = Math.max(this.clientWidth, this.clientHeight),
//         rect    = this.getBoundingClientRect();
//     sDiv    = addDiv.style,
//         px      = 'px';
//
//     sDiv.width  = sDiv.height = mValue + px;
//     sDiv.left  = e.clientX - rect.left - (mValue / 2) + px;
//     sDiv.top   = e.clientY - rect.top - (mValue / 2) + px;
//
//     addDiv.classList.add('pulse');
//     this.appendChild(addDiv);
// }
//
//
// var buttons = document.getElementsByClassName('menu_bl9_button_3'),
//     forEach = Array.prototype.forEach;
//
// forEach.call(buttons, function (b) {
//     b.addEventListener('click', addElement);
// });
//
// function addElement(e) {
//     var addDiv  = document.createElement('div'),
//         mValue  = Math.max(this.clientWidth, this.clientHeight),
//         rect    = this.getBoundingClientRect();
//     sDiv    = addDiv.style,
//         px      = 'px';
//
//     sDiv.width  = sDiv.height = mValue + px;
//     sDiv.left  = e.clientX - rect.left - (mValue / 2) + px;
//     sDiv.top   = e.clientY - rect.top - (mValue / 2) + px;
//
//     addDiv.classList.add('pulse');
//     this.appendChild(addDiv);
// }
//
// var buttons = document.getElementsByClassName('menu_bl9_button_4'),
//     forEach = Array.prototype.forEach;
//
// forEach.call(buttons, function (b) {
//     b.addEventListener('click', addElement);
// });
//
// function addElement(e) {
//     var addDiv  = document.createElement('div'),
//         mValue  = Math.max(this.clientWidth, this.clientHeight),
//         rect    = this.getBoundingClientRect();
//     sDiv    = addDiv.style,
//         px      = 'px';
//
//     sDiv.width  = sDiv.height = mValue + px;
//     sDiv.left  = e.clientX - rect.left - (mValue / 2) + px;
//     sDiv.top   = e.clientY - rect.top - (mValue / 2) + px;
//
//     addDiv.classList.add('pulse');
//     this.appendChild(addDiv);
// }
//
// var buttons = document.getElementsByClassName('menu_bl9_button_5'),
//     forEach = Array.prototype.forEach;
//
// forEach.call(buttons, function (b) {
//     b.addEventListener('click', addElement);
// });
//
// function addElement(e) {
//     var addDiv  = document.createElement('div'),
//         mValue  = Math.max(this.clientWidth, this.clientHeight),
//         rect    = this.getBoundingClientRect();
//     sDiv    = addDiv.style,
//         px      = 'px';
//
//     sDiv.width  = sDiv.height = mValue + px;
//     sDiv.left  = e.clientX - rect.left - (mValue / 2) + px;
//     sDiv.top   = e.clientY - rect.top - (mValue / 2) + px;
//
//     addDiv.classList.add('pulse');
//     this.appendChild(addDiv);
// }
//
// var buttons = document.getElementsByClassName('menu_bl9_button_6'),
//     forEach = Array.prototype.forEach;
//
// forEach.call(buttons, function (b) {
//     b.addEventListener('click', addElement);
// });
//
// function addElement(e) {
//     var addDiv  = document.createElement('div'),
//         mValue  = Math.max(this.clientWidth, this.clientHeight),
//         rect    = this.getBoundingClientRect();
//     sDiv    = addDiv.style,
//         px      = 'px';
//
//     sDiv.width  = sDiv.height = mValue + px;
//     sDiv.left  = e.clientX - rect.left - (mValue / 2) + px;
//     sDiv.top   = e.clientY - rect.top - (mValue / 2) + px;
//
//     addDiv.classList.add('pulse');
//     this.appendChild(addDiv);
// }
//
// var buttons = document.getElementsByClassName('menu_bl9_button_7'),
//     forEach = Array.prototype.forEach;
//
// forEach.call(buttons, function (b) {
//     b.addEventListener('click', addElement);
// });
//
// function addElement(e) {
//     var addDiv  = document.createElement('div'),
//         mValue  = Math.max(this.clientWidth, this.clientHeight),
//         rect    = this.getBoundingClientRect();
//     sDiv    = addDiv.style,
//         px      = 'px';
//
//     sDiv.width  = sDiv.height = mValue + px;
//     sDiv.left  = e.clientX - rect.left - (mValue / 2) + px;
//     sDiv.top   = e.clientY - rect.top - (mValue / 2) + px;
//
//     addDiv.classList.add('pulse');
//     this.appendChild(addDiv);
// }


