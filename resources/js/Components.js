import ReactDOM from 'react-dom';
import React from 'react';

import Notification from './components/Ui/Notification';
import Chat from './components/Ui/Chat';

import LandingCount from './components/Landing/LandingCount';

import DashboardTop from './components/Dashboard/DashboardTop';

import ShopProfile from './components/Shop/ShopProfile';
import ShopCarousel from './components/Shop/ShopCarousel';
import ShopProduct from './components/Shop/ShopProduct';
import ShopRecomendation from './components/Shop/ShopRecomendation';

//* Do theres better way to do this ?  */

if (document.getElementById('Notification')) {
    ReactDOM.render(  <Notification />, document.getElementById('Notification'));
}
if (document.getElementById('Chat')) {
    ReactDOM.render(  <Chat />, document.getElementById('Chat'));
}

if (document.getElementById('LandingCount')) {
    ReactDOM.render(  <LandingCount />, document.getElementById('LandingCount'));
}

if (document.getElementById('DashboardTop')) {
    ReactDOM.render(  <DashboardTop />, document.getElementById('DashboardTop'));
}

if (document.getElementById('ShopRecomendation')) {
    ReactDOM.render(  <ShopRecomendation />, document.getElementById('ShopRecomendation'));
}
if (document.getElementById('ShopProfile')) {
    ReactDOM.render(  <ShopProfile />, document.getElementById('ShopProfile'));
}
if (document.getElementById('ShopCarousel')) {
    ReactDOM.render(  <ShopCarousel />, document.getElementById('ShopCarousel'));
}
if (document.getElementById('ShopProduct')) {
    ReactDOM.render(  <ShopProduct />, document.getElementById('ShopProduct'));
}