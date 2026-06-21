<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,800;1,700&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #EFE6D4;
        }

        .font-playfair {
            font-family: 'Playfair Display', serif;
        }

        .custom-input-shadow {
            box-shadow: 0 4px 10px rgba(86, 15, 30, 0.12);
        }

        .shadow-triangle-top {
            filter: drop-shadow(5px 5px 10px rgba(0, 0, 0, 0.15));
        }
    </style>
</head>

<body class="min-h-screen w-full flex items-center justify-center p-0 m-0 overflow-hidden bg-[#EFE6D4] relative">

    <div class="fixed top-0 right-0 h-full w-[35px] bg-[#560F1E] z-[60]"></div>

    <div class="absolute top-0 left-0 w-[200px] h-[150px] bg-[#7A0C22] z-10 shadow-triangle-top"
        style="clip-path: polygon(0 0, 100% 0, 0 100%);"></div>
    <div class="absolute bottom-0 left-[42%] w-[320px] h-[90px] bg-[#7A0C22] z-10"
        style="clip-path: polygon(100% 100%, 0% 100%, 100% 0);"></div>

    <div class="w-full max-w-[1200px] flex flex-col md:flex-row items-stretch relative z-20 px-4 md:px-0">

        <div class="w-full md:w-[55%] flex flex-col items-center justify-center p-6 md:p-12 text-center relative z-20">
            <h1
                class="font-playfair text-3xl md:text-[38px] font-extrabold text-[#560F1E] mb-1 leading-tight max-w-[480px]">
                Your Future Starts With English</h1>
            <p class="text-xs md:text-[13px] text-[#560F1E] font-semibold max-w-[440px] leading-relaxed mb-4">Persiapkan
                TOEFL dengan pengalaman belajar yang interaktif.</p>

            <div class="flex items-center justify-center gap-0 mt-16 px-4">

                <div
                    class="relative w-[200px] h-[280px] bg-[#560F1E] rounded-[30px] skew-x-[-15deg] shadow-[0_15px_30px_rgba(86,15,30,0.5)] z-10">
                    <img src="<?= base_url('assets/images/model cowo1.png') ?>"
                        class="absolute -top-12 left-6 h-[310px] w-auto skew-x-[15deg] z-20 object-cover" alt="Male">

                    <div
                        class="absolute -top-8 -left-24 skew-x-[15deg] bg-white px-3 py-1 rounded-full font-playfair text-[10px] font-bold text-[#560F1E] shadow-md z-30 whitespace-nowrap">
                        Improve Comprehension
                    </div>
                </div>

                <div
                    class="relative w-[200px] h-[280px] bg-[#560F1E] rounded-[30px] skew-x-[-15deg] shadow-[0_15px_30px_rgba(86,15,30,0.5)] z-10 -ml-8">
                    <img src="<?= base_url('assets/images/model cwek1.png') ?>"
                        class="absolute -top-12 -left-14 h-[330px] w-auto skew-x-[15deg] z-20 object-cover"
                        alt="Female">

                    <div
                        class="absolute -bottom-6 -right-12 skew-x-[15deg] bg-white px-3 py-1 rounded-full font-playfair text-[10px] font-bold text-[#560F1E] shadow-md z-30 whitespace-nowrap">
                        Better English Skills
                    </div>
                </div>

            </div>
        </div>

        <div
            class="fixed top-0 right-[35px] h-screen w-[45%] bg-[#EFE6D4] rounded-tl-[150px] rounded-bl-[150px] z-50 flex flex-col items-center justify-center shadow-[-20px_0_50px_rgba(0,0,0,0.1)]">
            <div class="w-full max-w-[420px] px-12">
                <div
                    class="w-[90px] h-[90px] border-[2px] border-[#560F1E] rounded-full bg-[#EFE6D9] flex items-center justify-center mb-4">
                    <i class="fa-regular fa-user text-4xl text-[#560F1E]"></i>
                </div>
                <h2 class="text-3xl font-extrabold text-[#560F1E] mb-8 tracking-wide">Login Account</h2>

                <form action= "<?= site_url('processLogin') ?>" method="POST" class="w-full flex flex-col gap-5">
                    <div class="w-full">
                        <label class="block text-xs font-semibold text-[#8A7E75] mb-1.5">Email Address :</label>
                        <div
                            class="flex h-[50px] bg-[#EFE6D4] border-[2.5px] border-[#560F1E] rounded-xl overflow-hidden custom-input-shadow items-center">
                            <div
                                class="w-[55px] h-full bg-[#560F1E] flex items-center justify-center text-white text-lg">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <input name="email" type="email"
                                class="flex-1 bg-transparent px-4 text-sm font-semibold text-[#560F1E] outline-none"
                                 required>
                        </div>
                    </div>
                    <div class="w-full">
                        <label class="block text-xs font-semibold text-[#8A7E75] mb-1.5">Password :</label>
                        <div
                            class="flex h-[50px] bg-[#EFE6D4] border-[2.5px] border-[#560F1E] rounded-xl overflow-hidden custom-input-shadow items-center">
                            <div
                                class="w-[55px] h-full bg-[#560F1E] flex items-center justify-center text-white text-lg">
                                <i class="fa-solid fa-lock text-sm"></i>
                            </div>
                            <input name="password" id="loginPassword" type="password"
                                class="flex-1 bg-transparent px-4 text-sm font-semibold text-[#560F1E] tracking-widest outline-none"
                               required>
                            <button type="button" onclick="togglePassword('loginPassword', 'loginEyeIcon')"
                                class="pr-4 text-[#560F1E] text-md"><i id="loginEyeIcon"
                                    class="fa-regular fa-eye-slash"></i></button>
                        </div>
                    </div>
                    <div class="w-full flex justify-center mt-6">
                        <button type="submit"
                            class="bg-[#560F1E] font-playfair italic text-white w-[180px] h-[48px] rounded-full text-xl font-bold hover:bg-[#77152a] transition active:scale-95">Login</button>
                    </div>
                </form>
                <p class="text-xs md:text-sm text-[#8A7E75] font-semibold mt-8 tracking-wide text-center">Don't have an
                    account? <a href="<?= base_url('register') ?>" class="font-bold text-[#560F1E] underline">Sign Up</a></p>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(inputId, iconId) {
            const inputField = document.getElementById(inputId);
            const iconElement = document.getElementById(iconId);
            if (inputField.type === "password") {
                inputField.type = "text";
                inputField.classList.remove("tracking-widest");
                iconElement.classList.remove("fa-regular", "fa-eye-slash");
                iconElement.classList.add("fa-solid", "fa-eye");
            } else {
                inputField.type = "password";
                inputField.classList.add("tracking-widest");
                iconElement.classList.remove("fa-solid", "fa-eye");
                iconElement.classList.add("fa-regular", "fa-eye-slash");
            }
        }
    </script>
</body>

</html>
