<?php
$navItems = [
    ['label' => 'Courses', 'dropdown' => true],
    ['label' => 'Programs', 'dropdown' => true],
    ['label' => 'For Business', 'dropdown' => false],
    ['label' => 'Resources', 'dropdown' => true],
    ['label' => 'About Us', 'dropdown' => false],
];

$logos = ['Deloitte.', 'KPMG', 'pwc', 'HARVARD', 'Microsoft', 'IBM'];

$stats = [
    ['icon' => '👥', 'value' => '45,000+', 'label' => 'Active Learners'],
    ['icon' => '🎓', 'value' => '300+', 'label' => 'Courses & Programs'],
    ['icon' => '☆', 'value' => '95%', 'label' => 'Learner Satisfaction'],
    ['icon' => '🌐', 'value' => '150+', 'label' => 'Countries Reached'],
];

$categories = [
    ['title' => 'Cyber Law', 'icon' => '⚖️', 'tone' => 'gold'],
    ['title' => 'Information Security', 'icon' => '🛡️', 'tone' => 'blue'],
    ['title' => 'Digital Forensics', 'icon' => '🔍', 'tone' => 'slate'],
    ['title' => 'Data Privacy', 'icon' => '🔒', 'tone' => 'cyan'],
    ['title' => 'Ethical Hacking', 'icon' => '🧑‍💻', 'tone' => 'purple'],
    ['title' => 'Compliance & Risk', 'icon' => '📋', 'tone' => 'indigo'],
];

$courses = [
    ['badge' => 'Bestseller', 'title' => 'Cyber Law Fundamentals', 'author' => 'Dr. Riya Sharma', 'price' => '₹4,999', 'old' => '₹8,999', 'rating' => '4.8 (1.2K)', 'tone' => 'law'],
    ['badge' => 'New', 'title' => 'Information Security Essentials', 'author' => 'Prof. Arjun Mehta', 'price' => '₹5,499', 'old' => '₹9,999', 'rating' => '4.7 (980)', 'tone' => 'security'],
    ['badge' => 'Popular', 'title' => 'Ethical Hacking Masterclass', 'author' => 'Kunal Singh', 'price' => '₹6,999', 'old' => '₹12,999', 'rating' => '4.9 (2.1K)', 'tone' => 'hacking'],
    ['badge' => 'New', 'title' => 'Digital Forensics Investigator', 'author' => 'Dr. Neha Kapoor', 'price' => '₹5,999', 'old' => '₹10,999', 'rating' => '4.8 (740)', 'tone' => 'forensics'],
];

$benefits = [
    ['icon' => '💡', 'title' => 'Industry-Relevant', 'text' => 'Curriculum designed by industry experts and legal professionals.'],
    ['icon' => '📱', 'title' => 'Flexible Learning', 'text' => 'Learn at your own pace with lifetime access to content.'],
    ['icon' => '🛡️', 'title' => 'Practical Approach', 'text' => 'Real-world case studies, projects & assessments.'],
    ['icon' => '👤', 'title' => 'Career Support', 'text' => 'Get placement assistance and career mentorship.'],
    ['icon' => '🏅', 'title' => 'Certifications', 'text' => 'Earn recognized certificates to boost your career.'],
];

$testimonials = [
    ['name' => 'Rohan Verma', 'role' => 'Privacy Consultant', 'quote' => 'The Cyber Law course helped me transition from legal research to a rewarding career in privacy consulting.', 'avatar' => 'RV'],
    ['name' => 'Aisha Khan', 'role' => 'Information Security Analyst', 'quote' => 'Hands-on labs and real case studies made complex topics easy to understand. Highly recommended!', 'avatar' => 'AK'],
    ['name' => 'Manish Reddy', 'role' => 'Penetration Tester', 'quote' => 'The best platform to learn cyber security from experts. The career support is outstanding!', 'avatar' => 'MR'],
];

$experts = [
    ['name' => 'Dr. Riya Sharma', 'role' => 'Cyber Law Expert', 'avatar' => 'RS'],
    ['name' => 'Prof. Arjun Mehta', 'role' => 'Information Security', 'avatar' => 'AM'],
    ['name' => 'Kunal Singh', 'role' => 'Ethical Hacking Expert', 'avatar' => 'KS'],
    ['name' => 'Dr. Neha Kapoor', 'role' => 'Digital Forensics Expert', 'avatar' => 'NK'],
    ['name' => 'Adv. Rajat Bansal', 'role' => 'Cyber Law Attorney', 'avatar' => 'RB'],
];

$footerColumns = [
    'Explore' => ['Courses', 'Programs', 'Instructors', 'Learning Paths', 'Free Resources'],
    'Company' => ['About Us', 'Careers', 'Blog', 'Press & Media', 'Contact Us'],
    'Support' => ['Help Center', 'FAQs', 'Community', 'Terms of Use', 'Privacy Policy'],
    'For Business' => ['Corporate Training', 'Partnerships', 'Become an Instructor', 'API Access'],
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Cyber Law & Cyber Science</title>
    <style>
        :root {
            --navy: #061230;
            --navy-2: #081a45;
            --ink: #111a3c;
            --muted: #6b7288;
            --cyan: #10d8d2;
            --cyan-2: #0db8ff;
            --purple: #7c3cff;
            --card: #ffffff;
            --line: #e7edf8;
            --shadow: 0 18px 45px rgba(12, 28, 68, .13);
        }

        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            color: var(--ink);
            background: #f7fbff;
        }
        a { color: inherit; text-decoration: none; }
        .container { width: min(1180px, calc(100% - 48px)); margin: 0 auto; }
        .hero {
            color: #fff;
            min-height: 690px;
            background:
                radial-gradient(circle at 76% 18%, rgba(20, 220, 255, .42), transparent 9%),
                radial-gradient(circle at 64% 62%, rgba(126, 60, 255, .36), transparent 17%),
                radial-gradient(circle at 18% 24%, rgba(19, 216, 210, .18), transparent 18%),
                linear-gradient(135deg, #031026 0%, #07194b 52%, #05091f 100%);
            overflow: hidden;
            position: relative;
            padding-bottom: 130px;
        }
        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image:
                radial-gradient(circle, rgba(40, 224, 255, .9) 0 2px, transparent 2px),
                linear-gradient(115deg, transparent 0 45%, rgba(67, 105, 255, .18) 45.2% 45.4%, transparent 45.6%),
                linear-gradient(20deg, transparent 0 62%, rgba(18, 216, 210, .14) 62.2% 62.4%, transparent 62.6%);
            background-size: 220px 180px, 100% 100%, 100% 100%;
            opacity: .5;
            pointer-events: none;
        }
        .topbar {
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            z-index: 2;
        }
        .brand { display: flex; align-items: center; gap: 12px; font-weight: 800; letter-spacing: -.02em; }
        .brand-mark {
            width: 42px; height: 42px; border: 2px solid rgba(255,255,255,.86); border-radius: 14px;
            display: grid; place-items: center; box-shadow: inset 0 0 18px rgba(17,216,210,.22);
        }
        .brand small { display: block; font-weight: 650; font-size: 13px; opacity: .9; margin-top: 2px; }
        .nav { display: flex; align-items: center; gap: 34px; font-size: 14px; }
        .nav a { opacity: .92; }
        .nav .chev { color: var(--cyan); margin-left: 5px; }
        .actions { display: flex; align-items: center; gap: 22px; font-size: 14px; }
        .search { font-size: 22px; line-height: 1; }
        .btn {
            border: 0; border-radius: 10px; padding: 15px 22px; font-weight: 800; cursor: pointer;
            display: inline-flex; align-items: center; justify-content: center; gap: 10px;
            transition: transform .2s ease, box-shadow .2s ease;
        }
        .btn:hover { transform: translateY(-2px); }
        .btn-primary { background: linear-gradient(135deg, var(--cyan), #12b2ff); color: #00172f; box-shadow: 0 12px 28px rgba(15, 216, 210, .28); }
        .btn-outline { color: #fff; border: 1px solid rgba(255,255,255,.72); background: rgba(5, 16, 48, .45); }
        .hero-grid { display: grid; grid-template-columns: .93fr 1.07fr; gap: 42px; align-items: center; position: relative; z-index: 1; padding-top: 62px; }
        .eyebrow { color: var(--cyan); font-weight: 800; letter-spacing: .12em; text-transform: uppercase; font-size: 12px; margin-bottom: 18px; }
        h1 { font-size: clamp(44px, 5vw, 68px); line-height: 1.05; margin: 0 0 26px; letter-spacing: -.055em; }
        .hero p { color: #dbe8ff; font-size: 18px; line-height: 1.5; margin: 0 0 32px; max-width: 560px; }
        .hero-buttons { display: flex; gap: 16px; flex-wrap: wrap; margin-bottom: 44px; }
        .mini-stats { display: flex; gap: 42px; flex-wrap: wrap; }
        .mini-stat { display: flex; align-items: center; gap: 12px; color: #fff; }
        .mini-stat .ico { color: var(--cyan); font-size: 28px; }
        .mini-stat b { display: block; font-size: 21px; }
        .mini-stat span { color: #d6e5ff; font-size: 13px; }
        .visual { min-height: 520px; position: relative; }
        .orbit {
            position: absolute; width: 470px; height: 470px; border: 1px solid rgba(76, 141, 255, .35); border-radius: 50%;
            left: 115px; top: 10px; animation: spin 18s linear infinite;
        }
        @keyframes spin { to { transform: rotate(360deg); } }
        .student {
            position: absolute; left: 180px; top: 90px; width: 315px; height: 360px; border-radius: 46% 54% 44% 56% / 30% 42% 58% 70%;
            background: radial-gradient(circle at 50% 25%, #68d9ff, #2250b9 42%, #191249 76%);
            box-shadow: 0 0 75px rgba(19,216,210,.33), inset 0 -35px 70px rgba(0,0,0,.45);
        }
        .student::before {
            content: "👨‍💻"; position: absolute; inset: 20px; display: grid; place-items: center; font-size: 150px;
            filter: drop-shadow(0 24px 20px rgba(0,0,0,.35));
        }
        .platform {
            position: absolute; left: 115px; bottom: 44px; width: 450px; height: 88px; border-radius: 50%;
            border: 4px solid #20e2ff; box-shadow: 0 0 26px #20e2ff, inset 0 0 35px #7b3cff; background: rgba(50, 57, 177, .2);
        }
        .float-card {
            position: absolute; min-width: 156px; padding: 18px; border: 1px solid rgba(151, 183, 255, .35); border-radius: 12px;
            background: rgba(29, 45, 95, .72); backdrop-filter: blur(14px); box-shadow: 0 20px 35px rgba(0,0,0,.24);
        }
        .float-card b { display: block; font-size: 13px; margin-bottom: 12px; }
        .float-card .card-top { display: flex; align-items: center; gap: 12px; }
        .float-card .sym { font-size: 30px; color: var(--cyan); }
        .progress { height: 8px; width: 100%; border-radius: 999px; background: rgba(255,255,255,.16); overflow: hidden; }
        .bar { height: 100%; background: linear-gradient(90deg, var(--cyan), #835cff); border-radius: inherit; }
        .fc-1 { left: 110px; top: 70px; } .fc-2 { right: 10px; top: 140px; } .fc-3 { left: 72px; top: 220px; } .fc-4 { right: 8px; top: 300px; }
        .cap { position: absolute; right: 155px; top: 44px; font-size: 70px; filter: drop-shadow(0 0 18px rgba(32,226,255,.5)); }
        .main { margin-top: -90px; position: relative; z-index: 3; }
        .panel { background: rgba(255,255,255,.96); border: 1px solid var(--line); border-radius: 14px; box-shadow: var(--shadow); }
        .trusted { padding: 24px 38px 28px; text-align: center; margin-bottom: 18px; }
        .trusted p { margin: 0 0 24px; font-weight: 750; }
        .logo-row { display: grid; grid-template-columns: repeat(6, 1fr); align-items: center; gap: 28px; }
        .logo { font-size: 27px; font-weight: 900; color: #14203c; filter: grayscale(.15); }
        .logo:nth-child(2) { color: #164a9a; font-style: italic; } .logo:nth-child(3) { color: #d15c26; } .logo:nth-child(5)::first-letter { color: #f25022; } .logo:nth-child(6) { color: #4269b2; letter-spacing: .08em; }
        .stats-panel { display: grid; grid-template-columns: repeat(4, 1fr); margin-bottom: 32px; }
        .stat { padding: 24px 26px; display: flex; align-items: center; gap: 18px; border-right: 1px solid var(--line); }
        .stat:last-child { border-right: 0; }
        .stat .bubble { width: 54px; height: 54px; border-radius: 50%; display: grid; place-items: center; background: #e9fffc; color: var(--cyan); font-size: 25px; }
        .stat b { font-size: 27px; display: block; } .stat span { color: var(--muted); font-size: 13px; }
        section { padding: 18px 0 30px; }
        .section-head { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        h2 { margin: 0; font-size: 28px; letter-spacing: -.03em; }
        .view-all { color: #0787b7; font-weight: 800; font-size: 14px; }
        .category-grid { display: grid; grid-template-columns: repeat(6, 1fr); gap: 26px; }
        .category { overflow: hidden; border-radius: 12px; background: #fff; border: 1px solid var(--line); box-shadow: 0 12px 30px rgba(12, 28, 68, .08); position: relative; }
        .cat-art { height: 104px; display: grid; place-items: center; font-size: 55px; background: linear-gradient(135deg, #edf8ff, #071a3d); }
        .category.gold .cat-art { background: linear-gradient(135deg, #f8ead0, #6c411b); }
        .category.blue .cat-art { background: linear-gradient(135deg, #123c91, #020b20); }
        .category.slate .cat-art { background: linear-gradient(135deg, #e8f2fa, #09203f); }
        .category.cyan .cat-art { background: linear-gradient(135deg, #053b61, #071529); }
        .category.purple .cat-art { background: linear-gradient(135deg, #101a49, #2b0d3e); }
        .category.indigo .cat-art { background: linear-gradient(135deg, #edf4ff, #071236); }
        .category h3 { text-align: center; margin: 16px 6px 20px; font-size: 14px; }
        .category .next { position: absolute; right: 10px; bottom: 12px; width: 24px; height: 24px; border-radius: 50%; display: grid; place-items: center; background: #fff; box-shadow: 0 6px 14px rgba(0,0,0,.12); color: #9aa6bb; }
        .course-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 26px; }
        .course { border-radius: 12px; overflow: hidden; background: #fff; border: 1px solid var(--line); box-shadow: 0 14px 35px rgba(12, 28, 68, .1); }
        .course-art { height: 126px; position: relative; background: radial-gradient(circle at 70% 25%, rgba(16,216,210,.8), transparent 12%), linear-gradient(135deg, #091631, #123c91); display: grid; place-items: center; color: #fff; font-size: 54px; }
        .course-art.law { background: linear-gradient(135deg, #09213d, #0b1734 55%, #3d2a15); }
        .course-art.security { background: linear-gradient(135deg, #05224b, #006ecf); }
        .course-art.hacking { background: linear-gradient(135deg, #19042f, #6b20ca); }
        .course-art.forensics { background: linear-gradient(135deg, #013a46, #07233a); }
        .badge { position: absolute; left: 10px; top: 10px; background: #ff9f1c; color: #fff; font-size: 12px; font-weight: 800; padding: 7px 10px; border-radius: 5px; }
        .badge.New { background: #03c99a; } .badge.Popular { background: #ff5a63; }
        .course-body { padding: 18px; }
        .course h3 { margin: 0 0 20px; line-height: 1.15; font-size: 17px; min-height: 40px; }
        .byline, .price-row { display: flex; align-items: center; justify-content: space-between; gap: 12px; color: var(--muted); font-size: 13px; margin-bottom: 18px; }
        .avatar-dot { width: 26px; height: 26px; border-radius: 50%; display: inline-grid; place-items: center; background: linear-gradient(135deg, #ffd7bd, #2a4d8f); color: #fff; font-size: 10px; margin-right: 8px; }
        .rating { color: #f6b200; font-weight: 800; }
        .price { font-size: 20px; color: var(--ink); font-weight: 900; } .old { text-decoration: line-through; color: #a8b0c0; margin-left: 8px; }
        .enroll { width: 100%; padding: 12px; border: 0; border-radius: 7px; color: #002336; font-weight: 900; background: linear-gradient(135deg, var(--cyan), #12b2ff); }
        .why { background: linear-gradient(135deg, #04112e, #071a49); color: #fff; padding: 48px 0 50px; margin-top: 10px; }
        .why h2 { text-align: center; margin-bottom: 10px; }
        .accent { width: 34px; height: 3px; background: var(--cyan); border-radius: 999px; margin: 0 auto 34px; }
        .benefit-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 34px; text-align: center; }
        .benefit .benefit-icon { margin: 0 auto 18px; width: 48px; height: 48px; display: grid; place-items: center; border-radius: 14px; border: 2px solid var(--cyan); color: var(--cyan); font-size: 25px; }
        .benefit h3 { font-size: 15px; margin: 0 0 10px; } .benefit p { color: #d7e5ff; font-size: 13px; line-height: 1.55; margin: 0; }
        .quote-title { display: flex; align-items: center; gap: 10px; }
        .quote-mark { color: #118dcb; font-size: 30px; }
        .testimonial-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 26px; }
        .testimonial { padding: 26px; border-radius: 12px; background: #fff; border: 1px solid var(--line); box-shadow: 0 12px 30px rgba(12, 28, 68, .08); display: grid; grid-template-columns: 64px 1fr; gap: 18px; }
        .portrait, .expert-photo { border-radius: 50%; background: linear-gradient(135deg, #ffe4cf, #18284f); color: #fff; font-weight: 900; display: grid; place-items: center; box-shadow: inset 0 -12px 20px rgba(0,0,0,.18); }
        .portrait { width: 64px; height: 64px; }
        .testimonial p { margin: 0 0 18px; line-height: 1.55; color: #263250; } .testimonial b { display: block; } .testimonial small { color: var(--muted); } .stars { color: #f6b200; letter-spacing: 3px; text-align: right; }
        .expert-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 26px; }
        .expert { background: #fff; border: 1px solid var(--line); border-radius: 12px; overflow: hidden; text-align: center; box-shadow: 0 12px 30px rgba(12, 28, 68, .07); }
        .expert-top { height: 130px; background: linear-gradient(#f8fbff, #eef5fb); display: grid; place-items: end center; }
        .expert-photo { width: 96px; height: 96px; font-size: 22px; transform: translateY(14px); }
        .expert h3 { margin: 28px 0 4px; font-size: 15px; } .expert p { margin: 0 0 14px; color: var(--muted); font-size: 13px; }
        .socials { display: flex; justify-content: center; gap: 14px; color: #71809a; font-size: 12px; padding-bottom: 18px; }
        .cta { margin: 34px 0 0; padding: 28px 92px 28px 280px; min-height: 118px; color: #fff; border-radius: 13px; background: radial-gradient(circle at 90px 80px, #fff 0 36px, transparent 37px), linear-gradient(110deg, #7a35ff, #1678dc 52%, #16c6ae); position: relative; display: flex; justify-content: space-between; align-items: center; overflow: hidden; }
        .cta::before { content: "🚀"; position: absolute; left: 62px; bottom: 10px; font-size: 86px; transform: rotate(-18deg); }
        .cta h2 { color: #fff; margin-bottom: 6px; } .cta p { margin: 0; color: #e7f7ff; }
        footer { background: #061026; color: #fff; padding: 30px 0 18px; }
        .footer-grid { display: grid; grid-template-columns: 1.6fr repeat(4, 1fr); gap: 48px; padding-bottom: 26px; border-bottom: 1px solid rgba(255,255,255,.1); }
        .footer-brand p { color: #bdc9df; line-height: 1.6; font-size: 13px; }
        .footer-socials { display: flex; gap: 12px; }
        .footer-socials span { width: 28px; height: 28px; border-radius: 50%; display: grid; place-items: center; background: rgba(255,255,255,.08); }
        .footer-col h3 { font-size: 13px; margin: 0 0 16px; } .footer-col a { display: block; color: #c3cde0; font-size: 12px; margin-bottom: 10px; }
        .copyright { display: flex; justify-content: space-between; color: #b9c4d8; font-size: 12px; padding-top: 18px; }
        .hamburger { display: none; }
        @media (max-width: 980px) {
            .nav, .actions .login, .actions .search { display: none; } .hamburger { display: block; font-size: 28px; }
            .hero-grid { grid-template-columns: 1fr; } .visual { min-height: 420px; transform: scale(.82); transform-origin: top center; }
            .logo-row, .category-grid, .benefit-grid, .expert-grid { grid-template-columns: repeat(2, 1fr); }
            .stats-panel, .course-grid, .testimonial-grid { grid-template-columns: 1fr 1fr; }
            .cta { padding-left: 170px; padding-right: 28px; }
        }
        @media (max-width: 640px) {
            .container { width: min(100% - 28px, 1180px); } .hero { padding-bottom: 70px; } .hero-grid { padding-top: 28px; }
            .brand-copy small { display: none; } h1 { font-size: 43px; } .hero p { font-size: 16px; }
            .visual { display: none; } .main { margin-top: -44px; }
            .logo-row, .category-grid, .stats-panel, .course-grid, .benefit-grid, .testimonial-grid, .expert-grid, .footer-grid { grid-template-columns: 1fr; }
            .stat { border-right: 0; border-bottom: 1px solid var(--line); } .stat:last-child { border-bottom: 0; }
            .cta { padding: 110px 24px 24px; display: block; } .cta::before { left: 28px; top: 14px; bottom: auto; font-size: 70px; }
            .copyright { display: block; line-height: 2; }
        }
    </style>
</head>
<body>
    <header class="hero">
        <div class="container topbar">
            <a class="brand" href="#" aria-label="Master Cyber Law home">
                <span class="brand-mark">🛡️</span>
                <span class="brand-copy">Master Cyber Law<small>& Cyber Science</small></span>
            </a>
            <nav class="nav" aria-label="Primary navigation">
                <?php foreach ($navItems as $item): ?>
                    <a href="#"><?= htmlspecialchars($item['label']) ?><?= $item['dropdown'] ? '<span class="chev">⌄</span>' : '' ?></a>
                <?php endforeach; ?>
            </nav>
            <div class="actions">
                <span class="search" aria-hidden="true">⌕</span>
                <a class="login" href="#">Log in</a>
                <a class="btn btn-primary" href="#">Sign Up</a>
                <span class="hamburger">☰</span>
            </div>
        </div>
        <div class="container hero-grid">
            <div>
                <div class="eyebrow">Cyber Law • Security • Forensics</div>
                <h1>Master the Law.<br>Lead in Cyber.</h1>
                <p>Specialized programs in Cyber Law & Cyber Science designed for the future of digital world.</p>
                <div class="hero-buttons">
                    <a class="btn btn-primary" href="#courses">Explore Courses →</a>
                    <a class="btn btn-outline" href="#">Book a Free Demo ▶</a>
                </div>
                <div class="mini-stats">
                    <div class="mini-stat"><span class="ico">♧</span><span><b>45,000+</b><span>Learners Enrolled</span></span></div>
                    <div class="mini-stat"><span class="ico">◇</span><span><b>120+</b><span>Expert Instructors</span></span></div>
                    <div class="mini-stat"><span class="ico">☆</span><span><b>4.8/5</b><span>Average Rating</span></span></div>
                </div>
            </div>
            <div class="visual" aria-hidden="true">
                <div class="orbit"></div>
                <div class="cap">🎓</div>
                <div class="student"></div>
                <div class="platform"></div>
                <div class="float-card fc-1"><div class="card-top"><span class="sym">⚖️</span><b>Cyber Law</b></div><div class="progress"><span class="bar" style="width:74%"></span></div></div>
                <div class="float-card fc-2"><div class="card-top"><span class="sym">🌀</span><b>Digital<br>Forensics</b></div><div class="progress"><span class="bar" style="width:60%"></span></div></div>
                <div class="float-card fc-3"><div class="card-top"><span class="sym">🛡️</span><b>Digital<br>Forensics</b></div></div>
                <div class="float-card fc-4"><div class="card-top"><span class="sym">🛡️</span><b>Information Security</b></div><div class="progress"><span class="bar" style="width:90%"></span></div></div>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <div class="trusted panel">
                <p>Trusted by learners & professionals from</p>
                <div class="logo-row">
                    <?php foreach ($logos as $logo): ?><div class="logo"><?= htmlspecialchars($logo) ?></div><?php endforeach; ?>
                </div>
            </div>
            <div class="stats-panel panel">
                <?php foreach ($stats as $stat): ?>
                    <div class="stat"><span class="bubble"><?= $stat['icon'] ?></span><span><b><?= htmlspecialchars($stat['value']) ?></b><span><?= htmlspecialchars($stat['label']) ?></span></span></div>
                <?php endforeach; ?>
            </div>
        </div>

        <section class="container">
            <div class="section-head"><h2>Explore Top Categories</h2><a class="view-all" href="#">View all categories →</a></div>
            <div class="category-grid">
                <?php foreach ($categories as $category): ?>
                    <article class="category <?= htmlspecialchars($category['tone']) ?>">
                        <div class="cat-art"><?= $category['icon'] ?></div>
                        <h3><?= htmlspecialchars($category['title']) ?></h3>
                        <span class="next">›</span>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="container" id="courses">
            <div class="section-head"><h2>Featured Courses</h2><a class="view-all" href="#">View all courses →</a></div>
            <div class="course-grid">
                <?php foreach ($courses as $course): ?>
                    <article class="course">
                        <div class="course-art <?= htmlspecialchars($course['tone']) ?>">
                            <span class="badge <?= htmlspecialchars($course['badge']) ?>"><?= htmlspecialchars($course['badge']) ?></span>
                            <?= $course['tone'] === 'law' ? '⚖️' : ($course['tone'] === 'security' ? '🔒' : ($course['tone'] === 'hacking' ? '👨‍💻' : '🌀')) ?>
                        </div>
                        <div class="course-body">
                            <h3><?= htmlspecialchars($course['title']) ?></h3>
                            <div class="byline"><span><span class="avatar-dot">✓</span><?= htmlspecialchars($course['author']) ?></span><span class="rating">★ <?= htmlspecialchars($course['rating']) ?></span></div>
                            <div class="price-row"><span><span class="price"><?= htmlspecialchars($course['price']) ?></span><span class="old"><?= htmlspecialchars($course['old']) ?></span></span></div>
                            <button class="enroll">Enroll Now</button>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="why">
            <div class="container">
                <h2>Why Choose Master Cyber Law?</h2><div class="accent"></div>
                <div class="benefit-grid">
                    <?php foreach ($benefits as $benefit): ?>
                        <article class="benefit"><div class="benefit-icon"><?= $benefit['icon'] ?></div><h3><?= htmlspecialchars($benefit['title']) ?></h3><p><?= htmlspecialchars($benefit['text']) ?></p></article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="section-head"><h2 class="quote-title"><span class="quote-mark">❝</span>What Our Learners Say</h2><a class="view-all" href="#">← →</a></div>
            <div class="testimonial-grid">
                <?php foreach ($testimonials as $testimonial): ?>
                    <article class="testimonial">
                        <div class="portrait"><?= htmlspecialchars($testimonial['avatar']) ?></div>
                        <div><p>“<?= htmlspecialchars($testimonial['quote']) ?>”</p><b><?= htmlspecialchars($testimonial['name']) ?></b><small><?= htmlspecialchars($testimonial['role']) ?></small><div class="stars">★★★★★</div></div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="container">
            <div class="section-head"><h2>Learn From Industry Experts</h2><a class="view-all" href="#">View all instructors →</a></div>
            <div class="expert-grid">
                <?php foreach ($experts as $expert): ?>
                    <article class="expert"><div class="expert-top"><div class="expert-photo"><?= htmlspecialchars($expert['avatar']) ?></div></div><h3><?= htmlspecialchars($expert['name']) ?></h3><p><?= htmlspecialchars($expert['role']) ?></p><div class="socials"><span>in</span><span>𝕏</span><span>◎</span></div></article>
                <?php endforeach; ?>
            </div>
            <div class="cta">
                <div><h2>Ready to Accelerate Your Career?</h2><p>Join thousands of learners who are building in-demand skills for tomorrow.</p></div>
                <a class="btn btn-outline" href="#courses">Start Learning Today →</a>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a class="brand" href="#"><span class="brand-mark">🛡️</span><span>Master Cyber Law<small>& Cyber Science</small></span></a>
                    <p>Empowering learners with world-class education in Cyber Law & Cyber Science.</p>
                    <div class="footer-socials"><span>f</span><span>𝕏</span><span>in</span><span>▶</span><span>◎</span></div>
                </div>
                <?php foreach ($footerColumns as $heading => $links): ?>
                    <div class="footer-col"><h3><?= htmlspecialchars($heading) ?></h3><?php foreach ($links as $link): ?><a href="#"><?= htmlspecialchars($link) ?></a><?php endforeach; ?></div>
                <?php endforeach; ?>
            </div>
            <div class="copyright"><span>© 2024 Master Cyber Law & Cyber Science. All rights reserved.</span><span>Made with ❤ for lifelong learners</span></div>
        </div>
    </footer>
</body>
</html>
