<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

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

        .maroon-cream-glow {
            box-shadow:
                0 0 35px 10px rgba(122, 12, 34, 0.25),
                0 0 60px 25px rgba(239, 230, 212, 0.9);
        }

        .shadow-triangle-top {
            filter: drop-shadow(-5px 5px 10px rgba(0, 0, 0, 0.15));
        }

        /* Drop shadow lurus untuk segitiga bawah */
        .shadow-triangle-bottom {
            filter: drop-shadow(4px -4px 12px rgba(86, 15, 30, 0.15));
        }
    </style>
</head>

<body class="min-h-screen w-full flex items-center justify-center p-0 m-0 overflow-hidden bg-[#EFE6D4] relative">

    <div class="absolute top-0 left-0 w-[65px] h-full bg-[#7A0C22] z-10 shadow-[4px_0_15px_rgba(0,0,0,0.15)]"></div>

    <div class="absolute top-0 right-0 w-[140px] h-[110px] bg-[#7A0C22] z-0 shadow-triangle-top"
        style="clip-path: polygon(100% 0, 100% 100%, 0 0);"></div>

    <div class="absolute bottom-0 left-[43%] w-[340px] h-[160px] bg-[#7A0C22] z-10 shadow-triangle-bottom"
        style="clip-path: polygon(0 100%, 0 0, 100% 100%);"></div>

    <div class="w-full max-w-[1200px] flex flex-col md:flex-row items-stretch relative z-20 px-4 md:px-0 md:ml-[65px]">

        <div
            class="w-full md:w-[45%] bg-[#EFE6D4] rounded-[30px] md:rounded-tr-[90px] md:rounded-br-[90px] md:rounded-l-none pt-12 pb-12 px-8 md:pl-16 md:pr-14 flex flex-col items-center justify-center shadow-[20px_15px_40px_rgba(86,15,30,0.06)] relative z-30">

            <div
                class="w-[85px] h-[85px] border-[2px] border-[#560F1E] rounded-full bg-[#EFE6D9] flex items-center justify-center mb-3 shadow-inner">
                <i class="fa-regular fa-user text-4xl text-[#560F1E]"></i>
            </div>

            <h2 class="text-3xl font-extrabold text-[#560F1E] mb-6 tracking-wide">Sign Up</h2>

            
            <form action="<?= site_url('processRegister') ?>" method="POST" class="w-full flex flex-col gap-4">
               

                <div class="w-full">
                    <label class="block text-xs font-semibold text-[#8A7E75] mb-1">Name :</label>
                    <div
                        class="flex h-[46px] bg-[#EFE6D4] border-[2.5px] border-[#560F1E] rounded-xl overflow-hidden custom-input-shadow items-center">
                        <div class="w-[55px] h-full bg-[#560F1E] flex items-center justify-center text-white text-lg">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <input name="name" type="text"
                            class="flex-1 bg-transparent px-4 text-sm font-semibold text-[#560F1E] outline-none"
                             required>
                    </div>
                </div>

                <div class="w-full">
                    <label class="block text-xs font-semibold text-[#8A7E75] mb-1">Email Address :</label>
                    <div
                        class="flex h-[46px] bg-[#EFE6D4] border-[2.5px] border-[#560F1E] rounded-xl overflow-hidden custom-input-shadow items-center">
                        <div class="w-[55px] h-full bg-[#560F1E] flex items-center justify-center text-white text-lg">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <input name="email" type="email"
                            class="flex-1 bg-transparent px-4 text-sm font-semibold text-[#560F1E] outline-none"
                            required>
                    </div>
                </div>

                <div class="w-full">
                    <label class="block text-xs font-semibold text-[#8A7E75] mb-1">Password :</label>
                    <div
                        class="flex h-[46px] bg-[#EFE6D4] border-[2.5px] border-[#560F1E] rounded-xl overflow-hidden custom-input-shadow items-center">
                        <div class="w-[55px] h-full bg-[#560F1E] flex items-center justify-center text-white text-lg">
                            <i class="fa-solid fa-lock text-sm"></i>
                        </div>
                        <input name="password" id="password" type="password"
                        minlength="8"
                            class="flex-1 bg-transparent px-4 text-sm font-semibold text-[#560F1E] tracking-widest outline-none"
                             required>
                        <button type="button" onclick="togglePassword('password', 'eyeIcon1')"
                            class="pr-4 text-[#560F1E] focus:outline-none text-md">
                            <i id="eyeIcon1" class="fa-regular fa-eye-slash"></i>
                        </button>
                    </div>
                </div>

                <div class="w-full">
                    <label class="block text-xs font-semibold text-[#8A7E75] mb-1">Confirm Password :</label>
                    <div
                        class="flex h-[46px] bg-[#EFE6D4] border-[2.5px] border-[#560F1E] rounded-xl overflow-hidden custom-input-shadow items-center">
                        <div class="w-[55px] h-full bg-[#560F1E] flex items-center justify-center text-white text-lg">
                            <i class="fa-solid fa-key text-sm"></i>
                        </div>
                        <input name="confirm_password" id="confirmPassword" type="password"
                            class="flex-1 bg-transparent px-4 text-sm font-semibold text-[#560F1E] tracking-widest outline-none"
                          required>
                        <button type="button" onclick="togglePassword('confirmPassword', 'eyeIcon2')"
                            class="pr-4 text-[#560F1E] focus:outline-none text-md">
                            <i id="eyeIcon2" class="fa-regular fa-eye-slash"></i>
                        </button>
                    </div>
                </div>

                <div class="w-full flex justify-center mt-4">
                    <button type="submit"
                        class="bg-[#560F1E] font-playfair italic text-white w-[170px] h-[46px] rounded-full text-xl font-bold shadow-[0_4px_15px_rgba(86,15,30,0.3)] hover:bg-[#77152a] transition active:scale-95">
                        Start
                    </button>
                </div>
            </form>
        </div>

        <div
            class="w-full md:flex-1 flex flex-col items-center justify-center p-6 md:p-12 pb-36 text-center relative z-20">
            <h1
                class="font-playfair text-3xl md:text-[40px] font-extrabold text-[#560F1E] mb-2 leading-tight relative z-20 max-w-[480px]">
                Create Your Account Today
            </h1>
            <p
                class="text-xs md:text-[13px] text-[#560F1E] font-semibold max-w-[440px] leading-relaxed mb-4 relative z-20">
                Register now to access English learning materials, TOEFL practice, and interactive quizzes.
            </p>

            <div class="relative w-[340px] h-[340px] flex items-center justify-center mb-4">
                <div class="absolute w-[265px] h-[265px] rounded-full maroon-cream-glow pointer-events-none z-0"></div>
                <div
                    class="w-[270px] h-[270px] rounded-full bg-[#7A0C22] overflow-hidden relative z-10 shadow-[0_10px_35px_rgba(0,0,0,0.18)]">
                    <div class="absolute inset-0 bg-gradient-to-tr from-black/15 to-transparent"></div>
                </div>
                <div
                    class="absolute left-[-20px] top-[70px] bg-[#EFE6D4]/95 border-2 border-[#560F1E] px-4 py-1.5 rounded-full font-playfair text-xs font-bold text-[#560F1E] shadow-[0_8px_20px_rgba(0,0,0,0.15)] z-30 -rotate-3 select-none backdrop-blur-sm">
                    Better English Skills
                </div>
                <img src="<?= base_url('assets/images/cwek register.png') ?>"
                    class="h-[335px] w-auto absolute bottom-2 left-1/2 -translate-x-[47%] z-20 object-contain pointer-events-none"
                    style="filter: drop-shadow(4px 8px 12px rgba(0,0,0,0.15));" alt="Student Register">
            </div>

            <p
                class="absolute bottom-20 left-1/2 -translate-x-1/2 text-xs md:text-sm text-[#560F1E] font-semibold z-30 tracking-wide w-full max-w-[300px]">
                Already have an account? <a href="<?= base_url('login') ?>"
                    class="font-bold underline hover:text-[#7A0C22] transition">Login</a>
            </p>
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