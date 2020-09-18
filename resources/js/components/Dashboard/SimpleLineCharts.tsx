import React, { useEffect } from "react";
import { Line } from "react-chartjs-2";
import { ISimpleLineCharts } from "../../type/type";
import { GET_SYSTEMACTIVITYLOGS } from "../../api/graphql";
import { useQuery } from "@apollo/client";
const dateees = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
        {
            label: "Redis",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(240, 52, 52, 1)",
            borderCapStyle: "butt",
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: "miter",
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [65, 59, 80, 81, 56, 55, 100]
        },
        {
            label: "Mysql",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(44, 130, 201, 1)",
            borderCapStyle: "butt",
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: "miter",
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [65, 12, 32, 40, 44, 12, 12]
        },
        {
            label: "Spigot",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(250, 216, 89, 1)",
            borderCapStyle: "butt",
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: "miter",
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [12, 55, 33, 23, 67, 23, 83]
        }
    ]
};
interface Charts {
    data: ISimpleLineCharts;
}
interface SystemActivityLog {
    type: string;
    online: boolean;
    ping: number;
    data: number;
    exception?: string;
    updated_at: string;
}
const makeData = (data: SystemActivityLog) => {
    return {
        label: "Spigot",
        fill: false,
        lineTension: 0.1,
        backgroundColor: "rgba(75,192,192,0.4)",
        borderColor: "rgba(250, 216, 89, 1)",
        borderCapStyle: "butt",
        borderDash: [],
        borderDashOffset: 0.0,
        borderJoinStyle: "miter",
        pointBorderColor: "rgba(75,192,192,1)",
        pointBackgroundColor: "#fff",
        pointBorderWidth: 1,
        pointHoverRadius: 5,
        pointHoverBackgroundColor: "rgba(75,192,192,1)",
        pointHoverBorderColor: "rgba(220,220,220,1)",
        pointHoverBorderWidth: 2,
        pointRadius: 1,
        pointHitRadius: 10,
        data: [12, 55, 33, 23, 67, 23, 83]
    };
};
function SimpleLineCharts() {
    const { loading, error, data } = useQuery(GET_SYSTEMACTIVITYLOGS);
    useEffect(() => {
        if (!loading && data) {
            data.systemactivitylogs.edges.map((e, i) => {
                console.log(e.node);
            });
        }
    }, [data]);
    return <Line data={dateees} />;
}

export default SimpleLineCharts;
