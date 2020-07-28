import ReactDOM from 'react-dom';
import React from 'react';
import Notification from './components/Ui/Notification';
import Chat from './components/Ui/Chat';
import LandingCount from './components/Landing/LandingCount';
import Dashboard from './components/Dashboard/Dashboard';
import Shop from './components/Shop/Shop';
import ShopNavbar from './components/Shop/ShopNavbar';
//* Do theres better way to do this ?  */
if(document.getElementById('ShopNavbar'))
{
    ReactDOM.render( <ShopNavbar />, document.getElementById('ShopNavbar'));
}

if(document.getElementById('Shop'))
{
    ReactDOM.render(  <Shop />, document.getElementById('Shop'));
}
if (document.getElementById('Notification')) {
    ReactDOM.render(  <Notification />, document.getElementById('Notification'));
}
if (document.getElementById('Chat')) {
    ReactDOM.render(  <Chat />, document.getElementById('Chat'));
}

if (document.getElementById('LandingCount')) {
    ReactDOM.render(  <LandingCount />, document.getElementById('LandingCount'));
}

if (document.getElementById('Dashboard')) {
    ReactDOM.render(  <Dashboard />, document.getElementById('Dashboard'));
}

