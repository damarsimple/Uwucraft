"use strict";
exports.__esModule = true;
var react_dom_1 = require("react-dom");
var app_1 = require("./app");
var react_1 = require("react");
var serviceWorker = require("./serviceWorker");
react_dom_1["default"].render(react_1["default"].createElement(app_1["default"]), document.getElementById("root"));
serviceWorker.unregister();
