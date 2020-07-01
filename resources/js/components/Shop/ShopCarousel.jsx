import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import "react-responsive-carousel/lib/styles/carousel.min.css"; // requires a loader
import { Carousel } from 'react-responsive-carousel';
class ShopCarousel extends Component {

    render() {
        return (
            <div className="container-fluid w-75">
        <Carousel showThumbs={false} showArrows={false} autoPlay infiniteLoop showStatus={false}>
        <div key="slide1">
            <img src="https://imagekit.io/static/img/newPages/homepage-wave-bg.svg" />
        </div>
        <div key="slide2">
            <img src="https://imagekit.io/static/img/newPages/homepage-wave-bg.svg" />
        </div>
        <div key="slide3">
            <img src="https://imagekit.io/static/img/newPages/homepage-wave-bg.svg" />
        </div>
        <div key="slide4">
            <img src="https://imagekit.io/static/img/newPages/homepage-wave-bg.svg" />
        </div>
        <div key="slide5">
            <img src="https://imagekit.io/static/img/newPages/homepage-wave-bg.svg" />
        </div>
        <div key="slide6">
            <img src="https://imagekit.io/static/img/newPages/homepage-wave-bg.svg" />
        </div>
    </Carousel>
    </div>

)}
}

if(document.getElementById('ShopCarousel'))
{
    ReactDOM.render(<ShopCarousel />, document.getElementById('ShopCarousel'));
}

export default ShopCarousel;

