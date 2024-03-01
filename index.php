<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Fatecha</title>

    <!--CSS-->
    <link rel="stylesheet" href="style/style.css">

</head>
<body>
<!--HEADER-->
<header>

<!--    BACKGROUND-->
    <div class="background">

        <!--    NAVBAR-->
        <nav>
            <div id="nav-bar-content">
                <div class="kiri">
                    <img src="asset/Fatecha-Logo.png" alt="fatecha-logo">
                </div>
                <div class="kanan">
                    <ul>
                        <li><a href="#About-Me">About Me</a></li>
                        <li><a href="#Education">Education</a></li>
                        <li><a href="#Programming">Programming</a></li>
                        <li><a href="#Photography">Photography</a></li>
                        <li><a href="#Graphic Design">Graphic Design</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    
        <div class="my-name">
            <div class="name-type">
                <h1><span>Hello!</span> I'm</h1>
                <h1 class="text-typing"><span></span></h1>
            </div>
            <div class="icon">
                <ul>
                    <li><a href="mailto:fatechaprasetyo@gmail.com" target="_blank"><img src="asset/Email-Icon.png" alt=""></a></li>
                    <li><a href="https://www.instagram.com/fatecharizq/" target="_blank"><img src="asset/Instagram-Icon.png" alt=""></a></li>
                    <li><a href="https://github.com/Fatechapp" target="_blank"><img src="asset/Github-Icon.png" alt=""></a></li>
                    <li><a href="https://www.linkedin.com/in/fatecha-rizqi-452aa5293/" target="_blank"><img src="asset/LinkedIn-Icon.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- <section class="about-me">
    <figure class="3-picture">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
    </figure>
    <div class="about-me-text">
        <h2>About me</h2>
        <p>I am Fatecha Rizqi Putra Prasetyo, a student currently studying for an undergraduate degree at BINUS University majoring in Information Systems Accounting and Auditing. I like to learn new things and take on new challenges to develop myself. For my future career, I am interested to work and develop my career on the field of Frontend Developer, IT Auditor, or System Analyst.</p>
    </div>
</section>
<section class="education">
    <h2>Education</h2>
</section>
<section class="project">
    <h2>Project</h2>
    <a href="https://fatechapp.github.io/HexaTech-website/">Hexatech</a>
    <a href="https://beeonecourse.com/">beeonecourse</a>
    <a href="https://fatechapp.github.io/IDCamp-project-dasar-pemrograman-web/">idcamp</a>
    <a href="https://fatechapp.github.io/Bakul-Pak-Eko/">bakul pak eko</a>
</section> -->

<!-- INTRODUCTION -->
<section id="introduction">
    <div class="information-content">
        <h2>About me</h2>
        <p>I am Fatecha Rizqi Putra Prasetyo, a student currently studying for an undergraduate degree at BINUS University majoring in Information Systems Accounting and Auditing. I like to learn new things and take on new challenges to develop myself. For my future career, I am interested to work and develop my career on the field of Frontend Developer, IT Auditor, or System Analyst.</p>
    </div>
</section>

<!-- PROGRAMMING ACCOUNT -->
<section id="prog-account" class="information-section">
    <div class="prog-account-content information-content">
        <h2>Programming Platform I Used</h2>
        <div class="list-card-row">
            <div class="card-prog-account">
                <a href="https://www.hackerrank.com/profile/minecream10">
                    <img src="https://hrcdn.net/fcore/assets/work/header/hackerrank_logo-21e2867566.svg" alt="">
                </a>
                <p>HackerRank</p>
            </div>
            <div class="card-prog-account">
                <a href="https://leetcode.com/Fatechapp/">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/8e/LeetCode_Logo_1.png" alt="">
                </a>
                <p>LeetCode</p>
            </div>
            <div class="card-prog-account">
                <a href="https://app.codesignal.com/profile/fatechapp">
                    <img src="data:image/png;base64,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" alt="">
                </a>
                <p>CodeSignal</p>
            </div>
        </div>
    </div>
</section>

<!-- LEARNING PLATFORM -->
<section id="learning-platform" class="information-section">
    <div class="learning-platform-content information-content">
        <h2>Learning Platform I Used</h2>
        <div class="list-card-row">
            <div class="card-prog-account">
                <a href="https://myskill.id/">
                    <img src="https://myskill.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fmyskill-logo.0b4d0f9d.png&w=256&q=75" alt="">
                </a>
                <p>Myskill</p>
            </div>
            <div class="card-prog-account">
                <a href="https://www.dicoding.com/">
                    <img src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/new-ui-logo.png" alt="">
                </a>
                <p>Dicoding</p>
            </div>
            <div class="card-prog-account">
                <a href="https://dashboard.codepolitan.com/learn">
                    <img src="https://apps.codepolitan.com/sites/learn/uploads/original/2/logo-codepolitan-originals.png" alt="">
                </a>
                <p>Codepolitan</p>
            </div>
            <div class="card-prog-account">
                <a href="https://cx.apps.binus.ac.id/">
                    <img src="https://cx.apps.binus.ac.id/pluginfile.php/1/core_admin/logocompact/300x300/1708070288/CX.png" alt="">
                </a>
                <p>Binus CX</p>
            </div>
        </div>
    </div>
</section>

<!-- LATEST PROJECT -->
<section id="latestProject" class="latestProject information-section">
    <div class="information-content">
        <h2>Latest Project</h2>
        <ul>
            <li><a href="https://beeonecourse.com/">BeeOneCourse</a></li>
            <li><a href="https://fatechapp.github.io/HexaTech-website/">Hexatech</a></li>
            <li><a href="https://fatechapp.github.io/Iberion/">Iberion</a></li>
            <li><a href="https://fatechapp.github.io/IDCamp-project-dasar-pemrograman-web/">Idcamp</a></li>
            <li><a href="https://fatechapp.github.io/Bakul-Pak-Eko/">Profile Website Bakul Pak Eko</a></li>
        </ul>
    </div>
</section>

<!--FOOTER-->
<footer>
    <p>copyright 2023</p>
</footer>

<!--Javascript-->
<script src="script/script.js" defer></script>

</body>
</html>
