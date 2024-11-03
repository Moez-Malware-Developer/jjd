<!DOCTYPE html>
<html lang="ar">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: linear-gradient(180deg, white 0%, rgba(176, 228, 221, 0.30) 100%);
        }
        ul {
            list-style: none;
        }
        .container {
            padding-left: 15px;
            padding-right: 15px;
            margin-left: auto;
            margin-right: auto;
        }
        @media (min-width: 768px) {
            .container {
                width: 750px;
            }
        }
        @media (min-width: 992px) {
            .container {
                width: 970px;
            }
        }
        @media (min-width: 1200px) {
            .container {
                width: 1170px;
            }
        }
        header {
            background-color: rgba(255, 255, 255, 0.6); 
            color: #333;
            padding: 5px 10px; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
            border-radius: 50px; 
            backdrop-filter: blur(10px); 
            position: absolute;
            top: 10px; 
            left: 20px;
            right: 20px;
            z-index: 10;
        }
        header .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 30px;
        }
        header .logo img {
            height: 40px;
            border-radius: 30%; /* الحواف دائرية */
        }
        header nav {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }
        header nav ul {
            display: flex;
        }
        header nav ul li a {
            display: block;
            color: #333;
            text-decoration: none;
            font-size: 23px;
            transition: 0.3s;
            padding: 10px 15px;
        }
        header nav ul li a.dropdown-toggle::after {
            content: '▼'; 
            font-size: 16px;
            margin-left: 5px;
            color: #333;
        }
        .img {
            margin-top: 0;
            padding-top: 0;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }
        .img img {
            width: 100%;
            display: block;
        }
        .dropdown {
            display: none; 
            position: absolute; 
            background-color: rgba(255, 255, 255, 0.6); 
            width: 1310px; 
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); 
            padding: 0; 
            height: auto; 
            border-radius: 50px; 
            left: 0; 
            top: 0px;
            height: 500px;
            margin-right: 50px;
            
        }
        .dropdown li {
            list-style-type: none; 
            display: inline-block; 
            margin: 5px 0;
            width: 30%; 
            box-sizing: border-box; 
            margin-top:90px;
            padding: 10px;
            
        }
        .dropdown li a {
            display: block; 
            
            text-decoration: none; 
            color: black; 
            text-align: center; 
            margin-top:0.5px;
            
            
        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 20px;
            background-color: red;
            color: white;
            border: none;
            font-size: 18px;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 50%;
        }
        .text h2 {
        font-size: 30px;
        margin-right:15px;
        margin-top:30px;
        
        }
        .news h2 {
        font-size: 30px;
        margin-right:15px;
        margin-top:100px;
        } 
        .stats-section {
                position: relative; 
                background-color: #B0E4DD; 
                padding: 20px 0; 
                display: flex; 
                justify-content: space-around; 
                color: white; 
                width: 100%; 
                height: 300px; 
            }
    
            .overlay {
                position: absolute; 
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.5); 
                z-index: 1; 
            }
    
            .stat-item {
                margin: 20px; /* زيادة المسافة بين العناصر */
                text-align: center; /* محاذاة النص في المركز */
                padding: 10px; /* مساحة داخلية للعناصر */
                position: relative; /* لضمان ظهور النص فوق الطبقة */
                z-index: 2; /* لجعل العناصر فوق الطبقة */
                display: flex; /* استخدام flex لجعل الأيقونة والنص في عمود */
                flex-direction: column; /* ترتيب العناصر عمودياً */
                align-items: center; /* محاذاة العناصر في المركز */
            }  
    
            /* تصغير حجم الأيقونات والنصوص */
            .stat-item img {
                margin-top:20px;
                width: 80px; /* حجم الأيقونة */
                height: 80px; /* حجم الأيقونة */
                filter: brightness(0) invert(1); /* تغيير لون الأيقونة إلى الأبيض */
                margin-bottom: 35px; /* مسافة سفلية بين الأيقونة والنص */
            }
    
            .stat-item h2 {
                font-size: 1.5rem; /* حجم عنوان النص */
                margin-bottom: 5px; /* مسافة سفلية بين العنوان والنص */
                font-family: 'SadokArtBold', Arial, sans-serif;
            }
    
            .stat-item p {
                font-size: 1rem; /* حجم نص الفقرة */
                font-family: 'SadokArtBold', Arial, sans-serif;
                color: #fff;
                
            }
    </style>
</head>
<body class="bg-green-50 font-sans flex justify-center flex-col">
    <header>
        <div class="container">
            <a href="#" class="logo">
                <img src="img/1.1.jpg" alt="Logo">
            </a>
            <nav>
                <ul>
                    <li><a href="#">الرئيسية</a></li>
                    <li><a href="#">عن المركز</a></li>
                    <li><a href="#">الأخبار</a></li>
                    <li><a href="#">الأبحاث</a></li>
                    <li>
                    <a href="#" class="dropdown-toggle" onclick="toggleDropdown()">الإدارات</a>
                        <ul class="dropdown" id="dropdown-menu">
                        <button class="close-btn" onclick="toggleDropdown()">X</button>
                            <li><a href="">إدارة البحوث والدراسات</a></li>
                            <li><a href="#">إدارة الشؤون الفنية</a></li>
                            <li><a href="#">إدارة الشؤون الأدارية والمالية</a></li>
                            <li><a href="">إدارة الأعلام والأرشاد</a></li>
                            <li><a href="#">إدارة نظم المعلومات والتوثيق</a></li>
                            <li><a href="#">إدارة تنمية الموارد البشرية</a></li>
                            <li><a href="#">إدارة البحوث الأفتصادية والأجتماعية</a></li>
                        </ul>
                    </li>
                    <li><a href="#">المكاتب</a></li>
                    <li><a href="#">تواصل معنا</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="img">
        <img src="img/2.jpg" alt="صورة">
        </div>
        <div class="w-full md:w-1/2 text-right"style="padding: 5px; margin-top: -23px;">
                <h1 class="text-5xl font-bold text-gray-800 mb-4">عن المركز</h1>
                <p class="text-gray-600 text-2xl leading-relaxed mb-6">
                    "أُعدَّ مركز البحوث الزراعية والحيوانية كأحد أقدم الفِعاليات العلمية في ليبيا، حيث أُسس 
                    <br>
                    كمؤسسة حكومية ذات صفة اعتبارية وفقًا للقانون رقم 109 لعام 1971. يعمل المركز من خلال
                    <br>
                    ثلاث تخصصات رئيسية تغطي جميع مناطق ليبيا، بالإضافة إلى حوالي 11 محطة بحثية تابعة له.
                    <br>
                    انضم إلينا في رحلتنا نحو مستقبل زراعي أفضل!"
                </p>
                <button class="bg-green-600 w-44 h-16 text-xl text-white px-6 py-2 rounded-full hover:bg-green-700">
                    عرض المزيد
                </button>
            </div>
        </div>
    </section>
    
    <img src="img\icon-big.png" alt="icon" class="relative top-4 right-24 w-16 h-16">

    <section class="container flex relative w-[90%] flex-col content-center mx-auto justify-between items-center">
        <div class="relative mt-36 -mr-96 mb-2   ">
            <h1 class="text-5xl font-bold text-gray-800 mb-4">أخبار</h1>
            <p class="text-gray-600 text-2xl leading-relaxed mb-6">
                فى هذا القسمم سيت نشر أخبار المركز            </p>
        </div>
       

         
            <!-- القسم الذي يحتوي على النص -->
          
           

         

            <div class="flex flex-row-reverse my-8 justify-between rounded-3xl "style="border: 1px solid #00A991; items-center; background: linear-gradient(270deg, white 0%, rgba(176, 228, 221, 0.30) 100%);">
                <!-- القسم الذي يحتوي على الصورة -->
                <div class="w-full md:w-1/2 mb-6 md:mb-0 md:pr-8 md:mr-5">
                    <img src="../public/img/imges/img-1.png" alt="صورة توضيحية" class="w-full h-auto rounded-lg shadow-md object-cover" style="margin: 10px 0 10px 0px; padding-left: 20px;">
                </div>
                <div class="w-full md:w-1/2 text-right "style="padding: 20px; ">
                    <h1 class="text-5xl font-bold text-gray-800 mb-4">هذا لنص</h1>
                    <p class="text-gray-600 text-2xl leading-relaxed mb-6">
                        "أُعدَّ مركز البحوث الزراعية والحيوانية كأحد أقدم الفِعاليات العلمية في ليبيا، حيث أُسس 
                        <br>
                        كمؤسسة حكومية ذات صفة اعتبارية وفقًا للقانون رقم 109 لعام 1971. يعمل المركز من خلال
                        <br>
                        ثلاث تخصصات رئيسية تغطي جميع مناطق ليبيا، بالإضافة إلى حوالي 11 محطة بحثية تابعة له.
                        <br>
                        انضم إلينا في رحلتنا نحو مستقبل زراعي أفضل!"
                    </p>
                    <button class="bg-green-600 w-44 h-16 text-xl text-white px-6 py-2 rounded-full hover:bg-green-700">
                        مشاهدة
                    </button>
                    </div>
                    </div>
                    <div class="flex flex-row-reverse my-8 justify-between rounded-3xl" style="border: 1px solid #00A991; items-center; background: linear-gradient(270deg, rgba(176, 228, 221, 0.30) 0%, white 100%);">
                        <!-- القسم الذي يحتوي على النص -->
                        <div class="w-full md:w-1/2 text-right" style="padding: 20px;">
                            <h1 class="text-5xl font-bold text-gray-800 mb-4">هذا لنص</h1>
                            <p class="text-gray-600 text-2xl leading-relaxed mb-6">
                                "أُعدَّ مركز البحوث الزراعية والحيوانية كأحد أقدم الفِعاليات العلمية في ليبيا، حيث أُسس 
                                <br>
                                كمؤسسة حكومية ذات صفة اعتبارية وفقًا للقانون رقم 109 لعام 1971. يعمل المركز من خلال
                                <br>
                                ثلاث تخصصات رئيسية تغطي جميع مناطق ليبيا، بالإضافة إلى حوالي 11 محطة بحثية تابعة له.
                                <br>
                                انضم إلينا في رحلتنا نحو مستقبل زراعي أفضل!"
                            </p>
                            <button class="bg-green-600 w-44 h-16 text-xl text-white px-6 py-2 rounded-full hover:bg-green-700">
                                مشاهدة
                            </button>
                        </div>
                    
                        <!-- القسم الذي يحتوي على الصورة -->
                        <div class="w-full md:w-1/2 mb-6 md:mb-0 md:pl-8 md:ml-5">
                            <img src="../public/img/imges/img-1.png" alt="صورة توضيحية" class="w-full h-auto rounded-lg shadow-md object-cover" style="margin: 10px 0 10px 0px; padding-right: 20px;">
                        </div>
                    </div>
                    
            <div class="flex flex-row-reverse my-8 justify-between rounded-3xl "style="border: 1px solid #00A991; items-center; background: linear-gradient(270deg, white 0%, rgba(176, 228, 221, 0.30) 100%);">
                <!-- القسم الذي يحتوي على الصورة -->
                <div class="w-full md:w-1/2 mb-6 md:mb-0 md:pr-8 md:mr-5">
                    <img src="../public/img/imges/img-1.png" alt="صورة توضيحية" class="w-full h-auto rounded-lg shadow-md object-cover" style="margin: 10px 0 10px 0px; padding-left: 20px;">
                </div>
                <div class="w-full md:w-1/2 text-right "style="padding: 20px; ">
                    <h1 class="text-5xl font-bold text-gray-800 mb-4">هذا لنص</h1>
                    <p class="text-gray-600 text-2xl leading-relaxed mb-6">
                        "أُعدَّ مركز البحوث الزراعية والحيوانية كأحد أقدم الفِعاليات العلمية في ليبيا، حيث أُسس 
                        <br>
                        كمؤسسة حكومية ذات صفة اعتبارية وفقًا للقانون رقم 109 لعام 1971. يعمل المركز من خلال
                        <br>
                        ثلاث تخصصات رئيسية تغطي جميع مناطق ليبيا، بالإضافة إلى حوالي 11 محطة بحثية تابعة له.
                        <br>
                        انضم إلينا في رحلتنا نحو مستقبل زراعي أفضل!"
                    </p>
                    <button class="bg-green-600 w-44 h-16 text-xl text-white px-6 py-2 rounded-full hover:bg-green-700">
                        مشاهدة
                    </button>
                    </div>
                    </div>

                
    </section>

    <hr class="my-4">

    <section class="flex container mx-auto w-full items-center justify-around py-8 mt-12 mx-5 custom-bg rounded-xl">
        <div class="flex flex-col items-center space-y-2">
            <img src="../public/img/icon/الأفرع.png" alt="الأفرع" class="w-16 h-16">
            <h2 class="text-xl font-semibold text-gray-700">الأفرع</h2>
            <p class="text-lg font-bold text-green-500">13</p>
        </div>
        <div class="flex flex-col items-center space-y-2">
            <img src="../public/img/icon/الوظفين.png" alt="الوظفين" class="w-16 h-16">
            <h2 class="text-xl font-semibold text-gray-700">الوظفين</h2>
            <p class="text-lg font-bold text-green-500">719</p>
        </div>
        <div class="flex flex-col items-center space-y-2">
            <img src="../public/img/icon/البحوث.png" alt="البحوث" class="w-16 h-16">
            <h2 class="text-xl font-semibold text-gray-700">البحوث</h2>
            <p class="text-lg font-bold text-green-500">14</p>
        </div>
    </section>
    

    <section>
        <section class="container mx-auto p-8">
            <h1 class="text-3xl font-bold mb-6 text-center">الأبحاث</h1>
            <div class="space-y-6">
                <div class="flex h-96 gap-5">
                    <!-- الصندوق الأيسر -->
                    <div class="flex flex-col w-1/2 p-6 custom-box-left m-2">
                        <h2 class="text-xl font-semibold mb-2">هذا النص</h2>
                        <p>أُعدَّ مركز البحوث الزراعية والحيوانية كأحد أقدم الفِعاليات العلمية في ليبيا، حيث أُسس كمؤسسة حكومية ذات صفة اعتبارية وفقًا للقانون رقم 109 لعام 1971. يعمل المركز من خلال ثلاث تخصصات رئيسية تغطي جميع مناطق ليبيا، بالإضافة إلى حوالي 11 محطة بحثية تابعة له. انضم إلينا في رحلتنا نحو مستقبل زراعي أفضل!</p>
                        <a href="#" class="text-blue-600 mt-auto">قراءة المزيد</a>
                    </div>
                    <!-- الصندوق الأيمن -->
                    <div class="flex flex-col w-1/2 p-6 custom-box-right m-2">
                        <h2 class="text-xl font-semibold mb-2">هذا النص</h2>
                        <p>أُعدَّ مركز البحوث الزراعية والحيوانية كأحد أقدم الفِعاليات العلمية في ليبيا، حيث أُسس كمؤسسة حكومية ذات صفة اعتبارية وفقًا للقانون رقم 109 لعام 1971. يعمل المركز من خلال ثلاث تخصصات رئيسية تغطي جميع مناطق ليبيا، بالإضافة إلى حوالي 11 محطة بحثية تابعة له. انضم إلينا في رحلتنا نحو مستقبل زراعي أفضل!</p>
                        <a href="#" class="text-blue-600 mt-auto">قراءة المزيد</a>
                    </div>
                </div>
                
                <div class="flex h-96 gap-5">
                    <!-- الصندوق الأيسر -->
                    <div class="flex flex-col w-1/2 p-6 custom-box-left m-2">
                        <h2 class="text-xl font-semibold mb-2">هذا النص</h2>
                        <p>أُعدَّ مركز البحوث الزراعية والحيوانية كأحد أقدم الفِعاليات العلمية في ليبيا، حيث أُسس كمؤسسة حكومية ذات صفة اعتبارية وفقًا للقانون رقم 109 لعام 1971. يعمل المركز من خلال ثلاث تخصصات رئيسية تغطي جميع مناطق ليبيا، بالإضافة إلى حوالي 11 محطة بحثية تابعة له. انضم إلينا في رحلتنا نحو مستقبل زراعي أفضل!</p>
                        <a href="#" class="text-blue-600 mt-auto">قراءة المزيد</a>
                    </div>
                    <!-- الصندوق الأيمن -->
                    <div class="flex flex-col w-1/2 p-6 custom-box-right m-2">
                        <h2 class="text-xl font-semibold mb-2">هذا النص</h2>
                        <p>أُعدَّ مركز البحوث الزراعية والحيوانية كأحد أقدم الفِعاليات العلمية في ليبيا، حيث أُسس كمؤسسة حكومية ذات صفة اعتبارية وفقًا للقانون رقم 109 لعام 1971. يعمل المركز من خلال ثلاث تخصصات رئيسية تغطي جميع مناطق ليبيا، بالإضافة إلى حوالي 11 محطة بحثية تابعة له. انضم إلينا في رحلتنا نحو مستقبل زراعي أفضل!</p>
                        <a href="#" class="text-blue-600 mt-auto">قراءة المزيد</a>
                    </div>
                </div>
            </div>
        </section>
        
    </section>


    <button>
        <a href="#" class="relative rounded-full h-12 w-44 border-emerald-300 border items-center justify-center m-6">عرض المزيد</a>
    </button>

    <footer class="flex w-full items-center justify-around flex-row-reverse h-12">
        <div class="">
            <p>Copyright 02024  By : Bilal Reda</p>
        </div>
        <div class="flex items-center justify-around w-1/2">
            <a href="">
                <img src="../public/img/icon/Facebook.png" alt="">
            </a>
            <a href="">
                <img src="../public/img/icon/Twitter.png" alt="">
            </a>
            <a href="">
                <img src="../public/img/icon/instgram.png" alt="">
            </a>
            <a href="">
                <img src="../public/img/icon/Website.png" alt="">
            </a>
        </div>
    </footer>
    <script src="../JS/script.js"></script>
    <style>.custom-box-right {
        background: linear-gradient(270deg, white 0%, rgba(176, 228, 221, 0.30) 100%);
        border-radius: 30px;
        border: 1px solid #00A991;
    }
    
    .custom-box-left {
        background: linear-gradient(270deg, rgba(176, 228, 221, 0.30) 0%, white 100%);
        border-radius: 30px;
        border: 1px solid #00A991;
    }
    
    .flex {
        gap: 20px; 
    }
    
    .m-2 {
        margin: 20px; 
    }
    .custom-bg {
    width: 100%;
    height: 300px;
    background: linear-gradient(180deg, rgba(176, 228, 221, 0.50) 0%, rgba(176, 228, 221, 0.15) 100%);
    border-radius: 15px;
    margin-top: 50px;
    margin-left: 20px;
    margin-right: 20px;
}

    </style>
</body>
</html>
