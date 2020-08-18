import React from "react";
import Box from "@material-ui/core/Box";
// import Swiper core and required components
import SwiperCore, {
    Navigation,
    Pagination,
    Scrollbar,
    A11y,
    Autoplay
} from "swiper";

import { Swiper, SwiperSlide } from "swiper/react";
SwiperCore.use([Navigation, Pagination, Scrollbar, A11y, Autoplay]);
// Import Swiper styles
import "swiper/swiper.scss";
import "swiper/components/navigation/navigation.scss";
import "swiper/components/pagination/pagination.scss";
import "swiper/components/scrollbar/scrollbar.scss";
import "swiper/swiper.scss";
export default () => {
    const AutoplayOptions = {
        delay: 2500,
        disableOnInteraction: false
    };
    return (
        <>
            <Box pl={30} pr={30}>
                <Swiper
                    autoplay={AutoplayOptions}
                    spaceBetween={50}
                    slidesPerView={1}
                    navigation
                    pagination={{ clickable: true }}
                    scrollbar={{ draggable: true }}
                >
                    <SwiperSlide>
                        <img
                            alt="S"
                            src="https://dummyimage.com/1318x450/000/56576b"
                        />
                    </SwiperSlide>
                    <SwiperSlide>
                        <img
                            alt="S"
                            src="https://dummyimage.com/1318x450/000/7076cf"
                        />
                    </SwiperSlide>
                    <SwiperSlide>
                        <img
                            alt="S"
                            src="https://dummyimage.com/1318x450/000/303478"
                        />
                    </SwiperSlide>
                    <SwiperSlide>
                        <img
                            alt="S"
                            src="https://dummyimage.com/1318x450/000/56576b"
                        />
                    </SwiperSlide>
                    <SwiperSlide>
                        <img
                            alt="S"
                            src="https://dummyimage.com/1318x450/000/303478"
                        />
                    </SwiperSlide>
                </Swiper>
            </Box>
        </>
    );
};
