import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import "react-responsive-carousel/lib/styles/carousel.min.css"; // requires a loader
import { Carousel } from 'react-responsive-carousel';
class ShopCarousel extends Component {
    render() {
        return (
            <div className="container-fluid w-75 shadow-sm p-3 mb-5 bg-white rounded">
        <Carousel showThumbs={false} showArrows={false} autoPlay infiniteLoop showStatus={false}>
        <div key="slide1">
            <img src="https://cdn.discordapp.com/attachments/709042003744391188/738681348813881384/gotem.png" />
        </div>
        <div key="slide2">
            <img src="https://cdn.discordapp.com/attachments/709042003744391188/738681348813881384/gotem.png" />
        </div>
        <div key="slide3">
            <img src="https://cdn.discordapp.com/attachments/709042003744391188/738681348813881384/gotem.png" />
        </div>
        <div key="slide4">
            <img src="https://cdn.discordapp.com/attachments/709042003744391188/738681348813881384/gotem.png" />
        </div>
        <div key="slide5">
            <img src="https://cdn.discordapp.com/attachments/709042003744391188/738681348813881384/gotem.png" />
        </div>
        <div key="slide6">
            <img src="https://cdn.discordapp.com/attachments/709042003744391188/738681348813881384/gotem.png" />
        </div>
    </Carousel>
    </div>

)}
}
export default ShopCarousel;

