<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Thala For a Reason</title>
</head>

<body>

    <div class="flex flex-col justify-center items-center text-center p-4 m-2">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">United Community of <mark class="px-2 text-white bg-red-400 rounded-2xl">THALA</mark></h1>
        <p class="text-lg font-normal text-gray-500 lg:text-xl ">The community where bright people come together and become Thala for a Reason. Opportunity for becoming thala is open for all.</p>
    </div>


    <?php
    include_once 'config.php';
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Get the parameter from the URL
        $searchParam = $_GET['thala'];

        // Prepare and execute the SQL query
        $sql = "SELECT * FROM thala WHERE encoded = '$searchParam'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Parameter exists in the database
            $row = $result->fetch_assoc();
            $status = $row['status'];
            $name = $row['name'];

            if ($status === 'true') {
    ?>
                <div class="flex items-center justify-center text-center p-2">
                    <h1 class="text-5xl font-extrabold"><?php echo $name; ?><small class="ms-3 font-semibold text-gray-500">is Thala for a Reason</small></h1>
                </div>

                <div class="flex justify-center rounded-xl m-2">
                    <video class="max-w-sm rounded-xl p-4 px-6 border-2 border-red-400  " preload="true" loop="true" autoplay="autoplay" playsinline muted id="vid">
                        <source src="thala_meme.mp4" type="video/mp4">
                    </video>
                </div>
                <!-- <audio autoplay>
  <source src="thala_theme.mp3" type="audio/mpeg">
                </audio> -->

                <div class=' mx-auto flex flex-col justify-center items-center'>
                    <input type="text" id="copyMe" name="copyMe" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm m-2 rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 mx-auto w-1/2" value="https://www.thunderdevelops.in/thala-for-a-reason/thala.php?thala=<?= $searchParam ?>" placeholder="link" disabled>
                    <button class='flex items-center justify-center p-0.5 m-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-purple-200  mx-auto' onclick="copyMeOnClipboard()">
                        <span class='flex px-4 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0'>
                            <img src="https://img.icons8.com/external-flatart-icons-flat-flatarticons/16/null/external-link-marketing-seo-flatart-icons-flat-flatarticons.png" />
                            Copy Link
                        </span>
                    </button>
                </div>
    <?php
            } else {
                echo '
            
            <h1 class="flex justify-center items-center text-center text-5xl font-extrabold"><small class="ms-2 font-semibold text-gray-500">Invalid Link </small></h1>
            ';
            }
        } else {
            echo '
            
            <h1 class="flex justify-center items-center text-center text-5xl font-extrabold"><small class="ms-2 font-semibold text-gray-500">Invalid Link </small></h1>
            <a href="/">
            <button class="flex items-center justify-center p-0.5 m-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-purple-200  mx-auto">
                        <span class="flex px-4 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">
                            Home
                        </span>
                    </button>
                    </a>
            ';
        }

        // Close the database connection
        $conn->close();
    }
    ?>


    <footer class="bg-white rounded-lg shadow m-4">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center ">© 2023 <a href="/" class="hover:underline">Thunder Develops</a>. All Rights Reserved.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500  sm:mt-0">
                <li>
                    <a href="https://github.com/Krish-Panchani/" target="_blank" class="flex items-center">
                        <svg class="w-12 h-12 px-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd" />
                        </svg>
                        <h1 class="hover:underline me-4 md:me-6">✨ Designed & Developed by Krish Panchani 💖</h1>
                    </a>
                </li>
            </ul>
        </div>
    </footer>

    <script src="index.js"></script>
</body>

</html>
