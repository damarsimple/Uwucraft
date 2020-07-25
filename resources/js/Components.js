import ReactDOM from 'react-dom';
import React from 'react';
import Notification from './components/Ui/Notification';
import Chat from './components/Ui/Chat';
import LandingCount from './components/Landing/LandingCount';
import DashboardTop from './components/Dashboard/DashboardTop';
import Shop from './components/Shop/Shop';
import ShopNavbar from './components/Shop/ShopNavbar';
//* Do theres better way to do this ?  */
if(document.getElementById('ShopNavbar'))
{
    console.log('test');
    ReactDOM.render( <ShopNavbar />, document.getElementById('ShopNavbar'));
}
ReactDOM.render(  <Shop />, document.getElementById('Shop'));
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

