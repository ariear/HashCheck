<!DOCTYPE html>
<html lang="en" data-theme="aqua">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.25.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Arie | Hash CHECKER</title>
</head>
<body class="flex justify-center items-center min-h-screen">
    <div class="border p-4 rounded-lg md:w-max w-[90%]">
        <h2 class="font-semibold text-3xl mb-5">HashCheck</h2>
        <form action="/password-checker/action.php" method="post">
            <div class="flex flex-col md:flex-row">
                <input type="text" placeholder="Hash here" name="hash" class="input input-bordered w-full md:w-[270px] md:mb-0 mb-3" required />
                <input type="text" placeholder="String here" name="string" class="input input-bordered w-full md:w-[270px] md:mx-3 md:mb-0 mb-6" required />
                <button class="btn btn-primary">Compare</button>
            </div>
        </form>
        
        <?php 
            session_start();

            if (isset($_SESSION['status'])) {
        ?>
            <div class="alert shadow-lg mt-7 <?php if ($_SESSION['status'] == 'Hash suitable') { echo 'alert-success'; }else{ echo 'alert-error'; } ?>">
                <div>
                    <?php
                        if ($_SESSION['status'] == 'Hash suitable') {
                            echo '<svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>';
                        }else{
                            echo '<svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>';
                        }
                    ?>
                    <span><?= $_SESSION['status'] ?></span>
                </div>
            </div>
        <?php
                unset($_SESSION['status']);
            }
        ?>
    </div>
</body>
</html>