<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50">
    <header class="bg-white items-center justify-between w-full">
        <div class="border-b border-blue-200">
            <div class="flex justify-between mx-auto max-w-7xl w-1230 h-10 items-center">
                <div class="flex gap-5">
                    <div class="flex gap-5">
                        <img src="/images/call.png" alt="call rasmi" class="h-5 relative top-0.5 left-1">
                         998 90 821 2776
                    </div>
                    <div class="flex gap-5">
                        <div class="">
                        <img src="/images/mail-01.png" alt="sms rasmi" class="h-5 relative top-0.5 left-2">
                        </div>
                        <h1 class="relative left-2">email: help@mercuryedu.uz</h1>
                    </div>
                </div>
                <div class="text-blue-600 font-semibold">
                    Студентам
                </div>
            </div>
        </div>
        <!-- Menu -->
        <div class="py-4 shadow shadow-blue-100">
            <div class="flex justify-between mx-auto max-w-7xl place-items-center">
                <div>
                    <img src="{{ asset('/images/logo.png') }}" alt="" class="h-10">
                </div>
                <ul class="flex place-items-center space-x-4 font-medium">
                    <li>О нас</li>
                    <li>Тарифы</li>
                    <li>Партнеры</li>
                    <li>Контакты</li>
                    <select name="" id="">
                        <option value="">
                        <li>Ру</li>
                        </option>
                        <option value="">
                        <li>Uzb</li>
                        </option>
                        <option value="">
                        <li>Eng</li>
                        </option>
                    </select>
                    <li>
                        <button class="px-3 py-3 rounded-full bg-blue-700 text-white">
                            Зарегистрироваться
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </header>


   <!-- Banner -->
   <div class="flex max-w-7xl mx-auto place-items-center mt-12">
        <div class="flex-row grid gap-16">
            <div class="font-bold text-4xl leading-20 tracking-normal text-left">
                Запустите собственную </br><span class="font-bold text-blue-700">онлайн-школу</span> за 1 день
            </div>
            <div class="text-gray-500 relative bottom-10">
                Создавайте курсы любой сложности, собирайте базы студентов, принимайте оплаты и управляйте всеми
                процессами
            </div>
            <div>
                <button class="py-4 px-8 w-60  rounded-full  gap-10 bg-blue-700 text-white relative bottom-10">
                    Запустить
                </button>
            </div>
        </div>
        <div>
            <img src="{{ asset('/images/baner-image.png') }}" alt="banner">
        </div>
    </div>

      <!-- Features -->
      <div class="flex-row max-w-7xl mx-auto text-center mt-12">
        <div class="font-medium text-2xl md:text-3xl lg:text-4xl xl:text-5xl">
            <span class="text-blue-700">Mercury</span> — это ...
        </div>
        <div class="flex space-x-4 mt-12">
            <div class="border rounded-xl border-blue-200 p-2 bg-gradient-to-t from-purple-300 to-white">
                <div class="rounded-full h-6 w-6 bg-gray-200"></div>
                <div>Высокая скоростьи стабильность</div>
                <div class="text-xs">Мы арендуем мощные сервера по всему СНГдля того, чтобы ни один клиент не
                    столкнулсяс подтормаживанием при просмотре ваших уроков</div>
            </div>
            <div class="border rounded-xl border-blue-200 p-2 bg-gradient-to-t from-purple-300 to-white">
                <div class="rounded-full h-6 w-6 bg-gray-200"></div>
                <div>Высокая скоростьи стабильность</div>
                <div class="text-xs">Мы арендуем мощные сервера по всему СНГдля того, чтобы ни один клиент не
                    столкнулсяс подтормаживанием при просмотре ваших уроков</div>
            </div>
            <div class="border rounded-xl border-blue-200 p-2 bg-gradient-to-t from-purple-300 to-white">
                <div class="rounded-full h-6 w-6 bg-gray-200"></div>
                <div>Высокая скоростьи стабильность</div>
                <div class="text-xs">Мы арендуем мощные сервера по всему СНГдля того, чтобы ни один клиент не
                    столкнулсяс подтормаживанием при просмотре ваших уроков</div>
            </div>
            <div class="border rounded-xl border-blue-200 p-2 bg-gradient-to-t from-purple-300 to-white">
                <div class="rounded-full h-6 w-6 bg-gray-200"></div>
                <div>Высокая скоростьи стабильность</div>
                <div class="text-xs">Мы арендуем мощные сервера по всему СНГдля того, чтобы ни один клиент не
                    столкнулсяс подтормаживанием при просмотре ваших уроков</div>
            </div>
            <div class="border rounded-xl border-blue-200 p-2 bg-gradient-to-t from-purple-300 to-white">
                <div class="rounded-full h-6 w-6 bg-gray-200"></div>
                <div>Высокая скоростьи стабильность</div>
                <div class="text-xs">Мы арендуем мощные сервера по всему СНГдля того, чтобы ни один клиент не
                    столкнулсяс подтормаживанием при просмотре ваших уроков</div>
            </div>
            <div class="border rounded-xl border-blue-200 p-2 bg-gradient-to-t from-purple-300 to-white">
                <div class="rounded-full h-6 w-6 bg-gray-200"></div>
                <div>Высокая скоростьи стабильность</div>
                <div class="text-xs">Мы арендуем мощные сервера по всему СНГдля того, чтобы ни один клиент не
                    столкнулсяс подтормаживанием при просмотре ваших уроков</div>
            </div>
        </div>
    </div>

       <!-- Achievements -->
       <div class="flex-row max-w-7xl mx-auto items-center justify-between mt-20">
        <div class="text-center font-bold text-3xl ">100+ курсов в Узбекистане запущено</br>
            через <span class="text-blue-700">Mercury</span></div>
        <div class="flex">
            <div>
                <div class="text-2xl text-blue-700 font-bold text-center decoration-blue-200 relative top-14 left-10">124 платформы</div>
                <div class="text-center font-semibold text-sm relative top-20 left-10">
                    Запущено для проведения курсов,<br>вебинаров, тренингов и мастер-классов
                    <img src="images/vector.png" alt="vector rasmi" class="w-40 relative top-7 left-32">
                </div>
            </div>
            <div>
                <div class="text-2xl text-blue-700 font-bold text-center relative top-44 left-24">$270,000</div>
                <div class="text-center font-semibold text-sm relative top-48 left-24">
                    Суммарный доход всех запущенных<br> платформ
                    <img src="images/vector1.png" alt="vector rasmi" class=" w-40 relative bottom-48 left-32 ">
                </div>
            </div>
            <div>
                <div class="text-3xl text-blue-700 font-bold text-center relative top-16 left-44">8000+</div>
                <div class="text-center font-semibold text-sm relative top-20 left-44">
                    Студентов просмотрели курсы,<br>вебинары и тренинги
                    <img src="images/vector2.png" alt="vector rasmi" class=" w-40 relative top-5 left-28">
                </div>
            </div>
            <div>
                <div class="text-3xl text-blue-700 font-bold text-center relative top-40 left-72">20 часов</div>
                <div class="text-center font-semibold text-sm relative left-72 top-44">
                    Среднее время подготовки новой<br> платформы для работы
                </div>
            </div>
        </div>
    </div>
  <!-- Demo request -->
  <div class="w-full bg-gradient-to-r from-purple-700 via-blue-600 to-blue-900 float relative top-60">
        <div class="max-w-7xl mx-auto grid grid-cols-2 py-40">
            <div class="text-gray-200 text-2xl font-semibold leading-13 tracking-normal">
                Вы хотите запросить демо-версию  или просто задать вопрос? Напишите нам
            </div>
            <div class="flex justify-end">
                <button
                    class="py-4 px-2 w-40 h-14 rounded-full  gap-10 bg-white font-semibold relative right-40 ">Протестировать</button>
            </div>
        </div>
    </div>

      <!-- Starting steps -->
      <div class="flex-row ">
        <div class="mx-auto text-center text-2xl font-semibold leading-14 tracking-normal text-left">Как начать обучать
            <span class="text-blue-700">клиентов</span> уже завтра?
        </div>
        <div class="max-w-3xl mx-auto">
            <div class="flex">
                <div class="w-1/2">
                    <div class="text-lg font-medium leading-11 tracking-normal text-left">Вы связываетесь с нами</div>
                    <div class="text-gray-500">Расскажите о вашем продукте, предоставьте логотипы, баннеры, тексты и то,
                        как вы видите свой будущий сайт</div>
                </div>
                <div class="w-48 absolute  rotate-90 border-2 border-dashed border-gray-300"></div>
                <div class="w-1/2 text-6xl font-extrabold text-left">01</div>
            </div>
            <div class="flex">
                <div class="w-1/2 text-6xl font-extrabold text-right">02</div>
                <div class="w-1/2">
                    <div class="text-lg font-medium leading-11 tracking-normal text-left">Вы связываетесь с нами</div>
                    <span>Расскажите о вашем продукте, предоставьте логотипы, баннеры, тексты и то, как вы видите свой
                        будущий сайт</span>
                </div>
            </div>
            <div class="flex">
                <div class="w-1/2">
                    <div class="text-lg font-medium leading-11 tracking-normal text-left">Вы связываетесь с нами</div>
                    <span>Расскажите о вашем продукте, предоставьте логотипы, баннеры, тексты и то, как вы видите свой
                        будущий сайт</span>
                </div>
                <div class="w-1/2 text-6xl font-extrabold text-left">03</div>
            </div>
            <div class="flex">
                <div class="w-1/2 text-6xl font-extrabold text-right">04</div>
                <div class="w-1/2">
                    <div class="text-lg font-medium leading-11 tracking-normal text-left">Вы связываетесь с нами</div>
                    <span>Расскажите о вашем продукте, предоставьте логотипы, баннеры, тексты и то, как вы видите свой
                        будущий сайт</span>
                </div>
            </div>
            <div class="flex">
                <div class="w-1/2">
                    <div class="text-lg font-medium leading-11 tracking-normal text-left">Вы связываетесь с нами</div>
                    <span>Расскажите о вашем продукте, предоставьте логотипы, баннеры, тексты и то, как вы видите свой
                        будущий сайт</span>
                </div>
                <div class="w-1/2 text-6xl font-extrabold text-left">05</div>
            </div>
            <div class="flex">
                <div class="w-1/2 text-6xl font-extrabold text-right">06</div>
                <div class="w-1/2">
                    <div class="text-lg font-medium leading-11 tracking-normal text-left">Вы связываетесь с нами</div>
                    <span>Расскажите о вашем продукте, предоставьте логотипы, баннеры, тексты и то, как вы видите свой
                        будущий сайт</span>
                </div>
            </div>
            <div class="flex">
                <div class="w-1/2">
                    <div class="text-lg font-medium leading-11 tracking-normal text-left">Вы связываетесь с нами</div>
                    <span>Расскажите о вашем продукте, предоставьте логотипы, баннеры, тексты и то, как вы видите свой
                        будущий сайт</span>
                </div>
                <div class="w-1/2 text-6xl font-extrabold text-left">07</div>
            </div>
            <div class="flex">
                <div class="w-1/2 text-6xl font-extrabold text-right">08</div>
                <div class="w-1/2">
                    <div class="text-lg font-medium leading-11 tracking-normal text-left">Вы связываетесь с нами</div>
                    <span>Расскажите о вашем продукте, предоставьте логотипы, баннеры, тексты и то, как вы видите свой

                    
                    будущий сайт</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing -->
    <div class="max-w-7xl flex-row mx-auto mt-10">
        <div class="flex-row text-center">
            <div class="text-2xl font-semibold tracking-normal mb-5"> Выберите <span
                    class="text-blue-700">тариф</span> </div>
            <div class="text-lg font-normal tracking-normal">Сколько проектов — столько и вариантов реализации.
                </br>Выберите то, что подходит вашему продукту</div>
        </div>
        <div class="flex space-x-4 mt-5 text-center">
            <div class="rounded-xl bg-blue-50 p-8 bg-gray-100">
                <div class="text-xl font-semibold mb-6">Вебинар</div>
                <div class="mb-6 text-gray-500">Подходит, если вам нужно постоянно продавать одинаковый продукт</div>
                <div>
                    <span class="font-semibold">от</span>
                    <span class="font-semibold text-2xl">100$</span>
                </div>
                <ul class="grid gap-y-4 mt-6">
                    <li>Платформа для вебинара</li>
                    <li>Чат и рассылка по клиентам</li>
                    <li>Автоворонка</li>
                    <li>Отправка записей и материаловна почту участникам</li>
                </ul>
                <button class="py-2 w-60 rounded-full bg-blue-700 text-white my-12">Заказать</button>
            </div>
            <div class="rounded-xl bg-blue-50 p-8  bg-gray-100">
                <div class="text-xl font-semibold mb-6">Вебинар</div>
                <div class="mb-6 text-gray-500">Подходит, если вам нужно постоянно продавать одинаковый продукт</div>
                <div>
                    <span class="font-semibold">от</span>
                    <span class="font-semibold text-2xl">100$</span>
                </div>
                <ul class="grid gap-y-4 mt-6">
                    <li>Платформа для вебинара</li>
                    <li>Чат и рассылка по клиентам</li>
                    <li>Автоворонка</li>
                    <li>Отправка записей и материаловна почту участникам</li>
                </ul>
                <button class="py-2 w-60 rounded-full bg-blue-700 text-white my-12">Заказать</button>
            </div>
            <div class="rounded-xl bg-blue-50 p-8 bg-gray-100">
                <div class="text-xl font-semibold mb-6">Вебинар</div>
                <div class="mb-6 text-gray-500">Подходит, если вам нужно постоянно продавать одинаковый продукт</div>
                <div>
                    <span class="font-semibold">от</span>
                    <span class="font-semibold text-2xl">100$</span>
                </div>
                <ul class="grid gap-y-4 mt-6">
                    <li>Платформа для вебинара</li>
                    <li>Чат и рассылка по клиентам</li>
                    <li>Автоворонка</li>
                    <li>Отправка записей и материаловна почту участникам</li>
                </ul>
                <button class="py-2 w-60 rounded-full bg-blue-700 text-white my-12">Заказать</button>
            </div>
        </div>
    </div>

    <!-- Brands -->
    <div class="max-w-7xl mx-auto">
        <div class="text-center text-2xl font-semibold tracking-normal mb-5">Мы сотрудничаем с ведущими <span
                class="text-blue-700">компаниями</span></div>
        <div class="flex space-x-5">
            <!-- justify text center vertiacaly -->
            <div class="w-64 h-24 border border-dashed ">logo 1</div>
            <div class="w-64 h-24 border border-dashed ">logo 2</div>
            <div class="w-64 h-24 border border-dashed ">logo 3</div>
            <div class="w-64 h-24 border border-dashed ">logo 4</div>
            <div class="w-64 h-24 border border-dashed ">logo 5</div>
            <div class="w-64 h-24 border border-dashed ">logo 6</div>
        </div>
    </div>


    <!-- Feedbacks -->
    <div class="max-w-7xl mx-auto">
        <div class="text-center text-2xl font-semibold tracking-normal mb-5">Мнения клиентов <span
                class="text-blue-700">о нас</span></div>
        <div class="flex space-x-4">
            <div class="rounded-xl shadow-xl shadow-gray-100 py-12 px-6">
                <div class="flex items-center">
                    <div class="flex items-center space-x-2">
                        <div class="bg-gray-100 w-16 h-16 rounded-full"></div>
                        <div>
                            <h2 class="font-semibold text-base font-medium leading-6 tracking-normal">Charles Patterson
                            </h2>
                            <div class="text-gray-600">CEO, Mercury Edu</div>
                        </div>
                    </div>
                </div>
                <div class="text-sm text-gray-600 mt-6">Платформа проста и удобна в использовании. Отличные
                    возможности, интуитивный интерфейс. Очень доволен!</div>
            </div>
            <div class="rounded-xl shadow-xl shadow-gray-100 py-12 px-6">
                <div class="flex items-center space-x-2">
                    <div class="bg-gray-100 w-16 h-16 rounded-full"></div>
                    <div>
                        <h2 class="font-semibold text-base font-medium leading-6 tracking-normal">Charles Patterson
                        </h2>
                        <div class="text-gray-600">CEO, Mercury Edu</div>
                    </div>
                </div>
                <div class="text-sm text-gray-600 mt-6">Платформа проста и удобна в использовании. Отличные
                    возможности, интуитивный интерфейс. Очень доволен!</div>
            </div>
            <div class="rounded-xl shadow-xl shadow-gray-100 py-12 px-6">
                <div class="flex items-center space-x-2">
                    <div class="bg-gray-100 w-16 h-16 rounded-full"></div>
                    <div>
                        <h2 class="font-semibold text-base font-medium leading-6 tracking-normal">Charles Patterson
                        </h2>
                        <div class="text-gray-600">CEO, Mercury Edu</div>
                    </div>
                </div>
                <div class="text-sm text-gray-600 mt-6">Платформа проста и удобна в использовании. Отличные
                    возможности, интуитивный интерфейс. Очень доволен!</div>
            </div>
        </div>
    </div>


    <!-- Feedback form -->
    <div class="max-w-7xl mx-auto flex mt-10 grid grid-cols-2">
        <div class="flex-row grid gap-y-4 p-16 mt-8">
            <div class="text-2xl font-semibold  tracking-normal text-left">Форма обратной связи</div>
            <div>Ваше удобное средство для выражения мнения, задания вопросов или предоставления отзывов. Мы готовы
                слушать васи стремимся улучшить наши услуги на основе ваших пожеланий</div>
            <div class="flex">
                <div>998 90 540 70 50</div>
                <div>help@mercuryedu.uz</div>
            </div>
        </div>
        <div class="flex-row p-16">
            <form class="flex flex-col justify-center">
                <div class="flex flex-col">
                    <span>Ваше имя</span>
                    <input type="text" name="price" id="price"
                        class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                </div>
                <div class="flex flex-col mt-2">
                    <span>Email</span>
                    <input type="text" name="price" id="price"
                        class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                </div>
                <div class="flex flex-col mt-2">
                    <span>Телефон</span>
                    <input type="text" name="price" id="price"
                        class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                </div>
                <div class="flex flex-col mt-2">
                    <span>Какой у вас проект?</span>
                    <textarea type="text"
                        class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6"> </textarea>
                </div>
                <button class="rounded-full gap-10 bg-blue-700 mt-5 p-4 text-white">Отправить</button>
            </form>
        </div>
    </div>

    <!-- FAQ -->
    <div class="max-w-7xl mx-auto">
        <div class="text-center">Остались вопросы?</div>
        <div class="grid grid-cols-2">
            <div>FAQ 1</div>
            <div>FAQ 2</div>
            <div>FAQ 3</div>
            <div>FAQ 4</div>
            <div>FAQ 5</div>
        </div>
    </div>

    <!-- Footer -->
    <div>
        <div class="max-w-7xl mx-auto flex justify-between">
            <div>© 2023 OOO «Mercury Edu». Все права защищены</div>
            <div>logo</div>
            <div class="flex">
                <div>Политика конфиденциальности</div>
                <div>Условия использования</div>
            </div>
        </div>
    </div>
</body>

</html>
